<?php

namespace JoinTips;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getServer()->getLogger()->info(TextFormat::BLUE."Join" . TextFormat::GOLD . "Tips" . TextFormat::GREEN . " Enabled!");
$this->getServer()->getLogger()->info(TextFormat::BLUE."Join" . TextFormat::GOLD . "Tips" . TextFormat::GREEN . " Created By " . TextFormat::LIGHT_PURPLE . "ItzBulkDev");
$this->saveDefaultConfig();
$config = $this->getConfig();
$tip = $this->getConfig("Player-Tip");
$tipb = $this->getConfig("Server-Tip");
}

public function onPlayerJoin(PlayerJoinEvent $event){
  $p = $event->getPlayer();
  $pb = $p->getName();
  $pc = $this->getServer()->getOnlinePlayers();
  $p->sendTip($tip);
  $pc->sendTip($tipb);
}
}
