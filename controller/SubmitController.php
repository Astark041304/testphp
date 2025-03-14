<?php

include '../config/db.php'; // Include the database connection
include '../models/SubmitModel.php';

class SubmitController {
    private $model;

    public function __construct($dbConnection) {
        $this->model = new SubmitModel($dbConnection);
    }

    // Public method to handle form submission and data processing
    public function handleFormSubmission() {
        if (!isset($_SESSION['form_data'])) {
            return null; // Return null if no form data is set
        }

        $formData = $_SESSION['form_data'];
        unset($_SESSION['form_data']);

        // Validate required fields
        if (empty($formData['last_name']) || empty($formData['first_name'])) {
            return ['error' => 'Last name and first name are required.'];
        }

        // Insert data into the database
        try {
            $uId = $this->model->insertFormation($formData);
            if (!$uId) {
                return ['error' => 'Failed to insert formation data.'];
            }
            $bId = $this->model->insertBirth($formData);
            $hId = $this->model->insertAddress($formData);
            $cId = $this->model->insertContact($formData);
            $pId = $this->model->insertParents($formData);
        } catch (mysqli_sql_exception $e) {
            // Log the error message
            error_log("Database error: " . $e->getMessage());
            return ['error' => 'An error occurred while saving data.'];
        }

        // Fetch all necessary data for the view
        $formationResult = $this->model->fetchAll('tbl_formation');
        $birthResult = $this->model->fetchAll('tbl_birth');
        $addressResult = $this->model->fetchAll('tbl_address');
        $contactResult = $this->model->fetchAll('tbl_contact');
        $parentsResult = $this->model->fetchAll('tbl_parents');

        // Log the results to check if data is fetched
        error_log("Formation Result Rows: " . $formationResult->num_rows);
        error_log("Birth Result Rows: " . $birthResult->num_rows);
        error_log("Address Result Rows: " . $addressResult->num_rows);
        error_log("Contact Result Rows: " . $contactResult->num_rows);
        error_log("Parents Result Rows: " . $parentsResult->num_rows);

        // Return the data as an associative array
        return [
            'formationResult' => $formationResult,
            'birthResult' => $birthResult,
            'addressResult' => $addressResult,
            'contactResult' => $contactResult,
            'parentsResult' => $parentsResult,
        ];
    }

    public function close() {
        $this->model->close();
    }
}
?>