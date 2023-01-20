<?php 

if(isset($_COOKIE["email"])) {
    header( "refresh:0;url=/index.php" );
} 



setcookie("name", "", time() - 3600);
setcookie("value", "", time() - 3600);

// header('Location:/index.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game with WoW</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <section>
    
    
         <div class="container">
         <img src="image/laugh2.gif" alt="This is an animated gif image ;)"  width="150px" id="gif">
           
         <h1 class="hero-head"> மேலும் உங்கள்  நண்பர்களின் போன பிறவிகளை தெரிந்து கொள்ள உங்களது Email addressஐ  பதிவு செய்யவும்  </h1>
      

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="form" method="POST">
                <input type="email" class="inpt" placeholder="Emter Your Email" required name="email"> 
                </form>

                <!-- <div class="gender">
                <input type="radio" class="gen"value="Male" name="Gender">Male &ensp;
                <input type="radio" class="gen"value="Famale" name="Gender" >Female&ensp;
                <input type="radio" class="gen"value="Others" name="Gender">Others 
                </div> -->

                <input type="submit" value="Go" class="go" form="form" >
               
         </div>


     </section>

     <footer> <p style="font-size:4px"> Note:The above game is only for Fun, Not to hurt anyone</p></footer>
    
    
</body>
</html>

<?php

$email=$_POST['email'];
if (isset($email)) {

setcookie('email',$email);
header('Location:index.php');

$fp = fopen('file.txt', 'a');
fwrite($fp, $email.'  ');
fclose($fp);

  }


?>