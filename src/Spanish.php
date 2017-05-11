<?php

namespace Styde;

class Spanish implements Language
{
    protected $messages = [
        'BasicBowAttack'    => ':unit dispara una flecha a :opponent', 
        'BasicSwordAttack'  => ':unit ataca con la espada a :opponent', 
        'CrossBowAttack'    => ':unit dispara una flecha con la ballesta a :opponent', 
        'FireBowAttack'     => ':unit dispara una flecha de fuego a :opponent'
    ];

    public function getMessages($key)
    {
        return $this->messages[$key];
    }

}
