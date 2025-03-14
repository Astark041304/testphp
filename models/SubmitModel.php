<?php
class SubmitModel {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }

    public function insertFormation($formData) {
        $stmt = $this->conn->prepare("INSERT INTO tbl_formation(u_lname, u_fname, u_middle, u_dob, u_sex, u_status, u_tax, u_nationality, u_religion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            error_log("Prepare failed: " . $this->conn->error);
            return false;
        }
        $stmt->bind_param("sssssssss", $formData['last_name'], $formData['first_name'], $formData['middle_initial'], $formData['date_of_birth'], $formData['sex'], $formData['civil_status'], $formData['tax_id'], $formData['nationality'], $formData['religion']);
        if (!$stmt->execute()) {
            error_log("Execute failed: " . $stmt->error);
            return false;
        }
        return $stmt->insert_id;
    }

    public function insertBirth($formData) {
        $stmt = $this->conn->prepare("INSERT INTO tbl_birth(b_unit, b_blk, b_sn, b_sub, b_brgy, b_city, b_province, b_country, b_zip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            error_log("Prepare failed: " . $this->conn->error);
            return false;
        }
        $stmt->bind_param("sssssssss", $formData['birth_unit'], $formData['birth_blk_no'], $formData['birth_street_name'], $formData['birth_subdivision'], $formData['birth_brgy'], $formData['birth_city'], $formData['birth_province'], $formData['birthcountry'], $formData['birth_zip_code']);
        if (!$stmt->execute()) {
            error_log("Execute failed: " . $stmt->error);
            return false;
        }
        return $stmt->insert_id;
    }

    public function insertAddress($formData) {
        $stmt = $this->conn->prepare("INSERT INTO tbl_address(h_unit, h_blk, h_sn, h_sub, h_brgy, h_city, h_province, h_country, h_zip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            error_log("Prepare failed: " . $this->conn->error);
            return false;
        }
        $stmt->bind_param("sssssssss", $formData['unit'], $formData['blk_no'], $formData['street_name'], $formData['subdivision'], $formData['brgy'], $formData['city'], $formData['province'], $formData['country'], $formData['zip_code']);
        if (!$stmt->execute()) {
            error_log("Execute failed: " . $stmt->error);
            return false;
        }
        return $stmt->insert_id;
    }

    public function insertContact($formData) {
        $stmt = $this->conn->prepare("INSERT INTO tbl_contact(c_mobile, c_email, c_tel) VALUES (?, ?, ?)");
        if (!$stmt) {
            error_log("Prepare failed: " . $this->conn->error);
            return false;
        }
        $stmt->bind_param("sss", $formData['mobile_phone'], $formData['email'], $formData['telephone_number']);
        if (!$stmt->execute()) {
            error_log("Execute failed: " . $stmt->error);
            return false;
        }
        return $stmt->insert_id;
    }

    public function insertParents($formData) {
        $stmt = $this->conn->prepare("INSERT INTO tbl_parents(f_lname, f_fname, f_middle, m_lname, m_fname, m_middle) VALUES (?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            error_log("Prepare failed: " . $this->conn->error);
            return false;
        }
        $stmt->bind_param("ssssss", $formData['father_last_name'], $formData['father_first_name'], $formData['father_middle_name'], $formData['mother_last_name'], $formData['mother_first_name'], $formData['mother_middle_name']);
        if (!$stmt->execute()) {
            error_log("Execute failed: " . $stmt->error);
            return false;
        }
        return $stmt->insert_id;
    }

    public function fetchAll($table) {
        $result = $this->conn->query("SELECT * FROM $table");
        if (!$result) {
            error_log("Query error: " . $this->conn->error);
        }
        return $result;
    }

    public function close() {
        $this->conn->close();
    }
}
?>