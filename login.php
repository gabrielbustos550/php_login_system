<?php
    include_once 'header.php'
?>
        <Section class="signup-form">
            <h2>Log In</h2>
            <div class="signup-form-form">
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="name" placeholder="Username/Email..."> 
                    <input type="password" name="pwd" placeholder="Password..."> 
                    <button type="submit" name="submit">Log In</button>
                </form>
            </div>
        </Section>

    
  
        <?php
            include_once 'footer.php'
        ?>