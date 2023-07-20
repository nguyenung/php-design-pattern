<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Proxy\YoutubeManager;

class YoutubeManager
{
    protected ThirdPartyYoutubeLibInterface $thirdPartyYoutube;

    public function __construct(ThirdPartyYoutubeLibInterface $thirdPartyYoutube)
    {
        $this->thirdPartyYoutube = $thirdPartyYoutube;
    }

    public function renderVideoPage(string $videoId)
    {
        $videoInfo = $this->thirdPartyYoutube->getVideoInfo($videoId);
    }

    public function renderListVideoPanel()
    {
        $videoList = $this->thirdPartyYoutube->listVideos();
    }

    public function groupLogic($videoId)
    {
        $this->renderVideoPage($videoId);
        $this->renderListVideoPanel();
    }
}
