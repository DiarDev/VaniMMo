<?php

namespace LootSpace369\VaniMMo\utils;

use pocketmine\Server;
use pocketmine\player\Player;

class XuidHelper {
  
  public static function getPlayerByXuid(string $xuid) : ?Player {
    foreach(Server::getInstance()->getOnlinePlayers() as $player) {
      if($player->getXuid() === $xuid) {
        return $player;
      }
    }
    return null;
  }
}
