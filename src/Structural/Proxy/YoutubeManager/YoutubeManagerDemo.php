<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Proxy\YoutubeManager;

use Ungnguyen\PhpDesignPattern\Interfaces\DemoInterface;

class YoutubeManagerDemo implements DemoInterface
{

    public static function main(): void
    {
        $thirdPartyService = new ThirdPartyYoutubeLib();
        $service = new CacheYoutubeClass($thirdPartyService);
        $youtubeManager = new YoutubeManager($service);

        $youtubeManager->groupLogic('abc');
        echo "--------------------------------\n";
        $youtubeManager->groupLogic('xyz');
        echo "--------------------------------\n";
        $youtubeManager->groupLogic('abc');
    }
}
