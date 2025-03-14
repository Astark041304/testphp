<?php
session_start();
include_once '../config/db.php';
include_once '../models/ViewAllUserModel.php';

class ViewAllController {
    private $db;

    public function __construct() {
        $this->db = new Database('localhost', 'root', '', 'user_data');
    }

    public function view($id) {
        $model = new ViewAllUserModel($this->db->getConnection(), $id);
        $model->fetchData();
        $data = $model->getData();
        $model->closeConnection();

        include '../views/viewall_view.php'; // Load the view
    }
}
?>