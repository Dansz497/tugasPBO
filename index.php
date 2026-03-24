<?php 
// Panggil file class-nya
require_once 'FormHandler.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP Form PBO</title>
    <style>
        /* CSS dasar aja biar rapi dikit, sisanya tolong tambahin ya */
        body { font-family: sans-serif; margin: 40px; }
        .form-group { margin-bottom: 15px; }
        input, textarea { width: 100%; max-width: 400px; padding: 8px; margin-top: 5px; }
        button { padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>

    <h2>Form Sederhana</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label>Firstname</label>
            <input type="text" name="firstname" required>
        </div>
        <div class="form-group">
            <label>Lastname</label>
            <input type="text" name="lastname" required>
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phone" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address" rows="4" required></textarea>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    // Logic: Kalau tombol submit ditekan, buat object baru dari class FormHandler
    if (isset($_POST['submit'])) {
        $form = new FormHandler($_POST);
        $form->displayData(); // Panggil fungsi nampilin data
    }
    ?>

</body>
</html>