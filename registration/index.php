<?php

    

    include("../connect.php");
    
    if(isset($_POST['login']))
    {
        $name = $_POST['txtname'];
        $email = $_POST['txtemail'];
        $password = $_POST['txtpass'];
        $address = $_POST['txtadd'];
        $dob = $_POST['dob'];
        $gender = $_POST['radiogen'];
        $hobbies = implode(", ", $_POST['checkhob']);
        $pincode = $_POST['pincode'];
        $phone = $_POST['phone'];   
        $city = $_POST['city'];             

        $insert = "INSERT INTO registration(`id`, `name`, `password`, `email`, `address`, `dob`, `gender`, `hobby`, `pincode`, `phone`, `city`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]')";

        mysqli_query($con,$insert) or die(mysqli_error($con));  //$con.

        echo "OK";

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div>
        <center>
            <h1>LOGIN</h1>
            <form action="" method="POST">
                <table border="1">
                    <tr>
                        <th>
                            <label for="txtname">NAME</label>
                        </th>
                        <th>
                            <input type="text" name="txtname">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="txtemail">EMAIL</label>
                        </th>
                        <th>
                            <input type="email" name="txtemail">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="txtpass">PASSWORD</label>
                        </th>
                        <th>
                            <input type="password" name="txtpass">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="txtadd">ADDRESS</label>
                        </th>
                        <th>
                            <textarea name="txtadd" cols="21" rows="3"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="dob">DOB</label>
                        </th>
                        <th>
                            <input type="date" name="dob">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="radiogen">GENDER</label>
                        </th>
                        <th>
                            <label for="radiogen">MALE</label>
                            <input type="radio" name="radiogen" value="male">
                            <label for="radiogen">FEMALE</label>
                            <input type="radio" name="radiogen" value="female">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="checkhob">HOBBY</label>
                        </th>
                        <th>
                            <label for="checkhob">COOKING</label>
                            <input type="checkbox" name="checkhob[]" value="cooking">
                            <label for="checkhob">DANCING</label>
                            <input type="checkbox" name="checkhob[]" value="dancing">
                            <label for="checkhob">READING</label>
                            <input type="checkbox" name="checkhob[]" value="reading">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="pincode">PINCODE</label>
                        </th>
                        <th>
                            <input type="number" name="pincode" pattern="\d{6}" title="Please enter a 6-digit number">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="phone">PHONE</label>
                        </th>
                        <th>
                            <input type="tel" name="phone">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="city">CITY</label>
                        </th>
                        <th>
                            <select name="city">
                                <option name="city" value selected disabled>SELECT CITY</option>
                                <option name="city" value="SURAT">SURAT</option>
                                <option name="city" value="VAPI">VAPI</option>
                                <option name="city" value="VALSAD">VALSAD</option>
                                <option name="city" value="DIV">DIV</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <button type="submit" name="login">LOGIN</button>
                            <button type="reset">CLEAR</button>
                        </th>
                    </tr>
                </table>
            </form>
        </center>
    </div>
</body>

</html>