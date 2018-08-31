<!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width">
   <meta name="description" content="music site">
   <meta name="keywords" content="musics for indie,New songs,Bangla songs,hindi songs,English songs">
   <meta name="author" content="MD Aman Ullah Khan">
   <title>Input From UI Design</title>
   <link rel="stylesheet" href="dgn.css">
 </head>
   <body>
  <header>
    <div class="contain">
      <nav>
        <div id="branding">
          <h1><span class="highlight">Creatives</span> Cloud</h1>
        </div>
      <nav>
          <ul>
            <li><a href="lgin.php">Log in</a></li>
              <li class="current"><a href="Signup.php">Sign up</a></li>
          </ul>

        </nav>
      </nav>

          </div>

</header>


    <div class="box">
      <h2>Please sign up</h2>
      <form action="includes/signup.inc.php" method="POST">


<div class="inputBox">
<input type="text" name="uid" required>
<label>User name</label>
</div>


  <div class="inputBox"> <input type="password" name="pwd" required>
        <label>Password</label> </div>
      
        <div class="inputBox"> <input type="password" name="cpwd" required>
              <label> Confirm Password</label> </div>
              <input type="submit" class="button" name="submit" value="Sign up">

        </div>
      </form>
    </div>

  </body>
  </html>
