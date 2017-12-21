<?php

namespace app;


use app\controller\EmployeeController;

class Employee
{
    public function __construct()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET' && (!isset($_GET['view']) || !isset($_GET['action']))) {
            (new EmployeeController())->create();
            die();
        }


        $view = $_GET['view'];
        $action = $_GET['action'];


        if ($method == 'GET') {
            switch ($view) {

                case 'employee':
                    if ($action == 'new') {
                        (new EmployeeController())->create();
                    } elseif ($action == 'list') {
                        (new EmployeeController())->list();
                    } elseif ($action = 'edit') {
                        (new EmployeeController())->edit();
                    }

                    break;
            }
        } elseif ($method == 'POST') {
            switch ($view) {
                case 'employee':
                    if ($action == 'create')
                        (new EmployeeController())->store();
                    elseif ($action == 'update')
                        (new EmployeeController())->update();
                    elseif ($action == 'new') {
                        (new EmployeeController())->create();
                    } elseif ($action == 'list') {
                        (new EmployeeController())->list();
                    }elseif ($action == 'delete') {
                        (new EmployeeController())->delete();
                    }


                    break;


            }
        }

        echo "Workplace online!!!";
    }

}