<?php

final class Pagination
{
    private $sql;
    private $offset;
    private static $config = [
        "dsn" => "mysql:host=localhost;dbname=pagination",
        "psw" => "",
        "name" => "root"
    ];
    private static $instance;

    private function __construct()
    {
        try {
            $this->sql = new PDO(
                self::$config["dsn"],
                self::$config["name"],
                self::$config["psw"]
            );
            $this->sendData();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    private function getData(){
        $this->offset=$_GET["offset"];
        try{
            $amount=$this->sql->query("SELECT COUNT(1) FROM items")
                    ->fetch(PDO::FETCH_ASSOC);
            $next=true;
            if($amount["COUNT(1)"]-$this->offset<5){
                $next=false;
            }
            return ["items"=>$this->sql->query("SELECT * FROM items LIMIT 5 OFFSET ".(int)$this->offset)
                ->fetchAll(PDO::FETCH_ASSOC), "next"=>$next];
        } catch (PDOException $e){
            die(json_encode(["response"=>$e->getMessage()]));
        }
    }
    private function sendData(){
        $data=[
            "response"=>"ok",
            "data"=>$this->getData(),
        ];
        echo json_encode($data);
    }
    public static function getInstanse()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __wakeup()
    {
    }

    private function __clone()
    {
    }
}
$start=Pagination::getInstanse();