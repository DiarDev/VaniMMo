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

class Loader extends PluginBase {

  public function onEnable(): void {
    VapmPMMP::init($this);
  }
}
