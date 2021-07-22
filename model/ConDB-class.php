<?php
    function __autoload($class){
        require_once "{$class}-class.php";
    }

    abstract class ConDB{

        private $CNX;

        private function setConn(){

            return
                is_null($this->CNX) ?
                    $this->CNX = new PDO("mysql:host=localhost;dbname=trabalhoENADE", "root", "F9e9l9i5p0e060-") :
                    $this->CNX;
        }

        public function getConn(){
            return $this->setConn();
        }
    }

//    $alo = new CRUD;
//    $alo->insert('Administrador','login=?,senha=?,nome=?', array('admin', 'admin', 'Felipe Maxsuel'));
//    $sel=$alo->select('*', 'Administrador','',array());
//    foreach ($sel as $reg){
//        print_r($reg);
//    }