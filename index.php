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
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #f8fafc, #e0f2fe);
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #60a5fa;
            font-size: 48px;
            margin-bottom: 40px;
        }

        .wrapper {
            max-width: 1100px;
        margin: auto;
        display: grid;
        grid-template-columns: 1fr 80px 1fr;
        gap: 24px;
        align-items: start;
        }

        .card {
            background: white;
            border-radius: 24px;
            padding: 28px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .arrow {
            text-align: center;
            font-size: 60px;
            color: #1d4ed8;
            padding-top: 120px;
        }

        .form-group {
            margin-bottom: 14px;
        }

        input,textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            background: #f8fafc;
            font-size: 14px;
        }

        textarea {
            resize: none;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 12px;
            background: #60a5fa;
            color: white;
            font-weight: 700;
            cursor: pointer;
            margin-top: 8px;
            transition: 0.3s ease;
        }

        button:hover {
            background: #3b82f6;
            transform: translateY(-2px);
        }

        .result-box {
            margin-top: 20px;
            padding: 18px;
            border-radius: 14px;
            background: #f8fbff;
            line-height: 1.8;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.03);
        }

        .placeholder {
            color: #94a3b8;
            text-align: center;
            padding: 60px 20px;
            font-size: 15px;
        }
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