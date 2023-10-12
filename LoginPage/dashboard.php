<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="dashboardstyle.css" />
</head>
<body>
    <div class="container">
        <button class="logout_btn"><a href="logout.php">Logout</a></button>
        <h1>Hey, <?php echo $_SESSION['username']; ?>!</h1>
        <h2>Welcome to your Notes <span class="book"><ion-icon name="book"></ion-icon></span></h1>
        
        <button class="new_note"><span class="create"><ion-icon name="create-outline"></ion-icon></span>Create notes</button>

        <div class="notes-cont">
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>