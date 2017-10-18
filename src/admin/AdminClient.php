<?php

namespace Begame\Admin;

class AdminClient
{

    private static $instance = null;

    private $categories = array();

    public function __construct() {

    }

    public static function get() {
        return (self::$instance === null ? self::$instance = new self() : self::$instance);
    }

    public function createCategory($parent, $category){

    }

    public function setCategory($category) {

    }

    public function getCategories() {
        return $this->categories;
    }




}