<?php

/*

██    ██  █████  ███    ██ ██ ███    ███ ███    ███  ██████  
██    ██ ██   ██ ████   ██ ██ ████  ████ ████  ████ ██    ██ 
██    ██ ███████ ██ ██  ██ ██ ██ ████ ██ ██ ████ ██ ██    ██ 
 ██  ██  ██   ██ ██  ██ ██ ██ ██  ██  ██ ██  ██  ██ ██    ██ 
  ████   ██   ██ ██   ████ ██ ██      ██ ██      ██  ██████  
   copyright © 2024 - 2024 LootSpace369 - All Rights Reserved.
*/

declare(strict_types = 1);

namespace LootSpace369\VaniMMo;

use pocketmine\plugin\PluginBase;
use vennv\vapm\{VapmPMMP,System};
use LootSpace369\VaniMMo\pet\PetSql;

class Loader extends PluginBase {

  public function onEnable(): void {
    VapmPMMP::init($this);
    PetSql::init($this->getDataFolder());
  }

  public function onDisable() : void {
    PetSql::close();
  }
}
