<?php


class Model
{
    protected $db_connect;

    /**
     * Model constructor.
     */
    protected function __construct()
    {
        $this->db_connect = DataBase::getConnectDB();
    }

}