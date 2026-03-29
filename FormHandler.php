<?php
class FormHandler {
    public $firstName;
    public $lastName;
    public $phone;
    public $address;

    // Constructor
    public function __construct($postData) {
        $this->firstName = $postData['firstname'];
        $this->lastName = $postData['lastname'];
        $this->phone = $postData['phone'];
        $this->address = $postData['address'];
    }

    // Method untuk tampilkan hasil
    public function displayData() {
        echo "<div class='result-box'>";
        echo "<p><strong>Hi, my name is</strong> "
            . htmlspecialchars($this->firstName) . " "
            . htmlspecialchars($this->lastName) . "</p>";

        echo "<p><strong>Phone Number:</strong> "
            . htmlspecialchars($this->phone) . "</p>";

        echo "<p><strong>Address:</strong> "
            . htmlspecialchars($this->address) . "</p>";
        echo "</div>";
    }
}
?>