<?php

function controller($matchedUri, $params)
{
    [$controller, $method] = explode('@',array_values($matchedUri)[0]);
    $controllerWithNamespace = CONTROLLER_PATH.$controller;

    if(!class_exists($controllerWithNamespace))
    {
        throw new Exception("Controller {$controller} não existe");
    }

    $controllerInstance = new $controllerWithNamespace;
    return $controllerInstance->$method($params);
    
}