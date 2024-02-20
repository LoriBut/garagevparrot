<?php
include("temp/header.php");
?>




<div class="heading" style="background: url(assets/css/image/slide-contact.jpg)">
   <!-- <h1>Contact</h1>-->
</div>

<section class="booking">


<h1 class="heading-title">Contactez votre garage automobile</h1>


<?php include("./form.php");?>

<form method="post" class="book-form">

   <div class="flex">
    <div class="inputBox">
        <span>Nom :</span>
        <input type="text" placeholder="Entrez votre nom..." name="name">
    </div>
    <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="Entrez votre email..." name="email">
    </div>
    <div class="inputBox">
        <span>Téléphone :</span>
        <input type="number" placeholder="Entrez votrer numero..." name="phone">
    </div>
    <div class="inputBox">
        <span>Message :</span>
        <input type="text" placeholder="Laissez un message..." name="message">
    </div>  
   
    <div class="col-12">
         <button class="btn" name="submit" type="submit" value="Envoyer">Envoyer</button>
    </div>

    
</form>

</section>


<?php
include("temp/footer.php");
?>