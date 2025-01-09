<?php

class CreateDB{
    protected $db;
    public function create_archive_db(){
        $arquive_name = 'DB.csv';
        if(!file_exists('./src/helpers/DB.csv')){
            $this->db = fopen('./src/helpers/DB.csv', 'w');
        } else {
            return;
        }
        fclose($this->db);
    }

    public function get_db(){
        return "./src/helpers/DB.csv";
    }
}