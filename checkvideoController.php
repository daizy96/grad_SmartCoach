<?php

require_once("checkvideoClass.php");

class checkvideoController
{
    public function SELECT_checkvideo()
    {
        $VidObj = new checkvideo();
//        $VidObj->Id=$id;
        $Vidrow = $VidObj->select();
        return $Vidrow;
    }

}