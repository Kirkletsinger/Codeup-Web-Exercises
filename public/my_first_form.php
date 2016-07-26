<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>


        <body>
            <form method="GET"> 
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="Username Here">
            </p>
    
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter password here">
            </p>
   
            <p>
                <input type="submit" name="login"></button>
            </p>   
            </form>


            <h2>Search</h2>
             <form method="GET" action="https://duckduckgo.com">
            <input type="text" name="q">
            <input type="Submit" name="search">
            </form>

            <h2>Compose an Email</h2>
    <form method="POST" action="http://requestb.in/szvltbsz">
        <p>
            <label for="Subject">Subject</label>
            <input id="subject" name="subject" type="text">
        </p>
        <p>
            <label for="body">Body</label>
            <textarea id="email_body" name="email_body" rows="5" cols="40"></textarea>
        </p>
        <p>
            <button type="submit">Send</button>
        </p>
    </form>


        <h2>Multiple Choice Test</h2>
    <form>
        <label>
            <input type="radio" name="q1" value="houston">
            Houston
        </label>
        <label>
            <input type="radio" name="q1" value="dallas">
            Dallas
        </label>
        <label>
            <input type="radio" name="q1" value="austin">
            Austin
        </label>
        <label>
            <input type="radio" name="q1" value="san antonio">
            San Antonio
        </label>
    </form>

   
        <h2>Select Testing</h2>
    <form>
      <label for="transmission">Select your transmission type: </label>
<select id="transmission" name="transmission">
    <option>Automatic</option>
    <option>Manual</option>
</select>
        






    </form>
    








        </body>
    </html>