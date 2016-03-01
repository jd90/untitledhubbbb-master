<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Owner Registration Page</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>

    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>


</head>

<header>
    <section class="right">
        <div class="left">
            <img src = "assets/b&blogotransparent.png" id="img">


        </div>
        <div class="rightside">

    <?php
    if ($_SESSION["user"] != null) {
        echo "<p id='loginText'>Currently signed in as: " . $_SESSION["user"];
    echo "    not you?</p><button id='logout()' onclick='logout()'>LOGOUT</button>";
    }else{
    echo "<p id='loginText'>currently not logged in";
    }

    ?>
    <script>
        function logout() {
            window.location = "http://bbhubapp.azurewebsites.net/home.php?value=logout";
        }
    </script>

        </div>
        </section>
</header>

<div class="nav">

    <nav>



        <ul class="moveright">

            <!--<li><a href="B&Bregistration.html">Help</a></li>-->
            <li><a href="B&Bregistration.html">Register</a></li>
            <!-- <li><a href="B&Bregistration.html">Register</a></li> -->
            <li><a href="OwnerSignIn.php">Owner's Page</a></li>
            <li><a href="Home.php">Search</a></li>


        </ul>

    </nav>




</div>
<body>


<main>

    <div class="">
    <form action="ownerRegistrationResultPage.php" method="post" id="form">

        <table class="table1">
            <tr><td colspan="2">Register to List your Property!</td></tr>
            <tr><td class="small">* Required Fields</td></tr>




            <tr><td>
                <label for="email">Email: *</label></td>
                <td><input type="text" class="inputform" id="email" name="email" placeholder="email" size="30" maxlength="50" required /></td>
            </tr>
            <tr>
                <td><label for="password">Password: *</label></td>
                <td>    <input type="password" class="inputform" id="password" name="password" placeholder="enter password" required>
                </td>
            </tr>

            <tr>
                <td><label for="password2">Retype Password: *</label></td>
                <td>    <input type="password" class="inputform" id="password2" name="password2" placeholder="enter password again" required>
                </td>
            </tr><td>
            <label for="title">Title: *</label></td>
            <td><select class="inputform" id="title" name="title">
                <option value="">Select Title</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
                <option value="Ms">Ms</option>
            </select>
            </td>


            <tr>
                <td><label for="firstname">First Name: *</label></td>
                <td><input type="text" class="inputform" id="firstname" name="firstname" placeholder="Enter your First Name" required /></td>
            </tr>
            <tr>
                <td><label for="surname">Surname: *</label></td>
                <td><input type="text" class="inputform" id="surname" name="surname" placeholder="Enter your Surname" required /></td>
            </tr>
            <tr>



            <tr><td>
                <label for="address">Address: *</label></td>
                <td><input type="text" class="inputform" id="address" name="address" placeholder=" Enter first line of your address" size="30" maxlength="50" required /></td>
            </tr>

            <tr><td>
                <label for="address2">Address Line 2: *</label></td>
                <td><input type="text" class="inputform" id="address2" name="address2" placeholder=" Enter second line of your address" size="30" maxlength="50" required /></td>
            </tr>


            <tr><td>
                <label for="telephone">Telephone: *</label></td>
                <td><input type="text" class="inputform" id="telephone" name="telephone" placeholder=" Enter your telephone number" size="20" maxlength="20" required /></td>
            </tr>

            <tr><td></td>
                <td><p align="right" ><input id="submit" type="submit" value="Submit" class="submit" /></p></td>
            </tr>
        </table></form>
</div>

<div class="right2">


    <table class="table2">
        <tr><td colspan="2"><p>Message Board - advertisements - user info</p></td></tr>
        <tr class="tr2"><td class="t2"><p>row 1</p></td></tr>
        <tr class="tr2"><td class="t2"><p>row 2</p></td></tr>
        <tr class="tr2"><td class="t2"><p>row 3</p></td></tr>
        <tr class="tr2"><td class="t2"><p>row 4</p></td></tr>
        <tr class="tr2"><td class="t2"><p>row 5</p></td></tr>
        <tr class="tr2"><td class="t2"><p>row 6</p></td></tr>
        <tr class="tr2"><td class="t2"><p>row 7</p></td></tr>
        <tr class="tr2"><td class="t2"><p>row 8</p></td></tr>
        <tr class="tr2"><td class="t2"><p>row 9</p></td></tr>

    </table>
</div>


    <div class="right2">

    </div>

    <hr width="100%" align="left" size="1" color="#2f4f4f">


</main>
<div class="foot">
    <footer>

        <p>Copyright. Team D Solutions.</p>
    </footer></div>
</body>
</html>

