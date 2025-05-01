<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo $PATH ?>css/styles-3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="<?php echo $PATH ?>js/scripts.js"></script>
        <title><?php echo $title ?></title>
    </head> 
    <?php include_once $PATH . 'assets/inc/login.inc.php'; ?>