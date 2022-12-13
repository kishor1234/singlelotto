
<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cashSummery
 *
 * @author asksoft
 */
//die(APPLICATION);
//require_once getcwd() . '/' . APPLICATION . "/controllers/Crout.php";
require_once controller;

class deleteCashSummery extends CAaskController
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
        try {
            $postdata = file_get_contents("php://input");
            $request = json_decode($postdata, true);
            // switch ($request["action"]) {
            //     case "deleteAgent":

            //         break;
            //     case "deleteUser":
            //         break;
            //     default:
            //         break;
            // }
            $sl = $this->ask_mysqli->update(array("active" => 3), "usertranscation") . $this->ask_mysqli->whereBetweenDatesID('on_create', $request["dateform"], $request["dateto"], "userid", $request["own"]) . " AND active='1'";
            $result = $this->adminDB[$_SESSION["db_1"]]->query($sl);
            // $data["query"]=$sl;
            if ($result) {
                $data["message"] = "Data deleted successfully...";
                echo json_encode(array("status" => 1, "data" => $data));
            } else {
                $data["message"] = "Data deleted error...";
                echo json_encode(array("status" => 0, "data" => $data));
            }
        } catch (Exception $ex) {
            $data["message"] = "Data deleted error...";
            echo json_encode(array("status" => 0, "data" => $data));
        }
        return;
    }

    public function execute()
    {
        parent::execute();

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
