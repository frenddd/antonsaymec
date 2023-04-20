<body>
<form action="login.php" method="post">
    <h2>login</h2>
<?php if(isset($_GET[ 'error'])){?>
    <p><?php echo $_GET[</p>
echo $_GET[ 'error' ] ;
class="error"> <?php
<?php } ? >
< label > User Name</label>
< input type="text" name="uname" placeholder="User Name"><br>
< label>Password</1abe1>
<input type="password" name="password" placeholder="Password"><br>
<button type="submit">Login</button>
</form>
</body>