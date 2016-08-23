<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Book
 *
 * @author olaar
 */
if (!class_exists("book")) {

    class Book extends DbTasks implements Actions {

        private $table;

        public function __construct() {
            parent::__construct();
            $this->table = $this->getTableName('_book');
        }

        public function getRecords() {
            $allBooks = $this->getAll($this->table);
            return (count($allBooks) > 0) ? $allBooks : array('status' => 404);
        }

        public function addRecord(array $recordData) {
            return ($this->add($this->table, $recordData['cols'], $recordData['values'])) ? array('status' => 200) : array('status' => 404);
        }

        public function removeRecord(array $recordData) {
            return ($this->remove($this->table, $this->getTableCols('_book')[0], $recordData['key'])) ? array('status' => 200) : array('status' => 404);
        }

    }

}
