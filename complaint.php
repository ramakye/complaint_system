

<!DOCTYPE html>
<html >
  <head>
    <title> Welcome to the Complaint Area </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="container_complaint">
    <div class="login-text" style="font-size: 2rem; font-weight: 800;">Kindly Lodge Your Complaint</div>
    <div class="content">
        
      <form action="insert.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" id ="fullname" name="fullname" required>
          </div>

          <div class="input-box">
            <span class="details">Index Number</span>
            <input type="text" placeholder="Enter your Index Number" id ="indexnumber" name ="indexnumber" required>
          </div>        
        </div>

        <select name="level" class="field" id="level">
					<option value="100">Level 100</option>
					<option value="200">Level 200</option>
					<option value="300">Level 300</option>
					<option value="400">Level 400</option>
				
					</select>

				<select name="issue" class="field" id="issue">
					<option value="login">Login issue</option>
					<option value="course">Course issue</option>
					<option value="other">Other</option>	
					</select>

                 <div class="input-box">
         <span class="details">Complaint</span>
        <textarea class="field" id ="complaint" name ="complaint"> </textarea>
        </div>


        <div class="button">
          <input type="submit" value="submit" name="submit">
        </div>
        
      </form>

 
      <p> Click here to visit the <a href = "tutorial.php"> Tutorials Page</a></p> 


    </div>
  </div>

</body>
</html>
