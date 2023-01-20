<?php
if(isset($_COOKIE["name"])) {
    header( "refresh:0;url=/result.php" );
} 
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
           
         <h1 class="hero-head"> உங்கள் நண்பரின் போன  பிறவி  என்னவென்று  தெரிந்து கொள்ளுங்கள்... </h1>
      

                <form action="process.php" id="form" method="POST">
                <input type="text" class="inpt" placeholder="Your Friend's Name" required name="name"> 
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