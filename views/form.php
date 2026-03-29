<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP Form PBO</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-neutral-50">

    <div class="max-w-lg mx-auto mt-20 p-10 bg-white rounded-xl shadow-lg border border-gray-200">
        <h2 class="text-2xl font-bold text-center">Form Sederhana</h2>
    <form method="POST" action="">
        <div class="mb-3 w-full space-y-2">
            <label class="block text-sm font-medium">Firstname</label>
            <input  
                class="block w-full rounded-md px-2 py-1 border border-gray-300 focus:outline-blue-500 focus:outline-2"
                type="text" 
                name="firstName" 
                required>
        </div>

        <div class="mb-3 w-full space-y-2">
            <label class="block text-sm font-medium">Lastname</label>
            <input 
                class="block w-full rounded-md px-2 py-1 border border-gray-300 focus:outline-blue-500 focus:outline-2"
                type="text"
                name="lastName" 
                required>
        </div>

        <div class="mb-3 w-full space-y-2">
            <label class="block text-sm font-medium">Phone Number</label>
            <input 
                class="block w-full rounded-md px-2 py-1 border border-gray-300 focus:outline-blue-500 focus:outline-2"
                type="text" 
                name="phone" 
                required>
        </div>
        <div class="mb-3 w-full space-y-2">
            <label class="block text-sm font-medium">Address</label>
            <textarea 
                class="block w-full rounded-md px-2 py-1 border border-gray-300 focus:outline-blue-500 focus:outline-2"
                name="address" 
                rows="4" 
                required></textarea>
        </div>
        <button class="bg-blue-500 block w-full py-2.5 text-center text-white rounded-lg" type="submit" name="submit">Submit</button>
    </form>
    </div>

    <?php
        if(isset($_POST['submit'])):
            $controller = new FormController();
            $data = $controller->store();
        endif;
    ?>

</body>
</html>