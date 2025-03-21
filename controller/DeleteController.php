<?php
session_start();
include_once '../config/db.php';
include_once '../models/DeleteModel.php';

class DeleteController {
    private $db;

    public function __construct() {
        $this->db = new Database('localhost', 'root', '', 'user_data');
    }

    public function delete($id) {
        $model = new DeleteModel($this->db->getConnection(), $id);
        if ($model->deleteRecord()) {
            $_SESSION['message'] = "Record deleted successfully.";
        } else {
            $_SESSION['error'] = "Error deleting record.";
        }
        header("Location: submit.php");
        exit();
    }
}
?>