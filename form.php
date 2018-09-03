<!DOCTYPE html>
<html>
   <head>
 	 <title>Survey Form</title>
   </head>
  <body style="background-color: black;">
   <style>
    .abc
     {
    	margin-left: 500px;
		color:yellow;
		font-size: 20px;
     }
   </style>   
    <div class="abc">
    <h2>Survey Form</h2>
    <p><em>Kindly Fill In The Following Details</em></p>
    <form action="survey.php" target="_blank" method="POST" id="usrform">
    	First name:<br>
    	<input type="text" name="firstname" value="" placeholder="Enter your Last name" required style="line-height:20px">
    	<br>
    	Last name:<br>
    	<input type="text" name="lastname" value="" placeholder="Enter your Last name" style="line-height:20px">
    	<br>
    	DOB:<br>
    	<input type="date" name="date" value="" style="line-height:20px">
    	<br>
      Gender:<br>
      <input type="radio" name="gender" value="Male"> Male
      <input type="radio" name="gender" value="Female"> Female
      <input type="radio" name="gender" value="Others"> Others
    	Email:<br>
    	<input type="email" name="email" value="" placeholder="Enter your email" style="line-height:20px">
    	<br>
    	Description:<br>
        <textarea rows="4" cols="50" name="comment" form="usrform"
        placeholder="Enter text here..."></textarea><br>

    	<input type="submit" value="submit" id="usrform"></div>
    </form>  
  </body>
</html>