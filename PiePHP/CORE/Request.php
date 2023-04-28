<?php

namespace Core;

class Request
{
    private $get;
    private $post;

    public function __construct()
    {
        $this->get = $this->cleanInputs($_GET);
        $this->post = $this->cleanInputs($_POST);
    }

    public function get($key, $default = null)
    {
        return isset($this->get[$key]) ? $this->get[$key] : $default;
    }

    public function post($key, $default = null)
    {
        return isset($this->post[$key]) ? $this->post[$key] : $default;
    }

    public function has($key)
    {
        return isset($this->get[$key]) || isset($this->post[$key]);
    }

    private function cleanInputs($data)
    {
        $cleanData = array();
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $cleanData[$key] = $this->cleanInputs($value);
            }
        } else {
            $cleanData = trim($data);
            $cleanData = stripslashes($cleanData);
            $cleanData = htmlspecialchars($cleanData, ENT_QUOTES, 'UTF-8');
        }
        return $cleanData;
    }
}