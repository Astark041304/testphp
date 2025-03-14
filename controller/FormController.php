<?php
session_start();
include_once '../config/db.php';
include_once '../models/FormModel.php';

// Define a base path for easier file inclusion
define('BASE_PATH', dirname(__DIR__)); // This points to the 'Advance' directory

class FormController {
    private $formModel;

    public function __construct() {
        $this->formModel = new FormModel();
        $this->formModel->handleRequest();
    }

    public function render() {
        $errors = $this->formModel->getErrors();
        $formData = $this->formModel->getFormData();
        $civilStatusOptions = $this->formModel->getCivilStatusOptions();
        $countryOptions = $this->formModel->getCountryOptions();

        // Use the base path to include the view
        include BASE_PATH . '/views/form_view.php';
    }
}
?>