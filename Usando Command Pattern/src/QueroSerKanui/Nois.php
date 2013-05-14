<?php
namespace QueroSerKanui;

class Nois implements KaNoisInterface {
    
    private $command;
    
    public function __construct(KaNois $command) {
        $this->command = $command;
    }
    public function execute($number){
        return $this->command->Nois();
    }
}