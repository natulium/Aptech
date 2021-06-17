<?php 
require_once ('form-contact.php');

?> 
    <link rel="stylesheet" type="text/css" href="contact.css"/>
    	<div class="container">
    		<div class="contact-all">
                <div class="contact-infor">
                    <h2>Contact Us</h2>
                    <div>Address:54 Le Thanh Nghi</div>
                    <div>Phone: +000 000 0000</div>
                    <div>Email: <a href="mailto:ryansportclub@gmail.com">ryansportclub@gmail.com</a></div>
                <div class="social">
                    <div><i class="bi bi-facebook"></i></div>
                    <div><i class="bi bi-twitter"></i></div>
                    <div><i class="bi bi-instagram"></i></div>
                    <div><i class="bi bi-google"></i></div>
                </div>
                <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7297008861324!2d105.84692901488296!3d21.0034694860121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad58455db2ab%3A0x9b3550bc22fd8bb!2zNTQgTMOqIFRoYW5oIE5naOG7iywgQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1622364705894!5m2!1svi!2s" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                </div>
                <div class="contact-form">
                    <h3>We will respone as soon as posible!</h3>
                    <form class="contact" method="POST">
                        <input type="text" name="name" class="text-box" placeholder="Enter your Name" required="true">
                        <input type="text" name="phone" class="text-box" placeholder="Enter your Phone number" required="true">
                        <input type="text" name="email" class="text-box" placeholder="Enter a valid email address" required="true"><br>
                        <input type="text" name="title" class="text-box" placeholder="Title" required="true">   
                        <textarea name="message" rows="5" placeholder="Enter your message" required="true"></textarea>
                        <button type="submit" name="submit" class="btn">submit</button>
                    </form>
                </div>
            </div>
        </div>
<?php 

?>