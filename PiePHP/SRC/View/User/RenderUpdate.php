<?php 
    session_start();
    if ($_SESSION['id']) { 
?>

<center>
    <div style="margin-top: 40vh; transform: translateY(-50%);">
        <h1 style="text-align: center; font-size: 40px;">👉 Modifier 👈</h1>

        <form style="display: flex; flex-direction: column; align-items: center;" method="POST" action="/EPITECH/PiePHP/PiePHP/user/Update">
            <label style="margin-bottom: 5px; font-size: 18px;" for="email">✉ Email :</label>
            <input style="margin-bottom: 5px;" type="email" name="email" id="email" required>
            <!-- <br> -->
            <!-- <br> -->
            <label style="margin-bottom: 5px; font-size: 18px;" for="password">🔒 Mot de passe :</label>
            <input style="margin-bottom: 30px;" type="password" name="password" id="password" required>
            <!-- <br> -->
            <!-- <br> -->
            <input type="submit" value="Modifier les informations" style="font-weight: bold; font-size: 17px;">
        </form>
    </div>
</center>

<?php 
    } 
?>