<?php
namespace DesignPatterns\Proxy;
class ProxyDownloader implements Downloader
{
    private $downloader;
    private $cache = [];
    public function __construct(RealDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
          echo "缓存代理未命中<br>";
          $result = $this->downloader->download($url);
          $this->cache[$url] = $result;
        }else{
            echo "缓存命中,从缓存中检索结果<br>";

        }
       return $this->cache[$url];
    }
}