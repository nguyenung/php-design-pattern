<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Proxy\YoutubeManager;

class ThirdPartyYoutubeLib implements ThirdPartyYoutubeLibInterface
{

    public function listVideos()
    {
        echo "Execute listVideos from third party lib\n";
        return [['id' => 1]];
    }

    public function getVideoInfo(string $videoId)
    {
        echo "Execute getVideoInfo from third party lib\n";
        return [['id' => $videoId]];
    }
}
