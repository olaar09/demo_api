<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommonTasks
 *
 * @author olaar
 */
if (!class_exists("Dbasks")) {

    class DbTasks {

        use Config;

        private static $db;

        protected function __construct() {
            try {
                $pdo = new PDO("mysql:host=localhost:8889;dbname=okadabksdb", $this->getDbUserName(), $this->getDbPassword());
                self::$db = new NotORM($pdo);
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        }

        protected function add($table, array $cols, array $values) {
            return self::$db->$table()->insert(array_combine($cols, $values));
        }

        protected function remove($table, $col, $key) {
            return self::$db->$table()->where($col, $key)->delete();
        }

        protected function getAll($table) {
            $all = [];
            foreach (self::$db->$table() as $value) {
                array_push($all, $value);
            }
            return $all ;
        }

    }

}