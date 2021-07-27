<?php
    class CRUD extends ConDB {
        private $query;
        private function prepExec($prep, $exec){
            $this->query=$this->getConn()->prepare($prep);
            $this->query->execute($exec);
        }

        public function insert($table, $condesao, $exec) {
            $this->prepExec('INSERT INTO '.$table.' SET '.$condesao.'',$exec);
            return $this->getConn()->lastInsertId();
        }

        public function select($fields, $table, $condesao, $exec) {
            $this->prepExec('SELECT '.$fields.' FROM '.$table.' '.$condesao.'',$exec);
            return $this->query;
        }

        public function update($table, $condesao, $exec){
            $this->prepExec('UPDATE '.$table.' SET '.$condesao.'',$exec);
        }

        public function delete($table, $condesao, $exec){
            $this->prepExec('DELETE FROM '.$table.' '.$condesao.'',$exec);
        }
    }