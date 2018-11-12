<?php
$message="";
if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = hash("sha256", $_POST["password"]);
    $number = $_POST["tel"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];

    if(empty ($firstName) || empty ($lastname) || empty($email) || empty($password) || empty($number) || empty($gender) || empty($country)){
        $message = <p class="error">All fields must be filled</p>;
    }

    if(empty($message)){
        $message = <p class= "success">All inputs are valid, Thank You</p>;
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>

    <div class="login">
        <h1>Signup</h1>
        <?php echo $message; ?>
    <form name="form" method="post" onsubmit="return validate()" >
        <label for="name">Firstname:</label>
        <input type="text" name="firstname" id="firstname">
        <br>
        <label for="name">Lastname:</label>
        <input type="text" name="lastname" id="lastname">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <label for="password">Comfirm Password</label>
        <input type="password" name="password" id="password">
        <br>
        <label for="tel">Phone Number:</label>
        <input type="tel" name="tel" id="tel">
        <br>
        <label for="gender">Gender:</label>
        <br>
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="female">
        <br>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="male">
        
        <br>
        <label for="country">Country</label>
        <select name="country" id="country">
            <option value="-1" selected>Choose one</option>
            <option value="afghanistan">Afghanistan</option>
            <option value="australia">Australia</option>
            <option value="brazil">Brazil</option>
            <option value="bulgaria">Bulgaria</option>
            <option value="chad">Chad</option>
            <option value="china">China</option>
            <option value="egypt">Egypt</option>
            <option value="france">France</option>
            <option value="gabon">Gabon</option>
            <option value="iceland">Iceland</option>
            <option value="india">India</option>
            <option value="japan">Japan</option>
            <option value="kenya">Kenya</option>
            <option value="mali">Mali</option>
            <option value="nigeria">Nigeria</option>
            <option value="peru">Peru</option>
            <option value="russia">Russia</option>
            <option value="samoa">Samoa</option>
            <option value="togo">Togo</option>
            <option value="ukraine">Ukraine</option>
            <option value="vatican city">Vatican City</option>
            <option value="yemen">Yemen</option>
            <option value="zimbabwe">Zimbabwe</option>
        </select>
        <br><br>
        <input type="submit" value="Login">
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="function.js" type="text/javascript"></script> 
</body>
</html>