<?php

namespace Alnahian2003\GreetingsGenerator;

class Greetings
{
    private static $messages = ['Hi', 'Hello', 'How Are You'];

    public static function greet()
    {
        return self::$messages[array_rand(self::$messages)];
    }
}
