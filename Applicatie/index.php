<?php
// Start the session
session_start();
?>

<html>
    
    <head>
        <title>Chicago Park Cinema</title>
        <link rel="stylesheet" type="text/css" href="main.css"><link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <link rel="icon" href="plaatjes/favicon.ico" type="image/x-icon" />
    </head>
    
    <body>
        <div class="wikkel">
        <header>
            <?php include 'header.php';?>
        </header>
        
        <main>
            <div class="vakzwart">
                <div class="banner">
                    <?php include 'banner.php';?>
                <script src="banner.js"></script>
            </div>
            </div>
            
            <div class="vakgrijs">
                <div class="contentvakgrijs">
                    <?php include 'kiesfilm.php';?> 
                </div>
            </div>

        </main>
        
        <footer>
            <?php include 'footer.php';?>
        </footer>
        </div>
    </body>
    
</html>
