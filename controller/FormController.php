<?php
include '../config/db.php'; // Include the database connection
include '../models/FormModel.php';

class FormController {
    private $model;

    public function __construct() {
        $this->model = new FormModel();
    }

    public function handleRequest() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect form data
            $formData = [
                'last_name' => trim($_POST['last_name'] ?? ''),
                'first_name' => trim($_POST['first_name'] ?? ''),
                'middle_initial' => trim($_POST['middle_initial'] ?? ''),
                'date_of_birth' => $_POST['date_of_birth'] ?? '',
                'sex' => $_POST['sex'] ?? '',
                'civil_status' => $_POST['civil_status'] ?? '',
                'others' => trim($_POST['others'] ?? ''),
                'tax_id' => trim($_POST['tax_id'] ?? ''),
                'nationality' => trim($_POST['nationality'] ?? ''),
                'religion' => trim($_POST['religion'] ?? ''),
                'birth_unit' => trim($_POST['birth_unit'] ?? ''),
                'birth_blk_no' => trim($_POST['birth_blk_no'] ?? ''),
                'birth_street_name' => trim($_POST['birth_street_name'] ?? ''),
                'birth_subdivision' => trim($_POST['birth_subdivision'] ?? ''),
                'birth_brgy' => trim($_POST['birth_brgy'] ?? ''),
                'birth_city' => trim($_POST['birth_city'] ?? ''),
                'birth_province' => trim($_POST['birth_province'] ?? ''),
                'birthcountry' => $_POST['birthcountry'] ?? '',
                'birth_zip_code' => trim($_POST['birth_zip_code'] ?? ''),
                'unit' => trim($_POST['unit'] ?? ''),
                'blk_no' => trim($_POST['blk_no'] ?? ''),
                'street_name' => trim($_POST['street_name'] ?? ''),
                'subdivision' => trim($_POST['subdivision'] ?? ''),
                'brgy' => trim($_POST['brgy'] ?? ''),
                'city' => trim($_POST['city'] ?? ''),
                'province' => trim($_POST['province'] ?? ''),
                'country' => $_POST['country'] ?? '',
                'zip_code' => trim($_POST['zip_code'] ?? ''),
                'mobile_phone' => trim($_POST['mobile_phone'] ?? ''),
                'telephone_number' => trim($_POST['telephone_number'] ?? ''),
                'email' => trim($_POST['email'] ?? ''),
                'father_last_name' => trim($_POST['father_last_name'] ?? ''),
                'father_first_name' => trim($_POST['father_first_name'] ?? ''),
                'father_middle_name' => trim($_POST['father_middle_name'] ?? ''),
                'mother_last_name' => trim($_POST['mother_last_name'] ?? ''),
                'mother_first_name' => trim($_POST['mother_first_name'] ?? ''),
                'mother_middle_name' => trim($_POST['mother_middle_name'] ?? ''),
            ];

            // Set data in the model
            $this->model->setData($formData);

            // Validate the data
            if ($this->model->validate()) {
                // If validation passes, store data in session
                $_SESSION['form_data'] = $this->model->getData();
                header("Location: submit.php"); // Redirect to the submit page
                exit();
            } else {
                // Handle validation errors
                $errors = $this->model->getErrors();
                // Log errors for debugging
                error_log(print_r($errors, true));
            }
        }

        // Render the form view
        $this->renderForm();
    }

    private function renderForm() {
        // Generate options for civil status and countries
        $civilStatusOptions = $this->generateOptions([
            "Single", "Married", "Widowed", "Legally Separated", "Others"
        ], $this->model->getData()['civil_status'] ?? '');

        $countries = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas (the)", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia (Plurinational State of)", "Bonaire, Sint Eustatius and Saba", "Bosnia and Herzegovina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory (the)", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Cayman Islands (the)", "Central African Republic (the)", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands (the)", "Colombia", "Comoros (the)", "Congo (the Democratic Republic of the)", "Congo (the)", "Cook Islands (the)", "Costa Rica", "Croatia", "Cuba", "Curaçao", "Cyprus", "Czechia", "Côte d'Ivoire", "Denmark", "Djibouti", "Dominica", "Dominican Republic (the)", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Falkland Islands (the) [Malvinas]", "Faroe Islands (the)", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern Territories (the)", "Gabon", "Gambia (the)", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard Island and McDonald Islands", "Holy See (the)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea (the Democratic People's Republic of)", "Korea (the Republic of)", "Kuwait", "Kyrgyzstan", "Lao People's Democratic Republic (the)", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands (the)", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia (Federated States of)", "Moldova (the Republic of)", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands (the)", "New Caledonia", "New Zealand", "Nicaragua", "Niger (the)", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands (the)", "Norway", "Oman", "Pakistan", "Palau", "Palestine, State of", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines (the)", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Republic of North Macedonia", "Romania", "Russian Federation (the)", "Rwanda", "Réunion", "Saint Barthélemy", "Saint Helena, Ascension and Tristan da Cunha", "Saint Kitts and Nevis", "Saint Lucia", "Saint Martin (French part)", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Sint Maarten (Dutch part)", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "South Sudan", "Spain", "Sri Lanka", "Sudan (the)", "Suriname", "Svalbard and Jan Mayen", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Timor-Leste", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands (the)", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates (the)", "United Kingdom of Great Britain and Northern Ireland (the)", "United States Minor Outlying Islands (the)", "United States of America (the)", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela (Bolivarian Republic of)", "Viet Nam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia", "Zimbabwe", "Åland Islands"];
        $countryOptions = $this->generateOptions($countries, $this->model->getData()['country'] ?? '');

        include '../views/form_view.php';
    }

    private function generateOptions($optionsArray, $selectedValue = '') {
        $options = "<option value='' disabled selected>Select an option</option>";
        foreach ($optionsArray as $option) {
            $isSelected = ($option === $selectedValue) ? 'selected' : '';
            $options .= "<option value='$option' $isSelected>$option</option>";
        }
        return $options;
    }
}
?>