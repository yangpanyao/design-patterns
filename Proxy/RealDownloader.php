<?php
namespace DesignPatterns\Proxy;

/**
 * Class ProxyDownloader
 * @package DesignPatterns\Proxy
 */
class RealDownloader implements Downloader
{
    /**
     * @param string $url
     * @return string
     */
    public function download(string $url): string
    {
        echo "下载文件<br>";
        $result = file_get_contents($url);
        echo "文件大小 " . strlen($result) . "bytes<br>";

        return $result;
    }
}