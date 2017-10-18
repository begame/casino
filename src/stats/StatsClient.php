<?php

namespace Begame\Stats;

class StatsClient
{

    private static $instance = null;

    public function __construct() {

    }

    public static function get() {
        return (self::$instance === null ? self::$instance = new self() : self::$instance);
    }

}