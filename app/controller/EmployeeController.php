<?php

namespace app\controller;

use app\model\employee;

class EmployeeController
{
    public function create()
    {
        $template = new TemplateEngineController('New-employee');
        $template->echoOutput();

    }

   public function store()
    {
        $data = $_POST;

        $destination = 'uploads/' . $_FILES['picture']['name'];

        move_uploaded_file($_FILES['picture']['tmp_name'], $destination);

        $data['picture'] = $destination;

        $model = new employee();
        $model->create($data);

        //Redirecting to list
        header('Location: ?view=employee&action=list');
        exit();
    }

    public function list()
    {
        $model = new employee();
        $result = ($model->list());
        $header = '';
        $data = '';

        foreach ($result as $item) {
            if ($header == '') {
                foreach ($item as $key => $value) {
                    $header .= '<th>' . $key . '</th>';
                }
            }

            $data .= '<tr onclick="window.location=\'?view=employee&action=edit&id=' . $item['id'] . '\'">';

            foreach ($item as $key => $value) {
                if ($key == 'picture')
                    $data .= '<td><img src="' . $value . '" width = "50px"></td>';
                else
                    $data .= '<td>' . $value .= '</td>';
            }

            $data .= '</tr>';
        }

        $template = new TemplateEngineController('table-list');
        $template->set('header', $header);
        $template->set('date', $data);
        $template->echoOutput();

    }

    public function edit()
    {
        $model = new employee();
        $result = $model->find($_GET['id']);
        $record = null;

        foreach ($result as $value) {
            $record = $value;
        }
        if (!$record)
            die('Record not found');

        $template = new TemplateEngineController('edit-employee');
        $template->set('id', $record['id']);
        $template->set('name', $record['name']);
        $template->set('birthday', $record['birthday']);
        $template->set('surname', $record['surname']);
        $template->set('sex', $record['sex']);
        $template->set('picture', $record['picture']);
        $template->set('position', $record['position']);
        $template->set('notes', $record['notes']);

        $template->set('sex_'. $record['sex'], 'selected');

        $template->echoOutput();
    }

    public function update()
    {
        $model = new employee();
        $model->update($_GET['id']);

        header('Location: ?view=employee&action=list');
        exit();
    }
    public function delete(){
        $model = new employee();
        $model->delete($_GET['id']);

        header('Location: ?view=employee&action=list');
        exit();
    }

}