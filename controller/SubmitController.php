<?php
session_start();
include_once '../config/db.php';
include_once '../models/SubmitModel.php';

class SubmitController {
    private $db;
    private $model;

    public function __construct() {
        $this->db = new Database('localhost', 'root', '', 'user_data');
        $this->model = new SubmitModel($this->db->getConnection());
    }

    public function submit() {
        $this->model->processFormData();
        $data = $this->model->fetchData();
        $this->model->closeConnection();
        include '../views/submit_view.php';
    }
}
?>