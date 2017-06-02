<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 5/29/2017
 * Time: 1:38 PM
 */

namespace App\City;

use App\Message\Message;
use App\Model\Database;

class City extends Database
{

    public $id;
    public $name;
    public $city;


    public function setData($postArray){

        if(array_key_exists("id",$postArray)){
            $this->id = $postArray['id'];
        }

        if(array_key_exists("name",$postArray)){
            $this->name = $postArray['name'];
        }

        if(array_key_exists("city",$postArray)){
            $this->city = $postArray['city'];
        }

    } // end of setData()

    public function store(){

        $query = "INSERT INTO `tbl_cities` (`name`, `city`) VALUES (?, ?);";

        $dataArray = array($this->name, $this->city);

        $STH = $this->DBH->prepare($query);
        $result = $STH->execute($dataArray);

        if($result){
            Message::message("Success :) Data Inserted Successfully.");
        }
        else{
            Message::message("Failure :( Data Not Inserted Successfully!");
        }
    } // end of store()


}