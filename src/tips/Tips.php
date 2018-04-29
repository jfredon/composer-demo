<?php

namespace tips;

class Tips
{
    private static $tips = [
        'Bien tester son code !',
        'Un couplage faible sera toujours préférable à un couplage fort !',
        'Le formation de l’ALIPTIC est super !',
    ];

    /**
     * Retourne une phrase au hasard
     *
     * @return String
     */
    public static function getRandom()
    {
        $index = array_rand(self::$tips);
        return self::$tips[$index];
    }
}