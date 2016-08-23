<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author olaar
 */
if (!trait_exists('Config')) {

    trait Config {

        protected static $DB_NAME = "okadabksdb";
        protected static $DBUSER_NAME = "okadabooks";
        protected static $DB_PASSWORD = "booksokada1235";
        protected static $HOST = "localhost";
        protected static $TABLES = array(
            '_book' => 'books',
            '_user' => 'users'
        );
        protected static $TABLE_COLS = array(
            '_user' => array(
                'id',
                'user_firstname',
                'user_lastname'
            ),
            '_book' => array(
                'id',
                'book_name',
                'book_price'
            )
        );

        public function getDbName() {
            return self::$DB_NAME;
        }

        public function getDbUserName() {
            return self::$DBUSER_NAME;
        }

        public function getDbPassword() {
            return self::$DB_PASSWORD;
        }

        public function getHost() {
            return self::$HOST;
        }

        public function getTableName($tableName) {
            return self::$TABLES[$tableName];
        }

        public function getTableCols($tableName) {
            return self::$TABLE_COLS[$tableName];
        }

    }

}
