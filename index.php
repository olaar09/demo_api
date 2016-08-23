<?php

require 'src/NotORM/NotORM.php';
require 'src/class/Config.php';
require 'src/interface/Action.php';
require 'src/class/DbTasks.php';
require 'src/class/Book.php';
require 'src/class/User.php';


$book = new Book();
$user = new User();

if (key_exists('get_books', $_GET)) {
    echo json_encode($book->getRecords());
} elseif (key_exists('add_book', $_POST)) {
    echo json_encode($book->addRecord(array(
                'cols' => array('book_name', 'book_price'),
                'values' => array($_POST['book_name'], $_POST['book_price'])
    )));
} elseif (key_exists('rm_book', $_POST)) {
    echo json_encode($book->removeRecord(array(
                'key' => $_POST['book_id']
    )));
} elseif (key_exists('get_users', $_GET)) {
    echo json_encode($user->getRecords());
} elseif (key_exists('add_user', $_POST)) {
    echo json_encode($user->addRecord(array(
                'cols' => array('user_firstname', 'user_lastname'),
                'values' => array($_POST['firstname'], $_POST['lastname'])
    )));
} elseif (key_exists('rm_user', $_POST)) {
    echo json_encode($user->removeRecord(array(
                'key' => $_POST['user_id']
    )));
}