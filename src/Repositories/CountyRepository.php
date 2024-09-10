<?php
    namespace App\Repositories;

    class CountyRepository extends BaseRepository
    {
        function __construct(
            $host = 'localhost',
            $user = 'root',
            $password = null,
            $database = 'postoffice')
        {
            parent::__construct($host, $user, $password, $database);
            $this->tableName = 'counties';
        }
    }
?>