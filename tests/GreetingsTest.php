<?php

namespace Alnahian2003\GreetingsGenerator\Tests;

use Alnahian2003\GreetingsGenerator\Greetings;
use PHPUnit\Framework\TestCase;

class GreetingsTest extends TestCase
{
    public function test_generates_random_greeting()
    {
        $messages = [
            'হ্যালো', 'কেমন আছেন?', 'আসসালামু আলাইকুম', // Bengali
            'Hi', 'How are you?', 'Hello', // English
            'مرحبا', 'كيف حالك؟', 'السلام عليكم', //  Arabic
            'Merhaba', 'Nasılsınız?', 'Selam', // Turkish
            'Hola', '¿Cómo estás?', 'Saludos', // Spanish
        ];
        $this->assertContains(Greetings::greet(), $messages);
    }

    public function test_generates_random_greeting_in_local_language()
    {
        $messages = ['مرحبا', 'كيف حالك؟', 'السلام عليكم'];
        $this->assertContains(Greetings::greet('ar'), $messages);
    }
}
