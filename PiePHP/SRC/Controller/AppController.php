<?php
namespace Controller;

use CORE\Controller;

class AppController extends Controller
{
    public function index()
    {
        $this->render('index');
    }
}