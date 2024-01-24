<?php

namespace Alnahian2003\GreetingsGenerator\Tests;

use Alnahian2003\GreetingsGenerator\Greetings;
use PHPUnit\Framework\TestCase;

class GreetingsTest extends TestCase
{
    public function test_generates_random_greeting()
    {
        $messages = ['Hi', 'Hello', 'How Are You'];
        $this->assertContains(Greetings::greet(), $messages);
    }
}
