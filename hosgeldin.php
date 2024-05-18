<?php
if (isset($_GET['student_number'])) {
    $student_number = htmlspecialchars($_GET['student_number']);
    echo "Hoşgeldiniz " . $student_number;
} else {
    // Eğer bu sayfa doğrudan erişilirse login sayfasına yönlendirme yap
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <style>
        body {
            background: rgba(24, 188, 6, 0.4);
            font-family: Arial, sans-serif;
        }
        a {
            display: inline-block;
            margin: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<a href="benimsayfam.html">ANA SAYFA</a>
</body>
</html>