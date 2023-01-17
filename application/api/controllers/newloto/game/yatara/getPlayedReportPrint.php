<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of getPlayedReportPrint
 *
 * @author asksoft
 */
//die(APPLICATION);
//require_once getcwd() . '/' . APPLICATION . "/controllers/Crout.php";
require_once controller;

class getPlayedReportPrint extends CAaskController
{

    //put your code here
    public $data = array();

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

        return;
    }

    public function execute()
    {
        parent::execute();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata, true);
        $data = $request;
        $print = array();
        $dt1 = array(
            " Terminal Sale" => $data["total"] - $data["cancel"],
            //            "Cancelled Point" => $data["cancel"],
            " Terminal Win" => $data["win"],
            " Terminal Commission" => $data["commission"],
            " Cancelled Point" => $data["cancel"],
            " Company Payable" => $data["total"] - $data["cancel"] - $data["commission"] - $data["win"],
            " Lotto Game GST (28%)" => ($data["total"] - $data["cancel"]) * 0.28,
            " Terminal Amount" => ($data["total"] - $data["cancel"] - $data["commission"] - $data["win"]) - (($data["total"] - $data["cancel"]) * 0.28)
        );
        $snnp = ((float) $data["netpay"] + (float) $data["commission"]);
        $dt2 = array(
            " Terminal Sale" => $data["total"] - $data["cancel"],
            //            "Commission Point" => $data["commission"],
            " Terminal Win" => $data["win"],
            " Terminal Amount" => $data["total"] - $data["win"]
        );
        ob_start();
        $this->isLoadView(array("header" => "webheader", "main" => "getPlayedReportPrint", "footer" => "webfooter", "error" => "page_404"), false, array("row" => $data, "print1" => $dt1, "report" => "First Balance sheet"));
        echo "<br>";
        $this->isLoadView(array("header" => "webheader", "main" => "getPlayedReportPrint", "footer" => "webfooter", "error" => "page_404"), false, array("row" => $data, "print1" => $dt2, "report" => "Second Balance Sheet"));
        $content = ob_get_contents();
        array_push($print, $content);
        ob_end_clean();
        //        ob_start();
        //        $this->isLoadView(array("header" => "webheader", "main" => "getPlayedReportPrint", "footer" => "webfooter", "error" => "page_404"), false, array("row" => $data, "print1" => $dt2, "report" => "Second Report"));
        //        $content = ob_get_contents();
        //        array_push($print, $content);
        //        ob_end_clean();
        echo json_encode(array("status" => "1", "data" => $print));

        return;
    }

    public function finalize()
    {
        parent::finalize();
        return;
    }

    public function reader()
    {
        parent::reader();
        return;
    }

    public function distory()
    {
        parent::distory();
        return;
    }
}
