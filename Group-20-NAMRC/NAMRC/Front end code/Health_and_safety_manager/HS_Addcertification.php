<!-- Add certificate done by ariba -->
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Nuclear AMRC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../site.css"/>
</head>
<body>
<nav class="navbar">
    <ul>
        <li><a href="HS_Home.php">Back</a></li>
        <li><a href="HS_View.php">View employees</a></li>
        <li><a href="HS_Viewcell.php">View cells</a></li>
        <li><a href="HS_Viewtraining.php">View available training/certifications</a></li>
        <li class="right-link"><a href="../Home.html">Logout</a></li>
    </ul>
</nav>

<!-- changed the field names to match the database attributes for the table "Certification" - done by Ariba !-->
<form method="post" action="process_addcertification.php">  <!-- added a page of processing - done by Ariba !--> <!-- worked for me -->
    <div>
        <div class="inputlabel"> 
            
            <label for="certification_name"><span>Certification Name</span></label> <!-- updated field names - ariba naveed-->
            <input type="text" id="certification_name" name="certificationName" required>
            
            <label for="cell_ID"><span>Cell ID</span></label>
            <input type="text" id="cell_ID" name="cell_ID" required>

            <input type="submit" name="submit" value="Submit" class="addsubmit">
        </div>
    </div>
</form>

<img class="logo" src="../images/logo.png">

<footer class="footertext">Contact tel:+44 (0)114 222 9900 &nbsp;&nbsp;&nbsp;email: enquiries@namrc.co.uk</footer>
</body>
</html>