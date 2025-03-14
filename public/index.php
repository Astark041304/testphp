<?php
// Start the session
session_start();

// Include the necessary files
require '../controller/FormController.php';

// Create an instance of the FormController
$controller = new FormController();

// Handle the request
$controller->handleRequest();
?>