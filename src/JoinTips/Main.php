<?php

namespace JoinTips;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\PlayerJoinEvent;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer->getPluginManager->registerEvents($this, $this);
$this->getServer()->getLogger->info(TextFormat::BLUE."Join" . TextFormat::GOLD . "Tips" . TextFormat::GREEN . " Enabled!");
$this->getServer()->getLogger->info(TextFormat::BLUE."Join" . TextFormat::GOLD . "Tips" . TextFormat::GREEN . " Created By " . TextFormat::LIGHT_PURPLE . "ItzBulkDev");
$this->saveDefaultConfig
