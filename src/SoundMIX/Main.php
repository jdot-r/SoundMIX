<?php

namespace SoundMIX;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\level\sound\BatSound;
use pocketmine\level\sound\ClickSound;
use pocketmine\level\sound\DoorSound;
use pocketmine\level\sound\FizzSound;
use pocketmine\level\sound\LaunchSound;
use pocketmine\level\sound\PopSound;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
}

    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        $bat = new BatSound($sender);
        $click = new ClickSound($sender);
        $door = new DoorSound($sender);
        $fizz = new FizzSound($sender);
        $launch = new LaunchSound($sender);
        $pop = new PopSound($sender);
        if ($cmd->getName() === "sound") {
            if($sender->hasPermission("soundmix.command")) {
                if(!isset($args[0]) || count($args) > 1) {
                        $sender->sendMessage(TextFormat::BLUE."§l[§o" . TextFormat::LIGHT_PURPLE . "SoundMIX" . TextFormat::BLUE . "§r§l]" . TextFormat::GOLD . " Usage" . TextFormat::YELLOW . ":" . TextFormat::GOLD . " /sound " . TextFormat::YELLOW . "[" . TextFormat::AQUA . "soundname" . TextFormat::YELLOW . "][" . TextFormat::AQUA . "list" . TextFormat::YELLOW . "]");
                    return true;
                    }

                     if(count($args == 2)) {
                    if($args[0] == "list") {
                        if($sender instanceof Player) {
                                $sender->sendMessage(TextFormat::BLUE."-----------------------------------------");
                                $sender->sendMessage(TextFormat::RED."- §l§o§0Bat §9| §4- §7Click");
                                $sender->sendMessage(TextFormat::RED."- §l§o§6Door §9| §5- §5Fizz");
                                $sender->sendMessage(TextFormat::RED."- §l§o§3Launch §9| §4- §aPop");
                                $sender->sendMessage(TextFormat::BLUE."-----------------------------------------");
                            return true;
                        }
                    }else{
                        if($args[0] == "bat") {
                            if($sender instanceof Player) {
                            $sender->sendTip("§l§o§0Playing Bat Sound");
                            $sender->sendMessage("§l§o§0Playing Bat Sound");
                            $sender->getLevel()->addSound($bat);
                            }else{
                                $sender->sendMessage(TextFormat::RED."Run this command in game!");
                            }
                        }else{
                        if($args[0] == "click") {  
                            if($sender instanceof Player) {
                            $sender->sendPopup("§l§o§7Playing Click Sound");
                            $sender->sendMessage("§l§o§7Playing Click Sound");
                            $sender->getLevel()->addSound($click);
                            }else{
                                $sender->sendMessage(TextFormat::RED."Run this command in game!");
                        }
                    }else{
                        if($args[0] == "door") {  
                            if($sender instanceof Player) {
                            $sender->sendPopup("§l§o§6Playing Door Sound");
                            $sender->sendMessage("§l§o§6Playing Door Sound");
                            $sender->getLevel()->addSound($door);
                            }else{
                                $sender->sendMessage(TextFormat::RED."Run this command in game!");
                        }
                        }else{
                        if($args[0] == "fizz") {  
                            if($sender instanceof Player) {
                            $sender->sendPopup("§l§o§5laying Fizz Sound");
                            $sender->sendMessage("§l§o§5Playing Fizz Sound");
                            $sender->getLevel()->addSound($fizz);
                            }else{
                                $sender->sendMessage(TextFormat::RED."Run this command in game!");
                        }

                        }else{
                        if($args[0] == "launch") {  
                            if($sender instanceof Player) {
                            $sender->sendPopup("§l§o§3Playing Launch Sound");
                            $sender->sendMessage("§l§o§3Playing Launch Sound");
                            $sender->getLevel()->addSound($launch);
                            }else{
                                $sender->sendMessage(TextFormat::RED."Run this command in game!");
                        }

                        }else{
                        if($args[0] == "pop") {  
                            if($sender instanceof Player) {
                            $sender->sendPopup("§l§o§aPlaying Pop Sound");
                            $sender->sendMessage("§l§o§aPlaying Pop Sound");
                            $sender->getLevel()->addSound($pop);
                            }else{
                                $sender->sendMessage(TextFormat::RED."Run this command in game!");
                        }

                        }

                            }
                        }
            }
        }
    }
}
}
}
}
}
}

