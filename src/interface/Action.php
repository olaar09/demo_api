<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Action
 *
 * @author olaar
 */
if (!interface_exists("Actions")) {

    interface Actions {

        public function addRecord(array $record);

        public function removeRecord(array $record);

        public function getRecords();
    }

}
