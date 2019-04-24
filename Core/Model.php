<?php
/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 07.04.2019
 * Time: 1:24
 */
class Model
{

    public function connection() {
        global $ozgaruvchi;
        $connection = new PDO($ozgaruvchi['dsn'], $ozgaruvchi['username'], $ozgaruvchi['password']);
        return $connection;
    }
    public function query($sql){
        $result = $this->connection()->query($sql);
        return ($result) ? $result->fetchAll(): false;
    }
    public function deleteById($table, $id) {
        $this->query('DELETE FROM '.$table.' WHERE id = '.$id);
    }
}