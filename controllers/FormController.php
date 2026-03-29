<?php

require_once 'models/DataModel.php';

class FormController 
{
    public function index(){
        include_once 'views/form.php';
    }

    public function store(){
            $model = new DataModel(
                $_POST['firstName'],
                $_POST['lastName'],
                $_POST['phone'],
                $_POST['address']
            );

            $data = $model->getAll();

            include 'views/result.php';

    }

}