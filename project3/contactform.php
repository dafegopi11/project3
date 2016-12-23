<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Contact Form</title>
  <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/longscrolly.css">
  <link rel="stylesheet" href="css/fonts.css">
</head>
<body>

<!-- Navigation -->
    <nav class="main">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contactform.php">Contact Form</a></li>
        </ul>
    </nav>

    <div class="container">
		<h1> Contact Info</h1>
    <script type="text/javascript" src="js/validate.js"></script>
		<form action="database-write.php" method="post" name="myForm" id="myForm" onsubmit="return(validate());">
         <table cellspacing="2" cellpadding="2" border="1">
            
            <tr>
               <td align="right">Name</td>
               <td><input type="text" name="Name" /></td>
            </tr>
            
            <tr>
               <td align="right">Email</td>
               <td><input type="text" name="EMail" /></td>
            </tr>
            
            <tr>
               <td align="right">Phone</td>
               <td><input type="text" name="Phone" /></td>
            </tr>  
         </table>

         <textarea name="message" form="myForm"></textarea>

         <input type="submit" value="send">
      </form>


     </div>

</body>
</html>







