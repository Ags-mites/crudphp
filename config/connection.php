<?php
    class Connect{
        protected $dbh;
        protected function Connection(){
            try{
                $connect = $this->dbh = new PDO("mysql:local=localhost; dbname=paginawebphp", "root","");
                return $connect;
            }catch(Exception $e){
                print "Error :".$e->getMessage();
                die();
            }
        }
        //validar que la coneccion y los datos sean de tipo utf8
        public function set_name(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>