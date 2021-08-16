<?php
    namespace RedeSocial;

    class MySql{

        private static $pdo;

        public static function connect(){
            if(self::$pdo == null){
                define('HOST', 'localhost');
                define('DB', 'sharkbaitdb');
                define('USER', 'root');
                define('PASS', '');

                try{
                    self::$pdo = new \PDO(
                        'mysql:host='.HOST.'; dbname='.DB,USER,PASS,array
                        (\PDO:: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
                }catch(Exception $e){
                    echo 'erro ao conectar';
                    error_log($e->getMessage());
                }
            }

            return self::$pdo;
        }
    }

?>