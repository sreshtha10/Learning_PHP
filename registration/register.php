<?php
require_once 'includes/header.php';
?>
<div>

    <h1>Register</h1>
    <p>Already have an account? <a href="register.php">Login !</a></p>

    <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirmPassword" placeholder="Confirm Password">
        <button type="submit">Submit</button>
    </form>



</div>

<?php
require_once 'includes/footer.php';
?>