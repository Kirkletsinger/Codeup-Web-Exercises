<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/my_first_external">

    
</head>
<body>
    <h1>Please Sign Up</h1>
    <form method="GET">
        <label for="username">Username</label>
        <input id="username" type="text" name="username">
        <br>

        <label for="email">Email</label>
        <input id="email" type="text">
        <br>

        
        <label for="password">password</label>
        <input id="password" type="password" name="password">
        <br>

        <label for="confirm_password">confirm password</label>
        <input id="confirm_password" type="password" name="confirm_password">
         <br>
   

        <h2>Filing Status</h2>

        <label for="filing_status">
            <input type="radio" name="filing_status" value="single">
            Single
        </label>
        <br>
        
        <label for="filing_status">
            <input type="radio" name="filing_status" value="married_joint">
            Married Filing Jointly
        </label>
        <br>
        
        <label for="filing_status">
            <input type="radio" name="filing_status" value="married_separate">
            Married Filing Separately
        </label>
        <br>
        
        <label for="filing_status">
            <input type="radio" name="filing_status" value="hoh">
            Head of Household
        </label>
        <br>
        
        <h2>This past year I was (check all that apply)</h2>

        <label for="emplyment_status">
            <input type="checkbox" name="employment_status" value="self_employed">
            Self - Employed
        </label>
        <br>
        
        <label for="employment_status">
            <input type="checkbox" name="employment_status" value="small_business">
            Employed by a small business (< 50 employees)
        </label>
        <br>
        
        <label for="employment_status">
            <input type="checkbox" name="employment_status" value="large_business">
            Employed by a large business (> 50 employees)
        </label>
        <br>
        
        <h2>What kind of phone do you have</h2>

        <option name="phone type">
            <select value="android">Android</select>
            <select value="iphone">iPhone</select>
          
  <select value="windows">Windows Phone</select>
            <select value="other">Other</select>
        </option>

        <form>
              <label for="Your OS">Select your OS: </label>
        <select id="transmission" name="transmission">
            <option>Android</option>
            <option>Iphone</option>
            <option>Windows</option>
        </select>

         <hr>

        <label for="newsletter">Sign Me Up For The Newsletter
            <input type="checkbox" name="newsletter" id="newsletter" checked="checked">
        </label>

    </form>
    


</body>
</html>