<?php
class FormHandler {
    // Properti (variabel di dalam class)
    public $firstName;
    public $lastName;
    public $phone;
    public $address;

    // Constructor (otomatis menangkap data saat object dibuat)
    public function __construct($postData) {
        $this->firstName = $postData['firstname'];
        $this->lastName = $postData['lastname'];
        $this->phone = $postData['phone'];
        $this->address = $postData['address'];
    }

    // Method (fungsi) untuk menampilkan hasil
    public function displayData() {
        echo "<div style='margin-top: 30px; font-family: sans-serif;'>";
        // Pake htmlspecialchars biar aman dari XSS
        echo "Hi, my name is " . htmlspecialchars($this->firstName) . " " . htmlspecialchars($this->lastName) . "<br><br>";
        echo "Phone Number : " . htmlspecialchars($this->phone) . "<br><br>";
        echo "Address : " . htmlspecialchars($this->address) . "<br><br>";
        echo "</div>";
    }
}
?>