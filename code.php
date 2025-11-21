<?php

$correctPassword = "1234";


$result = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $input = $_POST["password"] ?? "";

    if($input === $correctPassword){
       
        $result = bin2hex(random_bytes(16)); 
    } else {
        $result = "Şifrə səhvdir!";
    }
}
?>

<!doctype html>
<html lang="az">
<head>
<meta charset="utf-8">
<title>PHP Random Kod Generator</title>
<style>
    body{
        background:#0f172a; 
        font-family: Arial; 
        color:white; 
        display:flex; 
        justify-content:center; 
        align-items:center; 
        height:100vh;
    }
    .box{
        background:#1e293b; 
        padding:25px; 
        border-radius:12px; 
        width:300px;
        box-shadow:0 0 20px rgba(0,0,0,0.4);
    }
    input{
        width:100%; 
        padding:10px; 
        border:none; 
        border-radius:6px; 
        margin-top:10px;
    }
    button{
        margin-top:12px; 
        width:100%; 
        padding:10px; 
        border:none; 
        border-radius:6px; 
        background:#6366f1; 
        color:white; 
        font-weight:bold; 
        cursor:pointer;
    }
    .result{
        margin-top:15px; 
        padding:10px; 
        background:#334155; 
        border-radius:6px; 
        word-break:break-all;
    }
</style>
</head>
<body>

<div class="box">
    <h2>Random Kod Generator (PHP)</h2>

    <form method="POST">
        <label>Şifrə daxil et:</label>
        <input type="password" name="password" placeholder="Şifrə..." required>
        <button type="submit">Gönder</button>
    </form>

    <?php if($result !== ""): ?>
        <div class="result">
            <?php echo $result; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
