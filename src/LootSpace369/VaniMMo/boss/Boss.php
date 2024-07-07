<?php

declare(strict_types = 1);

namespace LootSpace369\VaniMMo\boss;

use pocketmine\entity\{Human,Entity};
use pocketmine\math\Vector3;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\world\Position;

class Boss extends Human {

  public string $bossID;
  public float $damage;
  public boolen $healing = false;
  public int $attackRange;
  public int $attackDelay;
  private Vector3 $spawnPos;
  private float $speed = 1;
  private ?Entity $target = null;
  private array $damagers = [];
  private boolen $fly = false;
  private float $respawnCooldown = 1;
  private int $jumpTime = 0;
  
  public function __construct(Location $location, Skin $skin, CompoundTag $nbt) {
    parent::__construct($location, $skin, $nbt);
    $this->bossID = $nbt->getString("ID");
    $this->damage = $nbt->getFloat("Damage");
    if ($nbt->getString("healing") === "true")$this->healing = true;
    $this->attackRange = $nbt->getInt("AttackRange");
    $this->attackDelay = $nbt->getInt("AttackDelay");
    if($nbt->getString("Fly") === "true")$this->fly = true;
    $this->spawnPos = $location;
    $this->respawnCooldown = $this->getFloat("RespawnCooldown");
  }

  public function initEntity(CompoundTag $nbt): void{
        parent::initEntity($nbt);
        $this->bossID = $nbt->getString("ID");
        $this->damage = $nbt->getFloat("Damage");
        $this->attackRange = $nbt->getInt("AttackRange");
        $this->attackDelay = $nbt->getInt("AttackDelay");
        $this->respawnCooldown = $nbt->getInt("CooldownRespawn");
        $this->setNameTagAlwaysVisible();
        $this->setNameTagVisible();
  }
  
  public function entityBaseTick(int $tickDiff = 1): bool{
    if ($this->jumpTime > 0) {
      $this->jumpTime--;
    }
    return true;
  }
}
