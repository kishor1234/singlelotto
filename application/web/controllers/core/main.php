<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author asksoft
 */
//die(APPLICATION);
//require_once getcwd() . '/' . APPLICATION . "/controllers/Crout.php";
require_once controller;

class main extends CAaskController
{

    //put your code here
    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        parent::create();

        return;
    }

    public function initialize()
    {
        parent::initialize();
        try {
            // $sql=$this->ask_mysqli->select("hostgame",$_SESSION["db_1"]);
            // $result=$this->adminDB[$_SESSION["db_1"]]->query($sql);
            // $array=array();
            // while($row=$result->fetch_assoc())
            // {
            //     array_push($array, $row);
            // }

            // $this->isLoadView(array("header" => null, "main" => "result", "footer" => null, "error" => "page_404"), false, array("row"=>$array));
            $date = date("Y-m-d");
            if (!empty($_POST["indate"])) {
                $date = $_POST["indate"];
            }
            $response = $this->postJsonRespon(api_url . "/?r=getResultDatewise", array("date" => $date));
            $this->isLoadView(array("header" => null, "main" => "result", "footer" => null, "error" => "page_404"), false, array("date" => $date, "response" => $response));
        } catch (Exception $ex) {
            echo $ex->getMessage();
            error_log($ex, 3, "error.log");
        }
        return;
    }

    public function execute()
    {
        //parent::execute();
        return;
    }

    public function finalize()
    {
        //parent::finalize();
        return;
    }

    public function reader()
    {
        //parent::reader();
        return;
    }

    public function distory()
    {
        //parent::distory();
        return;
    }
}
