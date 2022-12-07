<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of getResultDatewise
 *
 * @author asksoft
 */
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

//header('Content-Type: application/json');
class compliance extends CAaskController
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
        $final = array();
        $data = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata, true);
        if(empty($request)){
            $request=$_POST;
        }
        switch ($request["action"]) {
            case "create":
                $userData = $this->getUserByid($request["userid"]);
                if (isset($userData)) {
                    unset($request["action"]);
                    $request["agent_id"] = $userData["agent_id"];
                    $compliance = $this->ask_mysqli->insert("compliance", $request);
                    $result = $this->adminDB[$_SESSION["db_1"]]->query($compliance);
                    if ($result) {
                        echo json_encode(array("status" => "1", "msg" => "Success"));
                    }
                }
                break;
            case "viewCompliance":
                unset($request["action"]);
                $query = $this->ask_mysqli->select("compliance", $_SESSION["db_1"]) . $this->ask_mysqli->whereSingle($request);
                $result = $this->adminDB[$_SESSION["db_1"]]->query($query);
                $data = array();
                while ($row = $result->fetch_assoc()) {
                    array_push($data, $row);
                }
                echo json_encode(array("status" => "1", "msg" => "Success", "data" => $data));
                break;
            case "loadTable";
                $this->loadTable();
                break;
            default:
                
                echo json_encode(array("status" => "402", "msg" => "Page not found","data"=>$request));
                break;
        }

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
    function getUserByid($userid)
    {
        $query = "SELECT * FROM `enduser` WHERE userid='{$userid}'";
        $result = $this->adminDB[$_SESSION["db_1"]]->query($query);
        if ($row = $result->fetch_assoc()) {
            return $row;
        }
        return;
    }
    function loadTable()
    {
        try {
            $request = $_REQUEST;
            $col = array(
                0 => 'id',
                1 => 'userid',
                2 => 'agent_id',
                3 => 'msg',
                4 => 'create_on'
            );
            $sql = $this->ask_mysqli->select("compliance", $_SESSION["db_1"]);
            $query = $this->executeQuery($_SESSION["db_1"], $sql);
            $totalData = $query->num_rows;
            $totalFilter = $totalData;
            $sql .= $this->ask_mysqli->whereSingle(array("1" => "1"));
            /* Search */
            if (!empty($request['search']['value'])) {
                $sql .= " AND (name Like '%" . $request['search']['value'] . "%'";
                $sql .= " OR  mobileno Like '%" . $request['search']['value'] . "%')";
            }
            /* Order */
            $sql .= $this->ask_mysqli->orderBy($request['order'][0]['dir'], $col[$request['order'][0]['column']]) . $this->ask_mysqli->limitWithOffset($request['start'], $request['length']);
            $query = $this->executeQuery($_SESSION["db_1"], $sql);
            $totalData = $query->num_rows;
            while ($row = $query->fetch_assoc()) {
                $subdata = array();
                $subdata[] = $row['id'];
                $subdata[] = $row['userid'];
                $subdata[] = $row['agent_id'];
                $subdata[] = $row['msg'];
                $subdata[] = $row['create_on'];
                $data[] = $subdata;
            }
            $json_data = array(
                "draw" => intval($request['draw']),
                "recordsTotal" => intval($totalData),
                "recordsFiltered" => intval($totalFilter),
                "data" => $data,
            );
            echo json_encode($json_data);
        } catch (Exception $ex) {
            error_log($ex, 3, "error.log");
        }
    }
}
