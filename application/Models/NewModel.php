<?php

/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 07.04.2019
 * Time: 1:46
 */
class NewModel extends Model
{
    public $table = 'NEWS';

    /**
     * Get all items
     * @return array
     */
    public function getAll(){
        $sql = 'SELECT * FROM ' . $this->table;
        $result = $this->query($sql);
      //  debug($result);
        return $result;
    }
    /**
     * Create news
     * @param $title string
     * @param $body string
     */
    public function create($mavzu, $matn,$rasm,$thumb){
        //Insert process
        $this->query('INSERT INTO ' . $this->table . '(mavzu, matn, sana,rasm,thumb) 
        VALUES ("'.$mavzu.'", "'.$matn.'", NOW(), "'.$rasm.'","'.$thumb.'")');
    }

    /**
     * Search method
     * @param $key
     * @return array
     */
    public function search($key) {
        $result = $this->query('SELECT * FROM '. $this->table
            .' WHERE title LIKE "%'.$key.'%" OR body LIKE "%'.$key.'%"');
        return $result;
    }

    /**
     * Update method
     * @param $id
     * @param $title
     * @param $body
     */
    public function update($id, $mavzu, $matn,$rasm) {
        $this->query('UPDATE '.$this->table.' SET mavzu = "'.$mavzu.'", matn = "'.$matn.'", rasm = "'.$rasm.'"  WHERE id = '.$id);
    }

    /**
     * Get one item
     * @param $id integer
     * @return bool|array
     */
    public function getOne($id)
    {
        $result = $this->query('SELECT * FROM '. $this->table .' WHERE id = '.$id);
        if ($result)
        {
//            $inc = 1 + (int) $result[0]['view'];
//            $increment = $this->connection()
//                ->query('UPDATE '. $this->table . ' SET view = '.$inc. ' WHERE id = '. $id)
//                ->execute();

            return $result;
        }

        return false;
    }

    /**
     * Delete news
     * @param $id
     */
    public function delete($id)
    {
        $this->deleteById($this->table, $id);
    }
}