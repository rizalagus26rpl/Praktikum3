<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <style>
body {
  background: #456;
  font-family: 'Open Sans', sans-serif;
}
.login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
  margin-top: 100px;
}
/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}
.login-header {
  background: #28d;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}
.login-container {
  background: #ebebeb;
  padding: 12px;
}
/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}
.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}
.login input[type="text"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}
/* Text fields' focus effect */
.login input[type="text"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}
.login input[type="submit"] {
  background: #28d;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}
.login input[type="submit"]:hover {
  background: #17c;
}
/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
}
.error {
    color: red;
    margin-left: 570px;

}
    </style>
</head>
<body>
    <div class="login">
    <h2 class="login-header">Form Login</h2>
    <Form action="login.php" method="post" class="login-container">
    <p>
        <input type="text" name="nis" placeholder="NIS">
    </p>
    <p>
        <input type="password" name="password" placeholder="Password">
    </p>
    <p>
        <input type="submit" value="Log in">
    </p>
    </form>
    </div>
    <div class="error">
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "wrong"){
            echo '<h3>NIS atau Password salah</h3>';
        }
    }
    ?>
    </div>
</body>
</html>