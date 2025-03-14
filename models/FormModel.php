<?php
class FormModel {
    private $data = [];
    private $errors = [];

    public function setData($data) {
        $this->data = $data;
    }

    public function validate() {
        $this->validatePersonalInfo();
        $this->validateBirthInfo();
        $this->validateAddressInfo();
        $this->validateContactInfo();
        return empty($this->errors);
    }

    private function validatePersonalInfo() {
        $this->validateName('last_name', 'Last Name');
        $this->validateName('first_name', 'First Name');
        $this->validateName('middle_initial', 'Middle Initial');
        $this->validateName('father_last_name', 'Father Last Name');
        $this->validateName('father_first_name', 'Father First Name');
        $this->validateName('father_middle_name', 'Father Middle Name');
        $this->validateName('mother_last_name', 'Mother Last Name');
        $this->validateName('mother_first_name', 'Mother First Name');
        $this->validateName('mother_middle_name', 'Mother Middle Name');

        if (empty($this->data['date_of_birth'])) {
            $this->errors['date_of_birth'] = "Invalid Date of Birth.";
        } elseif ($this->calculateAge($this->data['date_of_birth']) < 18) {
            $this->errors['date_of_birth'] = "You must be at least 18 years old.";
        }

        if (empty($this->data['sex'])) {
            $this->errors['sex'] = "Select a Gender.";
        }

        if (empty($this->data['civil_status'])) {
            $this->errors['civil_status'] = "Select a Civil Status.";
        } elseif ($this->data['civil_status'] === 'Others' && empty($this->data['others'])) {
            $this->errors['others'] = "Please Specify Your Civil Status.";
        }

        if (empty($this->data['tax_id']) || !preg_match('/^[0-9]+$/', $this->data['tax_id'])) {
            $this->errors['tax_id'] = "Tax ID must contain numbers only.";
        }

        if (empty($this->data['nationality'])) {
            $this->errors['nationality'] = "Field is required.";
        }

        if (empty($this->data['religion'])) {
            $this->data['religion'] = "N/A"; // Default value
        }
    }

    private function validateBirthInfo() {
        if (empty($this->data['birth_unit'])) {
            $this->errors['birth_unit'] = "Field is required.";
        }

        if (empty($this->data['birth_blk_no'])) {
            $this->errors['birth_blk_no'] = "Field is required.";
        }

        if (empty($this->data['birth_street_name'])) {
            $this->errors['birth_street_name'] = "Field is required.";
        }

        if (empty($this->data['birth_subdivision'])) {
            $this->data['birth_subdivision'] = "N/A"; // Default value
        }

        if (empty($this->data['birth_brgy'])) {
            $this->data['birth_brgy'] = "N/A"; // Default value
        }

        if (empty($this->data['birth_city'])) {
            $this->data['birth_city'] = "N/A"; // Default value
        }

        if (empty($this->data['birth_province'])) {
            $this->data['birth_province'] = "N/A"; // Default value
        }

        if (empty($this->data['birth_zip_code']) || !preg_match('/^[0-9]+$/', $this->data['birth_zip_code'])) {
            $this->errors['birth_zip_code'] = "Birth Zip Code must contain numbers only.";
        }

        if (empty($this->data['birthcountry'])) {
            $this->data['birthcountry'] = "N/A"; // Default value
        }
    }

    private function validateAddressInfo() {
        if (empty($this->data['unit'])) {
            $this->errors['unit'] = "Field is required.";
        }

        if (empty($this->data['blk_no'])) {
            $this->errors['blk_no'] = "Field is required.";
        }

        if (empty($this->data['street_name'])) {
            $this->errors['street_name'] = "Field is required.";
        }

        if (empty($this->data['subdivision'])) {
            $this->data['subdivision'] = "N/A"; // Default value
        }

        if (empty($this->data['brgy'])) {
            $this->data['brgy'] = "N/A"; // Default value
        }

        if (empty($this->data['city'])) {
            $this->data['city'] = "N/A"; // Default value
        }

        if (empty($this->data['province'])) {
            $this->data['province'] = "N/A"; // Default value
        }

        if (empty($this->data['zip_code']) || !preg_match('/^[0-9]+$/', $this->data['zip_code'])) {
            $this->errors['zip_code'] = "Invalid Zip Code. Must contain numbers only.";
        }

        if (empty($this->data['country'])) {
            $this->data['country'] = "N/A"; // Default value
        }
    }

    private function validateContactInfo() {
        if (empty($this->data['mobile_phone'])) {
            $this->errors['mobile_phone'] = "Field is required.";
        } elseif (!preg_match('/^[0-9]+$/', $this->data['mobile_phone'])) {
            $this->errors['mobile_phone'] = "Mobile must contain numbers only.";
        }

        if (empty($this->data['email']) || !filter_var($this->data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Invalid email format.";
        }

        if (empty($this->data['telephone_number']) || !preg_match('/^[0-9]+$/', $this->data['telephone_number'])) {
            $this->errors['telephone_number'] = "Telephone must contain numbers only.";
        }
    }

    private function validateName($field, $fieldName) {
        if (empty($this->data[$field]) || preg_match('/[0-9]/', $this->data[$field])) {
            $this->errors[$field] = "$fieldName must not contain numbers.";
        }
    }

    private function calculateAge($dob) {
        $dobDate = new DateTime($dob);
        $today = new DateTime();
        return $today->diff($dobDate)->y;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function getData() {
        return $this->data;
    }
}
?>