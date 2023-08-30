<?php include "app/appheader.php" ?>

<script>
$(document).ready(function(){
    $("title").text("FasPay Login Page");
    });
</script>

<div class="formStyle">

<p><img src="src/fasworld.png" alt="fasworld" height="50px" width="50px"></p>

<form name="request" action="submit.php" method="POST">
    <br />
    <br />
    <input type="email" id="email" name="email" placeholder="Type your email address" required>
    <br />
    <br />
    <input type="password" id="password" name="password" placeholder="Type your password" required>
    <br />
    <br />
    <br />
    <input type="submit" id="login" value="Login">
    <br />
    <br />
</form>

<p><a href="register.php">Create an account</a></p>
<br />

</div>