<?php

/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 10.04.2019
 * Time: 16:13
 */
class imagesModel extends Model
{
    public $table = 'image';

    public function getAll()
    {
        $result = $this->query('SELECT * FROM ' . $this->table);
//         debug($result);
        return $result;
    }
    public function create($rasm){
        //Insert process
        $this->query('INSERT INTO ' . $this->table . '(rasmlar) 
        VALUES ("'.$rasm.'")');
    }

    public function delete($id)
    {
        $this->deleteById($this->table, $id);
    }
}