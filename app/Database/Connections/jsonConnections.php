<?php

namespace App\Database\Connections;


use Illuminate\Database\Connection;

class jsonConnections extends Connection
{
    public function __construct($config)
    {
        $db = json_decode(file_get_contents($config['ds'].$config['database']),true);
        parent::__construct($db, $config['database'], '', $config);
    }

    public function select($query , $bindings = [] , $useReadPdo = true)
    {
        return $this->getPdo()['users'];
    }

}
