<?php
namespace ImagicalGamer\Biomes;
#Plugin
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
#Rand
use pocketmine\Server;
use pocketmine\Player;
#Utils
use pocketmine\utils\TextFormat as C;
#Biomes
use pocketmine\level\generator\biome\Biome;
#Command
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class Main extends PluginBase implements Listener{

  public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(C::GREEN . "Enabled!");
  }
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    if($cmd->getName() == "biome"){
}
}
}
