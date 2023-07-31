<?php

namespace Ungnguyen\PhpDesignPattern\Behavioral\TemplateMethod\SocialNetworkMessage;

class Helper
{
    /**
     * A little helper function that makes waiting times feel real.
     */
    public static function simulateNetworkLatency($count = 3)
    {
        $i = 0;
        while ($i < $count) {
            echo ".";
            sleep(1);
            $i++;
        }
    }
}
