<?php

namespace Alnahian2003\GreetingsGenerator;

class Greetings
{
    private static $greetings = [
        'bn' => ['হ্যালো', 'কেমন আছেন?', 'আসসালামু আলাইকুম'], // Bengali
        'en' => ['Hi', 'How are you?', 'Hello'], // English
        'ar' => ['مرحبا', 'كيف حالك؟', 'السلام عليكم'], //  Arabic
        'tr' => ['Merhaba', 'Nasılsınız?', 'Selam'], // Turkish
        'es' => ['Hola', '¿Cómo estás?', 'Saludos'], // Spanish
    ];

    public static function greet(?string $language = null)
    {
        $selectedLanguage = $language ?? array_rand(self::$greetings);
        $selectedGreetings = self::$greetings[$selectedLanguage] ?? self::$greetings['en'];

        return $selectedGreetings[array_rand($selectedGreetings)];
    }
}
