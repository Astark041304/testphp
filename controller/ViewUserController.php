<?php
session_start();
include_once '../config/db.php';
include_once '../models/ViewUserModel.php';

class ViewController {
    private $db;

    public function __construct() {
        $this->db = new Database('localhost', 'root', '', 'user_data');
    }

    public function view($table, $id) {
        $model = new ViewUserModel($this->db->getConnection(), $table, $id);
        $model->fetchRecord();
        $data = $model->getData();
        $model->closeConnection();

        include '../views/user_view.php'; // Load the view
    }
}
?>