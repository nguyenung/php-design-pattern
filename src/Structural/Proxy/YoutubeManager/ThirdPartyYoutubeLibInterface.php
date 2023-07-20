<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Proxy\YoutubeManager;

interface ThirdPartyYoutubeLibInterface
{
    public function listVideos();

    public function getVideoInfo(string $videoId);
}
