<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}

class confrontation
{
    public static function save($key) {
        global $dbh; 
        switch ($key) {
            case "id":
                $stmt = $dbh->prepare("SELECT ".$key." FROM confrontation WHERE id = :id");
                $stmt->bindParam(':id', $_SESSION['id']);
                $stmt->bindParam(':type', $key);
                $stmt->execute(); 
                break;
            case "profit":
                break;

            case ""

        }

    }
}