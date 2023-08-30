<?php include "app/appheader.php" ?>

<script>
$(document).ready(function(){
    $("title").text("FasPay Registration Page");
    });  
</script>

<div class="formStyle">

<p><img src="src/fasworld.png" alt="fasworld" height="50px" width="50px"></p>
<h3 class="bighead">Create a New FasPay Account</h3>

<form name="request" action="submit.php" onsubmit method="POST">
        <br />
        <input type="text" id="country" name="country" placeholder="Type your country name" required>
        <br />
        <br />
        <input type="tel" id="number" name="number" placeholder="Type your phone number" required>
        <br />
        <br />
        <input type="text" id="fullname" name="name" placeholder="Type your full name" required>
        <br />
        <br />
        <input type="email" id="email" name="email" placeholder="Type your email address" required>
        <br />
        <br />
        <input type="password" name="password1" id="password1" placeholder="Type your password" required>
        <br />
        <br />
        <input type="password" name="password2" id="password2" placeholder="Repeat your password" required>
        <br />
        <br />
        <input type="submit" id="create" value="Create">
        <br />
        <br />
</form>

<p>Already registered? <a href="login.php">Login</a></p>
<br />

</div>