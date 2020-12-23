<?php

namespace controllers;

use core\BaseController;

/**
 * Class IndexController
 * @package controllers
 */
class IndexController extends BaseController
{
    /**
     * IndexController constructor.
     */
    public function __construct()
    {

    }

    /**
     * Load view index page with
     */
    public function index()
    {
        $this->loadView('layout/header', []);

        $this->loadView('index', []);

        $this->loadView('layout/footer', []);
    }
}