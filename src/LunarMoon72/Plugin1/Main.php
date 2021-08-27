<?php

namespace LunarMoon72\Plugin1;

use pocketmine\plugin\PluginBase;

use pocketmine\command\{
	Command, CommandSender
};
use pocketmine\Player;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase{
	public function onLoad() : void {
		$this->getLogger()->info(C::BLUE . "Plugin is Loaded!");
	}
	public function onEnabled() : void {
		$this->getLogger()->info(C::GREEN . "Plugin has been Enabled Successfully!");
	}
	public function onDisabled() : void {
		$this->getLogger()->info(C::RED . "Plugin Disabled sadge");
	}
	public function onCommand(CommandSender $sender, Command $command, String $label, Array $args) : bool {
		switch($command){
			case "food":
			if($sender->getFood() == 20){
				$sender->sendMessage(C::RED . "Your Hunger is Full!");
			}
			$sender->setFood(20);
			$sender->sendMessage(C::GREEN . "Your hunger has been filled!");
			break;

			case "heal":
			if($sender->getHealth() == $sender->getMaxHealth()){
				$sender->sendMessage(C::RED . "Bro are you an idiot, your on max health -.-");
			}
			$sender->setHealth(20);
			$sender->sendMessage(C::GREEN . "You have been healed!");
			breal;

			case "testmessage":
			if(!$sender instanceof Player){
				$this->getLogger()->info("THis is a test message daddy~");
			}
			$sender->sendMessage(C::GREEN . "If you see this... THE THING WORKED!");
			break;


		}
		return true;
	}
}
