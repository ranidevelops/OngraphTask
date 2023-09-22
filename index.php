<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="form.css">
    <script src="form.js"></script>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<div class="container">  

<center>  <h1>Registeration Form</h1> </center>  

<hr>  

<label> <b>Firstname</b> </label>   

<input type="text"  id ="fname"name="fname" placeholder= "enter your first name:" size="50" required /> 
<input type="text" id="firstName" placeholder="First Name">
<div id="first-name-err"></div>
<br>

<label> <b>lastname</b> </label>   

<input type="text" id ="lname" name="lname" placeholder= "enter your last name:" size="50" required /> 
<div id="last-name-err"></div>
<br>

<label for="email"><b>Email</b></label>  

<input type="text" id="emailAddress" placeholder="Enter Email" name="email" required> 
<div id="email-err"></div> 

<label for="age"><b>Age</b></label>  

<input type="text" placeholder="Enter Age" name="age" required> <br> 
<lable for="password"><b>enter password:</b>
<input type="password" placeholder="Enter your password " id="password"name="password" required> 
<div id="password-err"></div>
<br> 
<lable for="password"><b>confrim password:</b>
<input type="password"  id="confirmPassword"placeholder="confrim your password " name="cpassword" required> 

<div id="confirm-password-err"></div>
<br> 



<div>  

<label>   

<b>Gender : </b> 

</label><br>  

<input type="radio" value="Male" name="enderg" checked > Male   

<input type="radio" value="Female" name="gender"> Female   

<input type="radio" value="Other" name="gender"> Other  
<b>Comment : </b> 

<textarea name="comment" cols="50" rows="2" placeholder="Current Address" value="address" required>  

</textarea>
</div>  
<b>Phone No.</b> <input type="number" id="mobileNumber" name="number">
<input type="text" id="mobileNumber" placeholder="Mobile Nubmer">
<div id="mobile-number-err"></div>
DOB:<input type="date" id="dob" name="date"><br>
Hobbies:><br><input type="checkbox" id="hobby" name="hobby">playing
<input type="checkbox" name ="hobby">Dancing
<input type="checkbox" name ="hobby">Reading
<input type="checkbox" name ="hobby">other<br>
<b>Country:<b><select name="country" class= "select" id="select">
                        <option value = "">Select</option>
                        <option value="1st">India</option>
                        <option value="2nd">other</option>
                    </select>
<b>state:</b><select name="state" class= "select" id="state">
                        <option value = "">Select</option>
                        <option value="1st"></option>
                        <option value="2nd"></option>
                    </select>
<b>city:</b><select name="city" class= "select" id="city">
                        <option value = "">Select</option>
                        <option value="1st"></option>
                        <option value="2nd"></option>
                        <option value="3rd"></option>
                        <option value="4th"></option>
                    </select><br>




<label>    

<button type="submit" class="registerbtn">Register</button>    

</form>  
<?php
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $Email=$_POST['email'];
    $password=$_POST['password'];
    $confrimPassword=$_POST['cpassword'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $hobbies=$_POST['hobby'];
    $phone=$_POST['number'];
    $Dob=$_POST['date'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $host='localhost';
    $user='root';
    
    $connection =mysqli_connect('localhost','root','admin123');


}
?>
</body>
</html>

