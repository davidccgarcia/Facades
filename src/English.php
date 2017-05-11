<?php

namespace Styde;

class English implements Language
{
    protected $messages = [
        'BasicBowAttack'    => ':unit shot an arrow to :opponent', 
        'BasicSwordAttack'  => ':unit attack with the sword to :opponent', 
        'CrossBowAttack'    => ':unit shot an arrow with the crossbow to :opponent', 
        'FireBowAttack'     => ':unit shot a fire arrow to :opponent'
    ];

    public function getMessages($key)
    {
        return $this->messages[$key];
    }
}
