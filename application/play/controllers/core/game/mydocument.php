<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of result
 *
 * @author asksoft
 */
//die(APPLICATION);
//require_once getcwd() . '/' . APPLICATION . "/controllers/Crout.php";
require_once controller;

class mydocument extends CAaskController {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function create() {
        parent::create();
        if (!isset($_SESSION["userid"])) {
            redirect(HOSTURL."?r=logout");
        }
        return;
    }

    public function initialize() {
        parent::initialize();
        $data=array("id"=>$_SESSION["userid"]);
        $response=$this->postJsonRespon(api_url."/?r=getUserDocument", array("data"=>$data));
        $this->isLoadView(array("header" => null, "main" => "mydocument", "footer" => null, "error" => "page_404"), false, array("date"=>$data,"response"=>$response));

        return;
    }

    public function execute() {
        //parent::execute();
        return;
    }

    public function finalize() {
        //parent::finalize();
        return;
    }

    public function reader() {
        //parent::reader();
        return;
    }

    public function distory() {
        //parent::distory();
        return;
    }

}
