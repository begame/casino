<?php


namespace Begame\Casino;

use Begame\Api\Service;
use Begame\Admin\AdminClient;
use Begame\Stats\StatsClient;

class AWEClient implements AWEClientInterface
{
    private static $instance = null;

    // The url of the casino service

    private static $casinoServiceURL = 'https://casino.begame.nl/';

    // The casino service is able to answer to both a nodejs server and a endpoint via post requests
    // The secretkey will identify the platform

    private $nodeServer = null;
    private $endPoint = null;
    private $secretKey = null;

    private $defaultCurrency = Currency::EUR;
    private $defaultLanguage = Language::ENGLISH;

    private $platformName = null;

    public $admin = null;
    public $stats = null;

    public static function get() {
        return (self::$instance === null ? self::$instance = new self() : self::$instance);
    }

    public function __construct(){
        $this->admin = new AdminClient();
        $this->stats = new StatsClient();
    }

    public function setEndPoint($endPoint) {
        $this->endPoint = $endPoint;
        return $this;
    }

    public function setNodeServer($nodeServer) {
        $this->nodeServer = $nodeServer;
        return $this;
    }

    public function setSecretKey($secretKey) {
        $this->secretKey = $secretKey;
        return $this;
    }

    public function setDefaultLanguage($language) {
        $this->defaultLanguage = $language;
        return $this;
    }

    public function setDefaultCurrency($currency) {
        $this->defaultCurrency = $currency;
        return $this;
    }

    public function getPlatformName()
    {
        return $this->platformName;
    }

    public function setPlatformName($platformName)
    {
        $this->platformName = $platformName;
        return $this;
    }




}