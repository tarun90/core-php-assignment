<?php

namespace Controller;

use Core\BaseController;
use Model\Owner;

/**
 * Class IndexController
 * @package Controller
 */
class IndexController extends BaseController
{
    /**
     * @var Owner
     */
    protected $owner;

    /**
     * IndexController constructor.
     */
    public function __construct()
    {
        $this->owner = new Owner();
    }

    /**
     * Load view index page with
     */
    public function index()
    {
        $owners = $this->owner->getOwners();

        $data = array(
            'owners' => $owners,
            'owners_count' => $owners->num_rows
        );

        $this->loadView('layout/header', []);

        $this->loadView('index', $data);

        $this->loadView('layout/footer', []);
    }
}