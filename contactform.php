<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Form</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/fonts.css">
</head>
<body>

<!-- Navigation -->
    <nav class="main">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li class="active"><a href="contactform.php">Contact Form</a></li>
        </ul>
    </nav>

    <div class="container">

    <header>
		  <h1> Contact Info</h1>
    </header>
    <script type="text/javascript" src="js/validate.js"></script>
		<form action="database-write.php" method="post" name="myForm" id="myForm" onsubmit="return(validate());">
         <table>
            
            <tr>
               <td>Name:</td>
               <td><input type="text" name="name" /></td>
            </tr>
            
            <tr>
               <td>Email:</td>
               <td><input type="text" name="email" /></td>
            </tr>
            
            <tr>
               <td>Phone:</td>
               <td><input type="text" name="phone" /></td>
            </tr> 
         </table> 
         <h2>Provide any other Additional Info About Yourself!</h2>       
         <textarea name="message" form="myForm" placeholder="Enter message here"
         rows="15" cols="30"></textarea>
  

         <input type="submit" value="send">
    </form>
    </div>
    <ul>
      <li><a href="index.php">Back to Index>,</a></li> 
    </ul>
    

</body>

</html>







