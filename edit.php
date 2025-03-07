<?php
session_start();
include 'db.php'; // Include the database connection

// Check if ID is set in the GET request
if (!isset($_GET['id'])) {
    header("Location: index.php"); // Redirect if no ID is provided
    exit();
}

$id = $_GET['id'];

// Fetch existing data from the database
$stmt = $conn->prepare("SELECT * FROM tbl_formation WHERE u_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "No record found.";
    exit();
}

$row = $result->fetch_assoc();
$stmt->close();

// Fetch additional data from other tables
$birthStmt = $conn->prepare("SELECT * FROM tbl_birth WHERE b_id = ?");
$birthStmt->bind_param("i", $id);
$birthStmt->execute();
$birthResult = $birthStmt->get_result();
$birthRecord = $birthResult->fetch_assoc();
$birthStmt->close();

$addressStmt = $conn->prepare("SELECT * FROM tbl_address WHERE h_id = ?");
$addressStmt->bind_param("i", $id);
$addressStmt->execute();
$addressResult = $addressStmt->get_result();
$addressRecord = $addressResult->fetch_assoc();
$addressStmt->close();

$contactStmt = $conn->prepare("SELECT * FROM tbl_contact WHERE c_id = ?");
$contactStmt->bind_param("i", $id);
$contactStmt->execute();
$contactResult = $contactStmt->get_result();
$contactRecord = $contactResult->fetch_assoc();
$contactStmt->close();

$parentsStmt = $conn->prepare("SELECT * FROM tbl_parents WHERE p_id = ?");
$parentsStmt->bind_param("i", $id);
$parentsStmt->execute();
$parentsResult = $parentsStmt->get_result();
$parentsRecord = $parentsResult->fetch_assoc();
$parentsStmt->close();

// List of countries for the dropdown
$countries = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas (the)", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia (Plurinational State of)", "Bonaire, Sint Eustatius and Saba", "Bosnia and Herzegovina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory (the)", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Cayman Islands (the)", "Central African Republic (the)", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands (the)", "Colombia", "Comoros (the)", "Congo (the Democratic Republic of the)", "Congo (the)", "Cook Islands (the)", "Costa Rica", "Croatia", "Cuba", "Curaçao", "Cyprus", "Czechia", "Côte d'Ivoire", "Denmark", "Djibouti", "Dominica", "Dominican Republic (the)", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Falkland Islands (the) [Malvinas]", "Faroe Islands (the)", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern Territories (the)", "Gabon", "Gambia (the)", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard Island and McDonald Islands", "Holy See (the)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea (the Democratic People's Republic of)", "Korea (the Republic of)", "Kuwait", "Kyrgyzstan", "Lao People's Democratic Republic (the)", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands (the)", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia (Federated States of)", "Moldova (the Republic of)", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands (the)", "New Caledonia", "New Zealand", "Nicaragua", "Niger (the)", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands (the)", "Norway", "Oman", "Pakistan", "Palau", "Palestine, State of", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines (the)", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Republic of North Macedonia", "Romania", "Russian Federation (the)", "Rwanda", "Réunion", "Saint Barthélemy", "Saint Helena, Ascension and Tristan da Cunha", "Saint Kitts and Nevis", "Saint Lucia", "Saint Martin (French part)", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Sint Maarten (Dutch part)", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "South Sudan", "Spain", "Sri Lanka", "Sudan (the)", "Suriname", "Svalbard and Jan Mayen", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Timor-Leste", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands (the)", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates (the)", "United Kingdom of Great Britain and Northern Ireland (the)", "United States Minor Outlying Islands (the)", "United States of America (the)", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela (Bolivarian Republic of)", "Viet Nam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia", "Zimbabwe", "Åland Islands"];

// Fetch the existing data for the record to be edited
$stmt = $conn->prepare("SELECT * FROM tbl_formation WHERE u_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$formationResult = $stmt->get_result();
$record = $formationResult->fetch_assoc();
$stmt->close();

// Fetch related data from other tables
$stmt = $conn->prepare("SELECT * FROM tbl_birth WHERE b_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$birthResult = $stmt->get_result();
$birthRecord = $birthResult->fetch_assoc();
$stmt->close();

$stmt = $conn->prepare("SELECT * FROM tbl_address WHERE h_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$addressResult = $stmt->get_result();
$addressRecord = $addressResult->fetch_assoc();
$stmt->close();

$stmt = $conn->prepare("SELECT * FROM tbl_contact WHERE c_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$contactResult = $stmt->get_result();
$contactRecord = $contactResult->fetch_assoc();
$stmt->close();

$stmt = $conn->prepare("SELECT * FROM tbl_parents WHERE p_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$parentsResult = $stmt->get_result();
$parentsRecord = $parentsResult->fetch_assoc();
$stmt->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect updated data
    $lastName = trim($_POST['last_name']);
    $firstName = trim($_POST['first_name']);
    $middleName = trim($_POST['middle_initial']);
    $dateOfBirth = $_POST['date_of_birth'];
    $sex = $_POST['sex'];
    $civilStatus = $_POST['civil_status'];
    $taxId = $_POST['tax_id'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];

    // Flag for error checking
    $hasError = false;

    // Update the record in the tbl_formation table
    $updateStmt = $conn->prepare("UPDATE tbl_formation SET u_lname = ?, u_fname = ?, u_middle = ?, u_dob = ?, u_sex = ?, u_status = ?, u_tax = ?, u_nationality = ?, u_religion = ? WHERE u_id = ?");
    $updateStmt->bind_param("sssssssssi", $lastName, $firstName, $middleName, $dateOfBirth, $sex, $civilStatus, $taxId, $nationality, $religion, $id);
    
    if (!$updateStmt->execute()) {
        error_log("Error updating tbl_formation: " . $updateStmt->error);
        $_SESSION['error'] = "Failed to update personal data.";
        $hasError = true;
    }
    $updateStmt->close();

    // Update the record in the tbl_birth table
    $birthUnit = $_POST['birth_unit'];
    $birthBlkNo = $_POST['birth_blk_no'];
    $birthStreetName = $_POST['birth_street_name'];
    $birthSubdivision = $_POST['birth_subdivision'];
    $birthBrgy = $_POST['birth_brgy'];
    $birthCity = $_POST['birth_city'];
    $birthProvince = $_POST['birth_province'];
    $birthCountry = $_POST['birthcountry'];
    $birthZipCode = $_POST['birth_zip_code'];

    $updateBirthStmt = $conn->prepare("UPDATE tbl_birth SET b_unit = ?, b_blk = ?, b_sn = ?, b_sub = ?, b_brgy = ?, b_city = ?, b_province = ?, b_country = ?, b_zip = ? WHERE b_id = ?");
    $updateBirthStmt->bind_param("issssssssi", $birthUnit, $birthBlkNo, $birthStreetName, $birthSubdivision, $birthBrgy, $birthCity, $birthProvince, $birthCountry, $birthZipCode, $id);
    
    if (!$updateBirthStmt->execute()) {
        error_log("Error updating tbl_birth: " . $updateBirthStmt->error);
        $_SESSION['error'] = "Failed to update birth data.";
        $hasError = true;
    }
    $updateBirthStmt->close();

    // Update the record in the tbl_address table
    $unit = $_POST['unit'];
    $blkNo = $_POST['blk_no'];
    $addressStreetName = $_POST['street_name'];
    $addressSubdivision = $_POST['subdivision'];
    $addressBrgy = $_POST['brgy'];
    $addressCity = $_POST['city'];
    $addressProvince = $_POST['province'];
    $addressCountry = $_POST['country'];
    $addressZipCode = $_POST['zip_code'];

    $updateAddressStmt = $conn->prepare("UPDATE tbl_address SET h_unit = ?, h_blk = ?, h_sn = ?, h_sub = ?, h_brgy = ?, h_city = ?, h_province = ?, h_country = ?, h_zip = ? WHERE h_id = ?");
    $updateAddressStmt->bind_param("issssssssi", $unit, $blkNo, $addressStreetName, $addressSubdivision, $addressBrgy, $addressCity, $addressProvince, $addressCountry, $addressZipCode, $id);
    
    if (!$updateAddressStmt->execute()) {
        error_log("Error updating tbl_address: " . $updateAddressStmt->error);
        $_SESSION['error'] = "Failed to update address data.";
        $hasError = true;
    }
    $updateAddressStmt->close();

    // Update the record in the tbl_contact table
    $mobile = $_POST['mobile_phone'];
    $telephone = $_POST['telephone_number'];
    $email = $_POST['email'];

    $updateContactStmt = $conn->prepare("UPDATE tbl_contact SET c_mobile = ?, c_tel = ?, c_email = ? WHERE c_id = ?");
    $updateContactStmt->bind_param("sssi", $mobile, $telephone, $email, $id);
    
    if (!$updateContactStmt->execute()) {
        error_log("Error updating tbl_contact: " . $updateContactStmt->error);
        $_SESSION['error'] = "Failed to update contact data.";
        $hasError = true;
    }
    $updateContactStmt->close();

    // Update the record in the tbl_parents table
    $fatherLastName = $_POST['father_last_name'];
    $fatherFirstName = $_POST['father_first_name'];
    $fatherMiddleName = $_POST['father_middle_name'];
    $motherLastName = $_POST['mother_last_name'];
    $motherFirstName = $_POST['mother_first_name'];
    $motherMiddleName = $_POST['mother_middle_name'];

    $updateParentsStmt = $conn->prepare("UPDATE tbl_parents SET f_lname = ?, f_fname = ?, f_middle = ?, m_lname = ?, m_fname = ?, m_middle = ? WHERE p_id = ?");
    $updateParentsStmt->bind_param("ssssssi", $fatherLastName, $fatherFirstName, $fatherMiddleName, $motherLastName, $motherFirstName, $motherMiddleName, $id);
    
    if (!$updateParentsStmt->execute()) {
        error_log("Error updating tbl_parents: " . $updateParentsStmt->error);
        $_SESSION['error'] = "Failed to update parents data.";
        $hasError = true;
    }
    $updateParentsStmt->close();

    // If all updates were successful, redirect to submit.php
    if (!$hasError) {
        header("Location: submit.php");
        exit(); // Ensure that the script terminates after the redirect
    } else {
        // Optionally, display the error message on the edit page if any update failed
        $_SESSION['error'] = "There were errors updating the data.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Entry</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="container">
<form action="" method="POST">
        <div class="form first">
            <div class="details personal">
                <h1>Edit Personal Data</h1>

                <div class="fields">
                    <div class="input-field">
                        <label>Last Name</label>
                        <input type="text" name="last_name" placeholder="Enter last Name" required value="<?= htmlspecialchars($record['u_lname']) ?>">
                    </div>
                    <div class="input-field">
                        <label>First Name</label>
                        <input type="text" name="first_name" placeholder="Enter First Name" required value="<?= htmlspecialchars($record['u_fname']) ?>">
                    </div>
                    <div class="input-field">
                        <label>Middle Initial</label>
                        <input type="text" name="middle_initial" placeholder="Enter Middle Initial" required value="<?= htmlspecialchars($record['u_middle']) ?>">
                    </div>
                    <div class="input-field">
                        <label for="date_of_birth">Date of Birth:</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" required value="<?= htmlspecialchars($record['u_dob']) ?>">
                    </div>
                </div>

                <div class="gender">
                <label for="Male">Sex:</label>  
                <input type="radio" id="Male" name="sex" value="Male" required <?= ($record['u_sex'] == 'Male') ? 'checked' : '' ?>>
                <label for="Male">Male</label>
                <input type="radio" id="Female" name="sex" value="Female" required <?= ($record['u_sex'] == 'Female') ? 'checked' : '' ?>>
                <label for="Female">Female</label>
                </div>
                
                <div class="Select">
                    <label for="civil_status">Civil Status:</label>
                    <select id="civil_status" name="civil_status">
                        <option value="">--Select--</option>
                        <option value="Single" <?= ($record['u_status'] == 'Single') ? 'selected' : '' ?>>Single</option>
                        <option value="Married" <?= ($record['u_status'] == 'Married') ? 'selected' : '' ?>>Married</option>
                        <option value="Widowed" <?= ($record['u_status'] == 'Widowed') ? 'selected' : '' ?>>Widowed</option>
                        <option value="Legally Separated" <?= ($record['u_status'] == 'Legally Separated') ? 'selected' : '' ?>>Legally Separated</option>
                        <option value="Others" <?= ($record['u_status'] == 'Others') ? 'selected' : '' ?>>Others</option>
                    </select>
                </div>

                <div class="type">
                    <div class="input-type">
                        <label>Tax Identification Number</label>
                        <input type="text" name="tax_id" id="tax_id" required value="<?= htmlspecialchars($record['u_tax']) ?>">
                    </div>
                    <div class="input-type">
                        <label>Nationality</label>
                        <input type="text" name="nationality" placeholder="Enter Nationality" required value="<?= htmlspecialchars($record['u_nationality']) ?>">
                    </div>
                    <div class="input-type">
                        <label>Religion</label>
                        <input type="text" name="religion" placeholder="Enter Religion" value="<?= htmlspecialchars($record['u_religion']) ?>">
                    </div>
                </div>

                <h2>Place of Birth</h2>
                <div class="place">
                    <div class="input-place">
                        <label for="birth_unit">Unit No. & Bldg. Name:</label>
                        <input type="text" name="birth_unit" id="birth_unit" value="<?= htmlspecialchars($birthRecord['b_unit']) ?>">
                    </div>
                    <div class="input-place">
                        <label for="birth_blk_no">House/Lot & Blk. No:</label>
                        <input type="text" name="birth_blk_no" id="birth_blk_no" value="<?= htmlspecialchars($birthRecord['b_blk']) ?>">
                    </div>
                    <div class="input-place">
                        <label for="birth_street_name">Street Name:</label>
                        <input type="text" name="birth_street_name" id="birth_street_name" value="<?= htmlspecialchars($birthRecord['b_sn']) ?>">
                    </div>
                    <div class="input-place">
                        <label for="birth_subdivision">Subdivision:</label>
                        <input type="text" name="birth_subdivision" id="birth_subdivision" value="<?= htmlspecialchars($birthRecord['b_sub']) ?>">
                    </div>
                </div>

                <div class="home">
                    <div class="input-home">
                        <label for="birth_brgy">Brgy/District/Locality:</label>
                        <input type="text" name="birth_brgy" id="birth_brgy" value="<?= htmlspecialchars($birthRecord['b_brgy']) ?>">
                    </div>
                    <div class="input-home">
                        <label for="birth_city">City:</label>
                        <input type="text" name="birth_city" id="birth_city" value="<?= htmlspecialchars($birthRecord['b_city']) ?>">
                    </div>
                    <div class="input-home">
                        <label for="birth_province">Province:</label>
                        <input type="text" name="birth_province" id="birth_province" value="<?= htmlspecialchars($birthRecord['b_province']) ?>">
                    </div>
                    <div class="input-home">
                        <label for="birth_zip_code">Zipcode:</label>
                        <input type="text" name="birth_zip_code" id="birth_zip_code" value="<?= htmlspecialchars($birthRecord['b_zip']) ?>">
                    </div>
                </div>

                <div class="country">
                    <label>Country</label>
                    <select name="birthcountry" id="country" required>
                        <option value="" disabled selected>select</option>
                        <?php
                        foreach ($countries as $country) {
                            echo "<option value=\"$country\" " . ($birthRecord['b_country'] == $country ? 'selected' : '') . ">$country</option>";
                        }
                        ?>
                    </select>
                </div>

                <h2>Home Address</h2>
                <div class="place">
                    <div class="input-place">
                        <label>RM/FLR/Unit No. & Bldg.Name</label>
                        <input type="text" name="unit" placeholder="Enter Unit" required value="<?= htmlspecialchars($addressRecord['h_unit']) ?>">
                    </div>
                    <div class="input-place">
                        <label>House/Lot & Blk.No</label>
                        <input type="text" name="blk_no" placeholder="Enter Blk.No" required value="<?= htmlspecialchars($addressRecord['h_blk']) ?>">
                    </div>
                    <div class="input-place">
                        <label>Street Name</label>
                        <input type="text" name="street_name" placeholder="Street Name" required value="<?= htmlspecialchars($addressRecord['h_sn']) ?>">
                    </div>
                    <div class="input-place">
                        <label>Subdivision</label>
                        <input type="text" name="subdivision" placeholder="Subdivision" required value="<?= htmlspecialchars($addressRecord['h_sub']) ?>">
                    </div>
                </div>

                <div class="home">
                    <div class="input-home">
                        <label>Brgy/District/Locality</label>
                        <input type="text" name="brgy" placeholder="Enter Brgy" required value="<?= htmlspecialchars($addressRecord['h_brgy']) ?>">
                    </div>
                    <div class="input-home">
                        <label>City/Municipality</label>
                        <input type="text" name="city" placeholder="Enter City" required value="<?= htmlspecialchars($addressRecord['h_city']) ?>">
                    </div>
                    <div class="input-home">
                        <label>Province</label>
                        <input type="text" name="province" placeholder="Province" required value="<?= htmlspecialchars($addressRecord['h_province']) ?>">
                    </div>
                    <div class="input-home">
                        <label for="zip_code">Zipcode:</label>
                        <input type="text" name="zip_code" id="zip_code" value="<?= htmlspecialchars($addressRecord['h_zip']) ?>">
                    </div>
                </div>

                <div class="country">
                    <label>Country</label>
                    <select name="country" id="country" required>
                        <option value="" disabled selected>select</option>
                        <?php
                        foreach ($countries as $country) {
                            echo "<option value=\"$country\" " . ($addressRecord['h_country'] == $country ? 'selected' : '') . ">$country</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="number">
                    <div class="input-number">
                        <label>Mobile/Cellphone Number</label>
                        <input type="text" name="mobile_phone" id="mobile_phone" required value="<?= htmlspecialchars($contactRecord['c_mobile']) ?>">
                    </div>
                    <div class="input-number">
                        <label>E-mail Address</label>
                        <input type="email" name="email" placeholder="Enter E-mail" required value="<?= htmlspecialchars($contactRecord['c_email']) ?>">
                    </div>
                    <div class="input-number">
                        <label>Telephone Number</label>
                        <input type="text" name="telephone_number" id="telephone_number" required value="<?= htmlspecialchars($contactRecord['c_tel']) ?>">
                    </div>
                </div>

                <h3>Father's Name</h3>
                <div class="type">
                    <div class="input-type">
                        <label>Last Name</label>
                        <input type="text" name="father_last_name" placeholder="Enter Last Name" value="<?= htmlspecialchars($parentsRecord['f_lname']) ?>">
                    </div>
                    <div class="input-type">
                        <label>First Name</label>
                        <input type="text" name="father_first_name" placeholder="Enter First Name" value="<?= htmlspecialchars($parentsRecord['f_fname']) ?>">
                    </div>
                    <div class="input-type">
                        <label>Middle Name</label>
                        <input type="text" name="father_middle_name" placeholder="Enter Middle Name" value="<?= htmlspecialchars($parentsRecord['f_middle']) ?>">
                    </div>
                </div>

                <h3>Mother's Name</h3>
                <div class="type">
                    <div class="input-type">
                        <label>Last Name</label>
                        <input type="text" name="mother_last_name" placeholder="Enter Last Name" value="<?= htmlspecialchars($parentsRecord['m_lname']) ?>">
                    </div>
                    <div class="input-type">
                        <label>First Name</label>
                        <input type="text" name="mother_first_name" placeholder="Enter First Name" value="<?= htmlspecialchars($parentsRecord['m_fname']) ?>">
                    </div>
                    <div class="input-type">
                        <label>Middle Name</label>
                        <input type="text" name="mother_middle_name" placeholder="Enter Middle Name" value="<?= htmlspecialchars($parentsRecord['m_middle']) ?>">
                    </div>
                </div>

                <div class="buttons">
                    <button type="submit" class="subBtn">
                        <div class="btnText">Update</div>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

</body>
</html>