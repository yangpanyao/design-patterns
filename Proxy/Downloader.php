<?php
namespace DesignPatterns\Proxy;
/**
 * Interface Downloader
 * @package DesignPatterns\Proxy
 */
interface Downloader
{
    public function download(string $url): string;
}