<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Archivo:wght@800&family=Arimo&family=Barlow:wght@500&family=Bebas+Neue&family=Comic+Neue&family=Dancing+Script&family=Gruppo&family=Inter:wght@500&family=Lilita+One&family=Lobster&family=Montserrat:wght@100;400&family=Quicksand:wght@300&family=Raleway&family=Roboto:wght@300&family=Tilt+Warp&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>ITE 308</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <header>

    </header>
       <nav>
           <ul>
               <li>Home</li>
               <li>About</li>
               <li>Cinemas</li>
           </ul>
       </nav>
    <div class="container">
        <h1>Ticket Purchase Completed!</h1>
        <hr>
        <b>Customer Name:</b> <?php echo $_POST["cname"]; ?> <br>
        <b>Gender:</b> <?php echo $_POST["gender"]; ?> <br>
        <b>Age:</b> <?php echo $_POST["age"]; ?> <br>
        <b>Address:</b> <?php echo $_POST["address"]; ?> <br>
        <b>Cinema:</b> <?php echo $_POST["cinema"]; ?> <br>
        <b>Tickets:</b> <?php echo $_POST["tickets"]; ?> <br>
        <b>Add Ons:</b> <?php echo $_POST["addOns"]; ?> <br>
        <iframe width="480" height="215" src="https://www.youtube.com/embed/Ar48yzjn1PE?si=47dl7L2uTYAbq7p1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
   
</body>
</html>