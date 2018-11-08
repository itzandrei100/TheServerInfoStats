<?php

namespace ServerStats;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\{Command, CommandSender};

class Main extends PluginBase {

     public function onEnable(){
     }

     public function onCommand(CommandSender $player , Command $cmd, string $label, array $args) :bool {

            switch($cmd->getName()){
            case "ssmg":
             if($player instanceof Player){
                   $player->sendMessage("§bServer IP : test.server.com §3Port: §e19132 §4You§fTube §dChannel : §aItsAndreii Playss")
             }
             break;
             }

           return true;

       }
