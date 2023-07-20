<?php

namespace Ungnguyen\PhpDesignPattern\Structural\Proxy\YoutubeManager;

class CacheYoutubeClass implements ThirdPartyYoutubeLibInterface
{
    private array $listCache = [];

    private array $videoCache = [];

    private ThirdPartyYoutubeLibInterface $youtubeService;

    public function __construct(ThirdPartyYoutubeLibInterface $youtubeService)
    {
        $this->youtubeService = $youtubeService;
    }

    public function listVideos(): array
    {
        if (empty($this->listCache)) {
            $this->listCache = $this->youtubeService->listVideos();
        } else {
            echo "Execute listVideos from proxy\n";
        }
        return $this->listCache;
    }

    public function getVideoInfo(string $videoId)
    {
        if (empty($this->videoCache[$videoId])) {
            $this->videoCache[$videoId] = $this->youtubeService->getVideoInfo($videoId);
        } else {
            echo "Execute getVideoInfo from proxy\n";
        }
        return $this->videoCache[$videoId];
    }
}
