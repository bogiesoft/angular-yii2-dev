<?php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=angularyii2',// MySQL, MariaDB
    // 'dsn' => 'sqlite:test.db', // SQLite
    //'dsn' => 'pgsql:host=localhost;port=5432;dbname=mydatabase', // PostgreSQL
    //'dsn' => 'cubrid:dbname=demodb;host=localhost;port=33000', // CUBRID
    //'dsn' => 'sqlsrv:Server=localhost;Database=mydatabase', // MS SQL Server, sqlsrv driver
    //'dsn' => 'dblib:host=localhost;dbname=mydatabase', // MS SQL Server, dblib driver
    //'dsn' => 'mssql:host=localhost;dbname=mydatabase', // MS SQL Server, mssql driver
    //'dsn' => 'oci:dbname=//localhost:1521/mydatabase', // Oracle
    'username' => 'admin',
    'tablePrefix' => 'ay2_',
    'password' => 'admin',
    'charset' => 'utf8',
];
