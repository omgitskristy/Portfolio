<div class="col-12">
    <div class="col-4 center">
        <img src="/images/about/07.png" class="image-preview" />
        <h1>Social Media</h1>
        <ul class="social-icons">
          <li>
            <a href="https://github.com/omgitskristy" target="_blank">
              <span>Github</span>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/omgitskristy/" target="_blank">
              <span>Instagram</span>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/omgitskristy" target="_blank">
              <span>LinkedIn</span>
            </a>
          </li>
        </ul>
    </div>
    <div class="col-8">
        <h1>Fill out the form below to get in touch</h1>
        <p>* Required fields</p>
        <hr />
    </div>
    <div class="col-8">
    		<div class="col-12">
            <form action="?page=contact" method="post">
                <input name="name" id="name" type="text" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>" placeholder="Name *" />
                <?php
                    if(isset($_POST['submitted'])){
                        $name = check($_POST['name'], '* Please enter your name.');
                    }
                ?>
            </div>
    		
            <div class="col-12">
                <input name="email" id="email" type="email" placeholder="Email address *" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>" />
                <?php
                    if(isset($_POST['submitted'])){
                        $email = checkemail($_POST['email'], '* Please enter a valid email.');
                    }
                ?>
            </div>
            
            <div class="col-12">
                <input name="phone" id="phone" type="tel" placeholder="Phone number" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>" />
            </div>
            
            <div class="col-12">
                <input name="website" id="website" type="text" placeholder="Your website" value="<?php if(isset($_POST['website'])){ echo $_POST['website']; } ?>" />
            </div>
            
            <div class="col-12">
                <textarea rows="8" name="message" placeholder="Your message *" id="message" value="<?php if(isset($_POST['message'])){ echo $_POST['message']; } ?>"></textarea>
                <?php
                    if(isset($_POST['submitted'])){
                        $message = check($_POST['message'], '* Please enter your message.');
                    }
                ?>
        	</div>
            
            <div class="col-12">
                <input type="submit" id="button" name="submit" value="Send Your Message" />
                <input type="hidden" name="submitted" />
            </div>

            <div class="col-12">
            <?php

            if(isset($_POST['submitted'])){
                $to = 'kristy.s.smith@gmail.com';    
                $phone = check($_POST['phone']);
                $website = check($_POST['website']);
                $subject = 'Request sent to omgitskristy.com!';
                $headers = 'From: '. $email .'' . "\r\n" .
                'Reply-To: '. $to ."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                
                if(check($name) && checkemail($email) && check($message)){
                    
                    $message .=  'Name: '. $name .'' . "\r\n" .
                    'From: '. $email .'' . "\r\n" .
                    'Phone: '. $phone .'' . "\r\n" .
                    'Website: '. $website .'' . "\r\n";
                    
                    $mail=mail($to, $subject, $message, $headers);
                    
                    if($mail){
                        echo '<p class="success">Your email has been sent successfully!</p>'."\n";
                    }else {
                        echo '<p>Mail sending failed!</p>';
                    }
                    
                    $name = '';
                    $email = '';
                    $phone = '';
                    $website = ''; 
                    $message = '';

                }
                
            }

            function check($data, $problem='', $issue=''){
                $data = trim($data);
                $data = htmlspecialchars($data);
                if($problem && strlen($data) == 0){
                    echo '<p class="error">'.$problem.'</p>'."\n";
                } elseif(preg_match("/[^a-zA-Z]/",$data)){
                    echo '<p class="error">'.$issue.'</p>'."\n";
                }
                return $data;
            }

            function checkemail($data, $problem=''){
                if(!preg_match("/([\w\-\]+\@[\w\-]+\.[\w\-]+)/", $data)){
                    echo '<p class="error">'.$problem.'</p>'."\n";
                }
                return $data;
            }

            ?>
            </div>
        </form>
    </div>
</div>