<?php

class Player
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function play() 
    {
        return "playing...";
    }

    public function train()
    {
        return "training... ";
    }
}

class Team
{
    public $name;
    public $players;
    public $headquarters;
    public $logo;

    public function __construct($name, $players, $headquarters, $logo)
    {
        $this->name = $name;
        $this->players = $players;
        $this->headquarters = $headquarters;
        $this->logo = $logo;
    }
    public function averageAge()
    {
        return array_sum(array_column($this->players, "age")) / count($this->players);
    }
    // lambda player: player.age
}
$players = [
    new Player("Benzema", 33),
    new Player("Acensio", 26)    
];
$realMadrid = new Team("Real Madrid", $players, "Madrid", "real-madrid.png");


var_dump($realMadrid->averageAge());