<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of report
 *
 * @author asksoft
 */
//die(APPLICATION);
//require_once getcwd() . '/' . APPLICATION . "/controllers/Crout.php";
require_once controller;

class test extends CAaskController {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function create() {
        parent::create();
      
        return;
    }

    public function initialize() {
        parent::initialize();
        $response = $this->postJsonRespon(api_url . "/?r=posTicket", array("uid" => "20220922", "utrno" => "9536269", "action" =>"reprint"));
        $data=json_decode($response,true);
        print_r($data["ticket"][0]["ticket"]);
        //$this->isLoadView(array("header" => null, "main" => "report", "footer" => null, "error" => "page_404"), false, array("sdate" => $sdate, "edate" => $edate, "line" => $line, "line2" => $line2, "response" => $response));

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
