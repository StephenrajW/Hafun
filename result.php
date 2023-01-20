

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
           
         <h1 class="hero-head"> உங்கள் நண்பர் <?php echo $_COOKIE["name"]; ?> போன ஜென்மத்தில் என்னவாக  பிறந்துள்ளார்  என அறிய Whatsapp share பட்டனை Click செய்யவும்  </h1>

       

         <a href="whatsapp://send?text= *<?php   echo $_COOKIE["name"]; ?> <?php   echo $_COOKIE["value"]; ?>*😀  %0a%0a இது போன்று  உங்கள் நண்பரின் போன ஜென்மத்தைக்  கண்டறியவும்.%0a%0a
👇🏼👇🏼👇🏼👇🏼👇🏼👇🏼👇🏼%0a https://stackoverflow.com/"> 





         <img src="image/whatsapp.png" alt="Whatsappshare" width='120px' style="boder-radius:50%">
         </a>


         <a href="delete.php" class="another">Check another name -> </a>
         </div>

         


     </section>

     <footer> <p style="font-size:4px;text-align:center;"> Note:The above game is only for Fun, Not to hurt anyone</p></footer>
    

</body>
</html>