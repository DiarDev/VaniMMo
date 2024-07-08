<?php

namespace LootSpace369\VaniMMo\pet;

class PetSql {
  
  public static ?\SQLite3 $database = null;
  
  public static function init(string $dataFolder) : void {
    self::$database = new \SQLite3($dataFolder . "petSql.db");
    self::$database->exec("CREATE TABLE IF NOT EXISTS pet(xuid VARCHAR NOT NULL, petId VARCHAR NOT NULL)");
  }
  
  public static function exists(string $xuid) : bool {
    if(self::$database === null) {
      return false;
    }
    $result = self::$database->query('SELECT * FROM pet WHERE xuid = "' . $xuid . '"');
    return sqlite_num_rows($result) !== 0;
  }
  
  public static function getData(string $xuid) : ?array {
    if(self::$database === null) {
      return null;
    }
    if(!self::exists($xuid)) {
      return null;
    }
    $result = self::$database->query('SELECT * FROM pet WHERE xuid = "' . $xuid . '"');
    return $result->fetchArray(SQLITE3_ASSOC);
  }
  
  public static function close() : void {
    if(self::$database === null) {
      return;
    }
    self::$database->close();
  }
}
