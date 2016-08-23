<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author olaar
 */
if (!class_exists("User")) {

     class User extends DbTasks implements Actions {
         
        private $table;

        public function __construct() {
            parent::__construct();
            $this->table = $this->getTableName('_user');
        }

        public function getRecords() {
            $allUsers = $this->getAll($this->table);
            return (count($allUsers) > 0) ? $allUsers : array('status' => 404);
        }

        public function addRecord(array $recordData) {
            return ($this->add($this->table, $recordData['cols'], $recordData['values'])) ? array('status' => 200) : array('status' => 404);
        }

        public function removeRecord(array $recordData) {
            return ($this->remove($this->table, $this->getTableCols('_book')[0], $recordData['key'])) ? array('status' => 200) : array('status' => 404);
        }

    }

}