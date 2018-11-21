<?php

require_once('db.php');

class checkvideo
{
    public $Id;
    public $VideoId;
    public $Value;
    public $CoachCheck;

    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * from checkvideo";
        $DBObject->connect();
        $result =  $DBObject->execute($sql);

        $DBObject->disconnect();
        return $result;
    }

}