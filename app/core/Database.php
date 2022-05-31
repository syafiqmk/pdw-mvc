<?php 

    class Database {

        //property class Database
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $name = DB_NAME;

        //database handler
        private $dbh;
        //statement
        private $stmt;
        
        //method constructor Database
        public function __construct()
        {
            //data source name
            $dsn = "mysql:host=".$this->host.";dbname=".$this->name;

            //create connection
            try {
                $this->dbh = new PDO($dsn, $this->user, $this->pass);
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }

        //get query
        public function query($query) {
            $this->stmt = $this->dbh->prepare($query);
        }

        //binding query
        public function bind($param, $value, $type = null) {

            //switch type
            if(is_null($type)) {
                switch (true) {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;

                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;

                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;

                    default:
                        $type = PDO::PARAM_STR;
                        break;
                }
            }

            $this->stmt->bindValue($param, $value, $type);
        }


        //execute query
        public function execute() {

            $this->stmt->execute();
        }


        //multiple result
        public function resultSet() {
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //single result
        public function single() {
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        }


        //count row
        public function rowCount() {
            return $this->stmt->rowCount();
        }
    }
?>