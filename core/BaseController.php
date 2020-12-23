<?php

namespace core;

/**
 * Class BaseController
 * @package core
 */
class BaseController
{
    /**
     * @param $params
     * @param array $data
     */
    function loadView($params, $data = array())
    {
        if (file_exists(SITE_PATH . 'views/' . $params . ".php")) {
            if (!empty($data)) {
                extract($data);
            }
            include(SITE_PATH . 'views/' . $params . ".php");
        }
    }
}