<?php
require '../includes/session.php';
?>

<html>
<head>
<title>HVMR</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Hind:400,300,700" rel="stylesheet" type="text/css">
<link href="../stylesheets/screen.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>

    <div class="container">
        <h1>HVMR</h1>
        <p>A Database for a Research Inventory in the Hudson/Mohawk Watershed</p>
        <?php 
		
		if(isset($_SESSION['login_user'])) { ?>


        <button type="submit" onClick="window.open('../logout.php','_self')">Log-out</button>
		
		<?php } ?>
    </div>
</header>
<main>
    <section>
    	<aside>
            <nav>
                <ul>
                    <li><a href="../index.php">Search</a></li>
                    <li><a href="../view-all.php">View All</a></li>
                    <li><a href="#" class="selected">Edit</a>
                    
                    <ul>
                    <li><a href="add-report.php">Add Report</a></li>
                    <li><a href="update.php">Update Report</a></li>
                    <li><a href="delete.php">Delete Report</a></li>
                 </ul>
                    
                    
                    
                    </li>
                    
                 </ul>
                 
             </nav>
         </aside>
        <div class="content">
        	<h2>Logged in as: <?php echo $_SESSION['login_user'] ?></h2>
            <h3>HVMR Admin</h3>
            <p>The Environmental Consortium of Colleges & Universities was established in 2004 to advance our understanding of the cultural, social, political, economic and natural factors affecting the region.</p>

<p>There are currently 62 Institutional Members in the Consortium with a collective student, faculty, and staff community comparable to cities with populations over 220,000 people.  A map and list of institutions in the Consortium is available at: <a href="http://www.environmentalconsortium.org/membership/watershed.html" style="padding:0;margin:10px 0">http://www.environmentalconsortium.org/membership/watershed.html</a></p>

<p>The database is a repository of research projects in the Hudson/Mohawk watershed.</p>
        </div>
    </section>
</main>
<footer>
<?php include '../includes/footer.php'; ?>
</footer>
</body>
</html>
