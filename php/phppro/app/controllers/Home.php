<?php

namespace app\controllers;

class Home
{   
    public function index($params)
    {   
        $users = all('products');
        var_dump($users);
        return [
            'view' => 'home.php',
            'data' => ['title' => 'Home'],
        ];
    }
}