<?php

declare(strict_types = 1);

namespace LootSpace369\VaniMMo\boss\form;

use jojoe77777\FormAPI\{SimpleForm,CustomForm};

class BossForm {

  public static function sendMain(Player $player): void {
    $form = new SimpleForm(function(Player,$data) {
      if ($data === null)return;

      switch ($data) {
        case 0:
        break;
        case 1:
        self::createForm($player);
        break;
        case 2:
        self::removeForm($player);
        break;
        case 3:
        self::spawnForm($player);
        break;
        case 4:
        self::spawnAllForm($player);
        break;
        case 5:
        self::addItemForm($player);
        break;
        case 6:
        self::removeItemForm($player);
        break;
      }
    });
    $form->setTitle("Boss main");
    $form->addButton("Exit");
    $form->addButton("Create boss");
    $form->addButton("Remove boss");
    $form->addButton("Spawn boss");
    $form->addButton("Spawn all boss");
    $form->addButton("Add item");
    $form->addButton("Remove item");
    $form->sendToPlayer($player);
  }

  public static function createForm(Player $player): void {
    $form = new CustomForm(function(Player $player, $data) {
      if ($data === null)return;
    });
  }
}
