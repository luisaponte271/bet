<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}

class Apuesta
{  
    public static function getAll()  {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `confrontation`");
        $sql->execute(); 
        $datos = []; 
            while ($row = $sql->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'title' => $row['title'],
                    'team1' => $row['team1'],
                    'team1imagen' => $row['team1imagen'],
                    'team2' => $row['team2'],
                    'team2imagen' => $row['team2imagen'],
                    'profit' => $row['profit'],
                    'date_hour_confrontation' => $row['date_hour_confrontation']
                ]; 
            } 
            return $datos; 
    }
    public static function getWhere($id_)  {
        global $dbh;
        $stmt = $dbh->prepare("SELECT id,title,team1,team2,profit,date_hour_confrontation FROM confrontation WHERE id=:id");
        $stmt->bindParam(':id', $id_); 
        $stmt->execute(); 
        $datos = [];  
            while ($row = $stmt->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'title' => $row['title'],
                    'team1' => $row['team1'],
                    'team2' => $row['team2'],
                    'profit' => $row['profit'],
                    'date_hour_confrontation' => $row['date_hour_confrontation']
                ]; 
            }
            return $datos; 
    }

}