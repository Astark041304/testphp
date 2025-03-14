<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Form</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <h2>Test_<span>Form</span></h2>
        </header>

        <div class="container">
            <form action="" method="POST">
                <div class="form first">
                    <div class="details personal">
                        <h1>Personal Data</h1>
                        <div class="fields">
                            <div class="input-field">
                                <label>Last Name</label>
                                <input type="text" name="last_name" placeholder="Enter last Name" required value="<?php echo htmlspecialchars($this->model->getData()['last_name'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['last_name'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['last_name']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-field">
                                <label>First Name</label>
                                <input type="text" name="first_name" placeholder="Enter First Name" required value="<?php echo htmlspecialchars($this->model->getData()['first_name'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['first_name'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['first_name']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-field">
                                <label>Middle Initial</label>
                                <input type="text" name="middle_initial" placeholder="Enter Middle Initial" required value="<?php echo htmlspecialchars($this->model->getData()['middle_initial'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['middle_initial'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['middle_initial']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-field">
                                <label for="date_of_birth">Date of Birth:</label>
                                <input type="date" id="date_of_birth" name="date_of_birth" required value="<?php echo htmlspecialchars($this->model->getData()['date_of_birth'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['date_of_birth'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['date_of_birth']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="gender">
                            <label for="Male">Sex:</label>  
                            <label for="Male">Male</label>
                            <input type="radio" id="Male" name="sex" value="Male" required <?php echo (isset($this->model->getData()['sex']) && $this->model->getData()['sex'] == 'Male') ? 'checked' : ''; ?>>
                            <label for="Female">Female</label>
                            <input type="radio" id="Female" name="sex" value="Female" required <?php echo (isset($this->model->getData()['sex']) && $this->model->getData()['sex'] == 'Female') ? 'checked' : ''; ?>>
                            <?php if (isset($this->model->getErrors()['sex'])): ?>
                                <div class="error"><?php echo $this->model->getErrors()['sex']; ?></div>
                            <?php endif; ?>
                        </div>
                    
                        <div class="Select">
                            <label for="civil_status">Civil Status:</label>
                            <select id="civil_status" name="civil_status" onchange="toggleOthersField()">
                                <?php echo $civilStatusOptions; ?>
                            </select>
                            <input type="text" id="others_input" name="others" placeholder="Please specify" style="display: none;" value="<?php echo htmlspecialchars($this->model->getData()['others'] ?? ''); ?>">
                            <?php if (isset($this->model->getErrors()['others'])): ?>
                                <div class="error"><?php echo $this->model->getErrors()['others']; ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="type">
                            <div class="input-type">
                                <label>Tax Identification Number</label>
                                <input type="text" name="tax_id" id="tax_id" required value="<?php echo htmlspecialchars($this->model->getData()['tax_id'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['tax_id'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['tax_id']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-type">
                                <label>Nationality</label>
                                <input type="text" name="nationality" placeholder="Enter Nationality" required value="<?php echo htmlspecialchars($this->model->getData()['nationality'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['nationality'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['nationality']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-type">
                                <label>Religion</label>
                                <input type="text" name="religion" placeholder="Enter Religion" value="<?php echo htmlspecialchars($this->model->getData()['religion'] ?? ''); ?>">
                            </div>
                        </div>

                        <h2>Place of Birth</h2>
                        <div class="place">
                            <div class="input-place">
                                <label for="birth_unit">Unit No. & Bldg. Name:</label>
                                <input type="text" name="birth_unit" id="birth_unit" value="<?php echo htmlspecialchars($this->model->getData()['birth_unit'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['birth_unit'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['birth_unit']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-place">
                                <label for="birth_blk_no">House/Lot & Blk. No:</label>
                                <input type="text" name="birth_blk_no" id="birth_blk_no" value="<?php echo htmlspecialchars($this->model->getData()['birth_blk_no'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['birth_blk_no'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['birth_blk_no']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-place">
                                <label for="birth_street_name">Street Name:</label>
                                <input type="text" name="birth_street_name" id="birth_street_name" value="<?php echo htmlspecialchars($this->model->getData()['birth_street_name'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['birth_street_name'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['birth_street_name']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-place">
                                <label for="birth_subdivision">Subdivision:</label>
                                <input type="text" name="birth_subdivision" id="birth_subdivision" value="<?php echo htmlspecialchars($this->model->getData()['birth_subdivision'] ?? ''); ?>">
                            </div>
                        </div>

                        <div class="home">
                            <div class="input-home">
                                <label for="birth_brgy">Brgy/District/Locality:</label>
                                <input type="text" name="birth_brgy" id="birth_brgy" value="<?php echo htmlspecialchars($this->model->getData()['birth_brgy'] ?? ''); ?>">
                            </div>
                            <div class="input-home">
                                <label for="birth_city">City:</label>
                                <input type="text" name="birth_city" id="birth_city" value="<?php echo htmlspecialchars($this->model->getData()['birth_city'] ?? ''); ?>">
                            </div>
                            <div class="input-home">
                                <label for="birth_province">Province:</label>
                                <input type="text" name="birth_province" id="birth_province" value="<?php echo htmlspecialchars($this->model->getData()['birth_province'] ?? ''); ?>">
                            </div>
                            <div class="input-home">
                                <label for="birth_zip_code">Zipcode:</label>
                                <input type="text" name="birth_zip_code" id="birth_zip_code" value="<?php echo htmlspecialchars($this->model->getData()['birth_zip_code'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['birth_zip_code'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['birth_zip_code']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="country">
                            <label>Country</label>
                            <select name="birthcountry" id="country" required>
                                <option value="" disabled selected>select</option>
                                <?php
                                $countries = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas (the)", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia (Plurinational State of)", "Bonaire, Sint Eustatius and Saba", "Bosnia and Herzegovina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory (the)", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Cayman Islands (the)", "Central African Republic (the)", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands (the)", "Colombia", "Comoros (the)", "Congo (the Democratic Republic of the)", "Congo (the)", "Cook Islands (the)", "Costa Rica", "Croatia", "Cuba", "Curaçao", "Cyprus", "Czechia", "Côte d'Ivoire", "Denmark", "Djibouti", "Dominica", "Dominican Republic (the)", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Falkland Islands (the) [Malvinas]", "Faroe Islands (the)", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern Territories (the)", "Gabon", "Gambia (the)", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard Island and McDonald Islands", "Holy See (the)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea (the Democratic People's Republic of)", "Korea (the Republic of)", "Kuwait", "Kyrgyzstan", "Lao People's Democratic Republic (the)", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands (the)", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia (Federated States of)", "Moldova (the Republic of)", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands (the)", "New Caledonia", "New Zealand", "Nicaragua", "Niger (the)", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands (the)", "Norway", "Oman", "Pakistan", "Palau", "Palestine, State of", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines (the)", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Republic of North Macedonia", "Romania", "Russian Federation (the)", "Rwanda", "Réunion", "Saint Barthélemy", "Saint Helena, Ascension and Tristan da Cunha", "Saint Kitts and Nevis", "Saint Lucia", "Saint Martin (French part)", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Sint Maarten (Dutch part)", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "South Sudan", "Spain", "Sri Lanka", "Sudan (the)", "Suriname", "Svalbard and Jan Mayen", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Timor-Leste", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands (the)", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates (the)", "United Kingdom of Great Britain and Northern Ireland (the)", "United States Minor Outlying Islands (the)", "United States of America (the)", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela (Bolivarian Republic of)", "Viet Nam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia", "Zimbabwe", "Åland Islands"];
                                foreach ($countries as $country) {
                                    $selected = (isset($this->model->getData()['birthcountry']) && $this->model->getData()['birthcountry'] === $country) ? 'selected' : '';
                                    echo "<option value=\"$country\" $selected>$country</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <h2>Home Address</h2>
                        <div class="place">
                            <div class="input-place">
                                <label>RM/FLR/Unit No. & Bldg.Name</label>
                                <input type="text" name="unit" placeholder="Enter Unit" required value="<?php echo htmlspecialchars($this->model->getData()['unit'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['unit'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['unit']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-place">
                                <label>House/Lot & Blk.No</label>
                                <input type="text" name="blk_no" placeholder="Enter Blk.No" required value="<?php echo htmlspecialchars($this->model->getData()['blk_no'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['blk_no'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['blk_no']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-place">
                                <label>Street Name</label>
                                <input type="text" name="street_name" placeholder="Street Name" required value="<?php echo htmlspecialchars($this->model->getData()['street_name'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['street_name'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['street_name']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-place">
                                <label>Subdivision</label>
                                <input type="text" name="subdivision" placeholder="Subdivision" required value="<?php echo htmlspecialchars($this->model->getData()['subdivision'] ?? ''); ?>">
                            </div>
                        </div>

                        <div class="home">
                            <div class="input-home">
                                <label>Brgy/District/Locality</label>
                                <input type="text" name="brgy" placeholder="Enter Brgy" required value="<?php echo htmlspecialchars($this->model->getData()['brgy'] ?? ''); ?>">
                            </div>
                            <div class="input-home">
                                <label>City/Municipality</label>
                                <input type="text" name="city" placeholder="Enter City" required value="<?php echo htmlspecialchars($this->model->getData()['city'] ?? ''); ?>">
                            </div>
                            <div class="input-home">
                                <label>Province</label>
                                <input type="text" name="province" placeholder="Province" required value="<?php echo htmlspecialchars($this->model->getData()['province'] ?? ''); ?>">
                            </div>
                            <div class="input-home">
                                <label for="zip_code">Zipcode:</label>
                                <input type="text" name="zip_code" id="zip_code" value="<?php echo htmlspecialchars($this->model->getData()['zip_code'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['zip_code'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['zip_code']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="country">
                            <label>Country</label>
                            <select name="country" id="country" required>
                                <option value="" disabled selected>select</option>
                                <?php
                                foreach ($countries as $country) {
                                    $selected = (isset($this->model->getData()['country']) && $this->model->getData()['country'] === $country) ? 'selected' : '';
                                    echo "<option value=\"$country\" $selected>$country</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="number">
                            <div class="input-number">
                                <label>Mobile/Cellphone Number</label>
                                <input type="text" name="mobile_phone" id="mobile_phone" required value="<?php echo htmlspecialchars($this->model->getData()['mobile_phone'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['mobile_phone'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['mobile_phone']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-number">
                                <label>E-mail Address</label>
                                <input type="email" name="email" placeholder="Enter E-mail" required value="<?php echo htmlspecialchars($this->model->getData()['email'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['email'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['email']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-number">
                                <label>Telephone Number</label>
                                <input type="text" name="telephone_number" id="telephone_number" required value="<?php echo htmlspecialchars($this->model->getData()['telephone_number'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['telephone_number'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['telephone_number']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <h2>Father's Name</h2>
                        <div class="type">
                            <div class="input-type">
                                <label>Last Name</label>
                                <input type="text" name="father_last_name" placeholder="Enter Last Name" value="<?php echo htmlspecialchars($this->model->getData()['father_last_name'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['father_last_name'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['father_last_name']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-type">
                                <label>First Name</label>
                                <input type="text" name="father_first_name" placeholder="Enter First Name" value="<?php echo htmlspecialchars($this->model->getData()['father_first_name'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['father_first_name'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['father_first_name']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-type">
                                <label>Middle Name</label>
                                <input type="text" name="father_middle_name" placeholder="Enter Middle Name" value="<?php echo htmlspecialchars($this->model->getData()['father_middle_name'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['father_middle_initial'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['father_middle_initial']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <h2>Mother's Name</h2>
                        <div class="type">
                            <div class="input-type">
                                <label>Last Name</label>
                                <input type="text" name="mother_last_name" placeholder="Enter Last Name" value="<?php echo htmlspecialchars($this->model->getData()['mother_last_name'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['mother_last_name'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['mother_last_name']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-type">
                                <label>First Name</label>
                                <input type="text" name="mother_first_name" placeholder="Enter First Name" value="<?php echo htmlspecialchars($this->model->getData()['mother_first_name'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['mother_first_name'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['mother_first_name']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-type">
                                <label>Middle Name</label>
                                <input type="text" name="mother_middle_name" placeholder="Enter Middle Name" value="<?php echo htmlspecialchars($this->model->getData()['mother_middle_name'] ?? ''); ?>">
                                <?php if (isset($this->model->getErrors()['mother_middle_initial'])): ?>
                                    <div class="error"><?php echo $this->model->getErrors()['mother_middle_initial']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="buttons">
                            <div class="buttons">
                                <button type="submit" class="subBtn">
                                    <div class="btnText">Submit</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function toggleOthersField() {
            var status = document.getElementById("civil_status").value;
            var othersField = document.getElementById("others_input");
            if (status === "Others") {
                othersField.style.display = "block";
            } else {
                othersField.style.display = "none";
            }
        }
    </script>
</body>
</html>