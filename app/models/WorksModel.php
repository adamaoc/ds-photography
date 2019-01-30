<?php
function dateSort($a, $b) {
return strtotime($a['date']) - strtotime($b['date']);
}

class WorksModel
{
    private $_db,
            $_worksFile,
            $_catFile;
    
    function __construct()
    {
        $this->_worksPath = Config::get('data/webdata') . 'works/';
        $this->_catFile = Config::get('data/webdata') . 'work-cats.csv';
        $this->_db = new Data;
    }

    public function getCategories() 
    {
        $catsArr = array(
            'fields' => array(),
            'categories' => array()
        );
        $row = 1;
        if (($handle = fopen($this->_catFile, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if ($row === 1) {
                    foreach ($data as $value) {
                        array_push($catsArr['fields'], $value);
                    }
                } else {
                    foreach ($data as $key => $value) {
                        $field = $catsArr['fields'][$key];
                        $id = $row - 2;
                        $catsArr['categories'][$id][$field] = $value;
                    }
                }
                $row++;
            }
            fclose($handle);
        }
        return $catsArr['categories'];
    }

    public function getWorksByCategory($cat)
    {
        // pull specific file based on category sent in... 
    }
}