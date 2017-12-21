<?php

namespace app\model;

class employee extends CoreModel
{
    protected $table = 'employee_list';

    public function create(array $data)
    {
        print_r($data);

        $query = $this->generateInsertQuery($data, true);

        print_r($this->db_query($query));
    }

}