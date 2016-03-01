<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Owner's Page: theb&bhub.com</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>

    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="script.js"></script>


</head>

<header>
    <section class="right">
        <div class="left">
            <img src = "assets/b&blogotransparent.png" id="img">


        </div>
        <div class=rightside">


    <?php
    if ($_SESSION["user"] != null) {
        echo "<p id='loginText'>Currently signed in as: " . $_SESSION["user"];
        echo "    not you?</p><button id='logout()' onclick='logout()'>LOGOUT</button>";

        //header("Location: OwnerReviewPage.php"); ||

        showOwnerReviewPage();

    }else{
        echo "<p id='loginText'>currently not logged in";

        showOwnerSignInPage();
    }

    ?>
    <script>
        function logout() {
            window.location = "http://iainscott-rgu.azurewebsites.net/home.php?value=logout";
        }
    </script>


    <?

    function showOwnerSignInPage()
    {

        $htmlOwnerSignInPage =
<<<HTMLPAGE


        </div>
        </section>
        </header>

<div class='nav'>

      <nav>



        <ul class="moveright">


            <li><a href="B&Bregistration.html">Register</a></li>
            <!-- <li><a href="B&Bregistration.html">Register</a></li> -->
            <li><a href="OwnerSignIn.php">Owner's Page</a></li>
            <li><a href="Home.php">Search</a></li>


        </ul>

    </nav>




</div>
<hr width="100%" align="left" size="1" color="#d3d3d3">
<body>


<main>


   <table class='table1'>
            <tr><td colspan='2'>Owner's Page</td></tr>

            <tr><td class='small'>* Required Fields</td></tr>

            <tr><td>
                <label for='email'>Email: *</label></td>
                <td><input type='text' class='inputform' id='email' name='email' placeholder='email' size='30' maxlength='50' required /></td>
            </tr>
            <tr>
                <td><label for='password'>Password: *</label></td>
                <td>    <input type='password' class='inputform' id='password' name='password' placeholder='enter password' required>
                </td>
            </tr>

    <tr><td></td><td><input id='submit' type='button' value='Sign In'></td></tr>
    <form class='table1' id='myForm' name = 'myForm' action='OwnerRegistration.php' >
    <tr><td></td><td><input id='submit' type = 'submit' value = 'Register'/></td></tr>





    <!-- The result of the search will be rendered inside this div -->
    <tr><td colspan='2'><p id='result' style='color: #ff0006'></p></td></tr>
</table>
            </form>



    <div class='right2'>


            <table class='table2'>
                <tr><td colspan='2'><p>Message Board - advertisements - user info</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 1</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 2</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 3</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 4</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 5</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 6</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 7</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 8</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 9</p></td></tr>







            </table>
    </div>

    <hr width='100%' align='left' size='1' color=''#2f4f4f'>


</main>
<div class='foot'>
<footer>

    <p>Copyright. Team D Solutions.</p>
</footer></div>
</body>
</html>





HTMLPAGE;

        print($htmlOwnerSignInPage);
    }

    function showOwnerReviewPage()
    {


        $htmlOwnerReviewPage =
<<<HTMLPAGE2
                                </header>

<div class='nav'>

    <nav>



        <ul class="moveright">

            <!--<li><a href="B&Bregistration.html">Help</a></li>-->
            <li><a href="Customerinfo.html">Register</a></li>
            <!-- <li><a href="B&Bregistration.html">Register</a></li> -->
            <li><a href="OwnerSignIn.php">Owner's Page</a></li>
            <li><a href="Home.php">Search</a></li>


        </ul>

    </nav>




</div>
<hr width="100%" align="left" size="1" color="#d3d3d3">
<body>


<main>


   <table class='table1'>
            <tr><td colspan='2'>Owner's Page</td></tr>



    <tr><td>You are on the owner's review page!</td></tr>





    <!-- The result of the search will be rendered inside this div -->
    <tr><td colspan='2'><p id='result' style='color: #ff0006'></p></td></tr>
</table>
            </form>



    <div class='right2'>


            <table class='table2'>
                <tr><td colspan='2'><p>Message Board - advertisements - user info</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 1</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 2</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 3</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 4</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 5</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 6</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 7</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 8</p></td></tr>
                <tr class='tr2'><td class='t2'><p>row 9</p></td></tr>







            </table>
    </div>

    <hr width='100%' align='left' size='1' color=''#2f4f4f'>


</main>
<div class='foot'>
<footer>

    <p>Copyright. Team D Solutions.</p>
</footer></div>
</body>
</html>

        ";





HTMLPAGE2;

        print($htmlOwnerReviewPage);


    }



    ?>


