<?php
    namespace App\Database;

    class DB
    {
        const HOST = 'localhost';
        const USER = 'root';
        const PASSWORD = null;
        const DATABASE = 'postoffice';


        protected $mysqli;

        function __construct(
            $host = 'localhost',
            $user = 'root',
            $password = null,
            $database = 'postoffice'
        )
        {
            $this->mysqli = mysqli_connect($host, $user, $password, $database);

            if(!$this->mysqli)
            {
                die("Connection falied: ".mysqli_connect_error());
            }
            $this->mysqli->set_charset("utf8mb4");
        }

        function __destruct()
        {
            $this->mysqli->close();
        }
    }
?>