<html>
<head>
</head>

<body>
<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me</span></h2>

    <form action="sendmail.php">
        <div class="input-box">
            <input type="text" placeholder="Full Name">
            <input type="email" placeholder="Email Address">    
        </div>
        <div class="input-box">
            <input type="number" placeholder="Phone Number">
            <input type="text" placeholder="Email Subject">    
        </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <input type="submit" value="Send Message" class="btn">
    </form>

</section>

<footer>
<?php 
echo date("F j, Y, g:i a"); 
?>

</footer>
</body>
</html>