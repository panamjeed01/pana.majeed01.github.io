<html> 
    <head>
    <title>table </title>
         <link rel="stylesheet" href="style1.css">
    </head>
   <body> 
       <center>
           <div id="main">
<table class="timecard">
	<caption>Personal Information</caption>
     
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Job</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $_POST["name"]; ?> </td>
            <td><?php echo $_POST["email"]; ?></td>
            <td><?php echo $_POST["mob"]; ?></td>
            <td><?php echo $_POST["job"]; ?></td>
            <td><?php echo $_POST["pass"]; ?></td>
          
        </tr>
      
    </tbody>
         

               </table></div>
       </center>
   </body>  
</html>  