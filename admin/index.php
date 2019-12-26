<?php

require'../class/sessions.php';
$objses = new Sessions();
$objses->init();

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

if($user == ''){
	header('Location: http://localhost:8888/CodigosVideos/5-ControlRolesFinal/index.php?error=2');
}

?>
<?php

require'../class/config.php';
require'../class/modules.php';
require'../class/dbactions.php';
require'../class/Pmenu.php';
require'../global/constants.php';

$objcon = new Connection();
$objcon->get_connected();

?>
<!DOCTYPE html>

<html lang="esp">

    <head>
    <meta charset="utf-8" />
            <title>User Dashboard</title>
    </head>
        
    <body>
        
        <?php echo "Bienvenido, " . $_SESSION['user'];?>
        
        <?php require'../global/menu.php';
		
		?>
        
    </body>
    
</html>