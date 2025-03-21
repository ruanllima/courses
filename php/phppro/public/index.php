<?php 

require 'bootstrap.php';

try{
    $data = router();
    extract($data['data']);

    if(!isset($data['view']))
    {
        throw new Exception('O índice view não existe');
    }
    var_dump(value: VIEWS.$data['view']);
    if(!file_exists(VIEWS.$data['view']))
    {
        throw new Exception("Essa view {$data['view']}não existe");   
    }

    $view = $data['view'];

    require VIEWS.'/master.php';
} catch(Exception $e){
    var_dump($e -> getMessage());
}