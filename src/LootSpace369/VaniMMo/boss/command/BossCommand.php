<?php

declare(strict_types = 1);

namespace LootSpace369\VaniMMo\boss\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginOwned;
use pocketmine\player\Player;
use LootSpace369\VaniMMo\boss\form\BossForm;
use LootSpace369\VaniMMo\Loader;

class BossCommand extends Command implements PluginOwned {
  
	public function __construct(private Loader $main) {
		parent::__construct("Boss", "Command custom boss", null, ["vaniboss"]);
		$this->setPermission("vanimmo.boss.cmd");
		$this->main = $main;
	}

	public function getOwningPlugin() : Main {
		return $this->main;
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args) :bool {
		if(!$sender instanceof Player) {
			$sender->sendMessage("Please use this command in-game!");
			return false;
		}else{
                        BossForm::getInstance()->sendMain($sender);
		return true;
                }
          return false;
	}
}
