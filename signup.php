<?php
    include_once 'header.php'
?>
        <Section class="signup-form">
            <h2>Sign up</h2>
            <div class="signup-form-form">
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="name" placeholder="Full Name..."> 
                    <input type="text" name="email" placeholder="Email..."> 
                    <input type="text" name="uid" placeholder="Userame..."> 
                    <input type="password" name="pwd" placeholder="Password..."> 
                    <input type="password" name="pwdrepeat" placeholder="Repeat password..."> 
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
        </Section>

    
  
        <?php
            include_once 'footer.php'
        ?>