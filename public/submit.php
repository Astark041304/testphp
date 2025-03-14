<?php
// public/index.php
session_start();

// Include the database connection
require '../config/db.php';

// Include the necessary controller
require '../controller/SubmitController.php';

// Create an instance of the controller
$controller = new SubmitController($conn);

// Handle the request and get the data
$data = $controller->handleFormSubmission();

// Render the view with the fetched data
require '../views/submit_view.php';

// Close the database connection
$controller->close();
?>