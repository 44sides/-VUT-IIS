<head><style>
h1 {text-align: center;}
form {text-align: center;}
</style></head>

<?php
include_once("./bussiness_layer/checks.php");
session_start();
if(! is_manager() )
    header('Location: ./index.php');
?>

<html>
<h1>Chytni závadu!</h1>

<?php echo("Logged in as: ".$_SESSION['email']); ?>

    <form action="" class="inline">
        <button>All tickets</button>
    </form>

    <br>

    <form action="" class="inline">
        <button>Requests of service</button>
    </form>

    <br>

    <form action="present_layer/all_tickets_map.php" class="inline">
        <button>Mapa</button>
    </form>

    <br>

    <form action="present_layer/authentication/logout.php" class="inline">
        <button>Odhlásiť</button>
    </form>

    <br>
</html>