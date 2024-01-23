<!DOCTYPE html>
<html>
    <head>
        <title>Simple Form Processing </title>
</head>

<body>
    <form actions="form_1.php" method="post">
        FirstName:
        <input type="text" name="firstname" required/>
        <br>
        <br>
        LastName
        <input type="text" name="lastname" required/>
        <br>
        <br>
        address
            <input type="text" name="address" required/>
        <br>
        <br>
        Email address:
        <input type="email" name="email"required/>
        <br>
        <br>
        Password:
        <input type="pass" name="pass"required/>
        <br>
        <br>
        <input type="submit" value=Submit>
</form>
</body>
</html>