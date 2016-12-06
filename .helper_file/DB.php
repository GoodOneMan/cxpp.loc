<?php

class DB
{

    private static $instance = NULL;

    public static function getInstance(){
        if(self::$instance === NULL){
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected $link;

    private function __construct() {
        $this->connect();
    }

    public function __destruct() {
        unset($this->link);
    }

    private function connect() {
        $config = config::instance('db');
        $this->link = new PDO('mysql:host='.$config['host'].';dbname='.$config['base'].';charset='.$config['charset'],
            $config['user'],
            $config['pass'],
            array(
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ));
        $this->link->exec("SET NAMES ".$config['charset']);
    }

    private $bIsSimulate = false;

    public function simulate($bIsSimulate) {
        $this->bIsSimulate = $bIsSimulate;
    }

    public function exec($sQuerySQL, array $rgParams = array()) {
        if ($this->bIsSimulate) {
            var_dump($sQuerySQL, $rgParams);
            return (object) array(
                'id'=>0,
                'affected'=>0
            );
        }
        if (empty($rgParams)) $iAffectedRows = $this->link->exec($sQuerySQL);
        else {
            $rPrepared = $this->link->prepare($sQuerySQL);
            $rPrepared->execute($rgParams);
            $iAffectedRows = $rPrepared->rowCount();
        }
        return (object) array(
            'id'=>$this->link->lastInsertId(),
            'affected'=>(int)$iAffectedRows
        );
    }

    public function query($sQuerySQL, array $rgParams = array()) {
        if (empty($rgParams)) return $this->link->query($sQuerySQL);
        else {
            $rPrepared = $this->link->prepare($sQuerySQL);
            $rPrepared->execute($rgParams);
            return $rPrepared;
        }
    }

    public function begin() {
        $this->link->beginTransaction();
    }

    public function commit() {
        $this->link->commit();
    }

    public function rollback() {
        $this->link->rollback();
    }

    public function ping() {
        //переустанавливает соединение, если то случайно умерло
        try {
            $this->link->query('SELECT 1');
        } catch (PDOException $e) {
            $this->connect();
        }
    }

}