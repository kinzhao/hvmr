<?php
session_start();
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HVMR</title>

<link href="stylesheets/screen.css" rel="stylesheet" type="text/css">

</head>

<body>
<header>

    <div class="container">
        <h1>HVMR</h1>
        <p>A Database for a Research Inventory in the Hudson/Mohawk Watershed</p>
    </div>
</header>
<main>
    <section>
    	<aside>
            <nav>
                 <?php include 'includes/main-nav.php'; ?>
             </nav>
         </aside>
        <div class="content">
        	<h2>You have succesfully registered, <?php echo $_SESSION["greet"] ?>!</h2>
            <p>please <a href="login.php">log-in</a>.</p>
        </div>
    </section>
</main>
<footer>
<div class="container">
<?php include 'includes/footer.php' ?>
</div>
</footer>


</body>
</html>
<?php
// destroy the session 
session_destroy(); 
?>