<?php

namespace App\Models\Database\ConnectDatabase;
use App\Interfaces\InterfaceConnectDatabase;

class ConnectMysqliDatabase implements InterfaceConnectDatabase{

    private $mysqli;

    public function __construct(){
        $this->mysqli = new \Mysqli("127.0.0.1","root","","loja2");
    }

    public function connectDatabase(){
        return $this->mysqli;
    }

}