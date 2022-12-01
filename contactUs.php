<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("functions.php");
// if (!isset($_SESSION['id'])) {
//     header("Location:login.php");
// }

if (isset($_POST['SubmitButton'])) {

    $name = $_POST['UserName'];
    $email = $_POST['UserEmail'];
    $subject = $_POST['subject'];
    $text = $_POST['text'];

    $sql = "insert into `contact_us` (name,email,subject,text) values('$name','$email','$subject','$text')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script> alert('Thank you for your inquiry, we aim to respond with 24 hours!'); window.location = 'contactUs.php'</script>";
    } else {
        die(mysqli_errno($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/c035b66456.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <!-- This is the line you need -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <style>

    </style>

</head>

<body>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>

    <div class="navbar">
        <a href="index.php"><img src="images/Logo.png" class="logo"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="basicWeb.php">Games</a></li>
            <li><a href="aboutUs.php">About Us</a></li>
            <li><a href="contactUs.php">Contact Us</a></li>


            <?php

            if (isset($_SESSION["id"])) {
                echo "<li><a href='logout.php'>Log Out</a></li>";
            } else {
                echo "<li><a href='login.php'>Log In</a></li>";
            }
            ?>
            <?php
            if (isset($_SESSION["id"])) {
                echo '<li><a href="basket.php"><i class="fa-solid fa-basket-shopping"></i> </a></li>';
            } else {
                echo '<li><a href="login.php"><i class="fa-solid fa-basket-shopping"></i> </a></li>';
            }
            ?>

        </ul>

    </div>
    <!--start of the infomation on the contact us page-->
    <div class="contactBox">
        <!-- contact us -->
        <div class="detailsBox">
            <form class="addingInputs" method="post">
                <h1 style="text-align:center">How can we help you?</h1>

                <input type="text-box" class="formInput" placeholder="Enter Name" name="UserName" autocomplete="off">

                <input type="email" class="formInput" placeholder="Enter Email" name="UserEmail" autocomplete="off">

                <label>What do you need help with?</label></br>
                <select name="subject">
                    <option value="Where is my order?">Choose option</option>
                    <option value="Where is my order?">Where is my order?</option>
                    <option value="Delivery Enquiry">Delivery Enquiry</option>
                    <option value="Order Query">Order Query</option>
                    <option value="Return Query">Return Query</option>
                    <option value="Account/Techincal Query">Account/Techincal Query</option>
                    <option value="Store Query">Store Query</option>
                    <option value="Other">Other</option>
                </select>

                <textarea class="formInput" name="text" placeholder="Write something.." style="height:200px"></textarea>

                <button type="submit" class="submitButton" name="SubmitButton">Submit</button>
            </form>
        </div>
        <!-- end of contact us -->

        <!-- frequently asked questions -->
        <div class="detailsBox">
            <h1 style="text-align:center">Frequently Asked Questions</h1>
            <button class="accordion">Delivery</button>
            <div class="panel">
                <table id="customers">
                    <tr>
                        <th>Delivery Type</th>
                        <th>Delivery Time</th>
                        <th>Cost</th>
                    </tr>
                    <tr>
                        <td>Standard Orders</td>
                        <td>3-5 Working days</td>
                        <td>£2.99</td>
                    </tr>
                    <tr>
                        <td>Premium Orders</td>
                        <td>2-4 Working days/td>
                        <td>£3.99</td>
                    </tr>
                    <tr>
                        <td>Next Day Delivery</td>
                        <td>Next working day</td>
                        <td>£4.99</td>
                    </tr>

                </table>
            </div>

            <button class="accordion">Order & Payments</button>
            <div class="panel">
                <ul class="b">
                    <li>Visa MasterCard/Maestro or solo Debit/Credit cards</li>
                    <li>PayPal</li>
                    <li>Klarna</li>

                </ul>
            </div>


            <button class="accordion">Return Policy</button>
            <div class="panel">
                <ul class="b">
                    <li>We dont offer refunds unless there is an exceptional circumstance such as you recieve the product in a faulty condition.</li>

                </ul>
            </div>




        </div>
    </div>
    <!-- Leave a comment -->
    <div class="contactBoxComment">
        <?php

        if (isset($_POST['CommentButton'])) {

            $name = $_POST['commentName'];
            $comment = $_POST['comment'];



            $sql = "insert into `comments` (name,comment, date) values('$name','$comment', CURRENT_TIME())";
            $result = mysqli_query($con, $sql);

            if ($result) {
                echo "<script> alert('Comment was succesful'); window.location = 'contactUs.php'</script>";
            } else {
                die(mysqli_errno($con));
            }
        }
        ?>
        <div class="detailsBoxComment">
            <form class="addingInputs" method="post">
                <h1 style="text-align:center">Please Leave a Comment</h1>

                <input type="text-box" class="formInput" placeholder="Enter Name" name="commentName" autocomplete="off">

                <textarea type="text-box" class="formInput" name="comment" placeholder="Write something.." style="height:100px"></textarea>

                <button type="submit" class="submitButton" name="CommentButton">Comment</button>
            </form>

            <?php
            $sql = "Select * from `comments`";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $name = $row['name'];
                    $date = $row['date'];
                    $comment = $row['comment'];
                    echo '

                    <div class="comment__container comment__container--response">
                        <p class="comment_author">' . $name . '<span>  || ' . $date . ' </span></p>
                       <div class="comment__bubble">
                             <span class="comment__arrow">
                             <p class="comment_color">' . $comment . '</p>
                             </span>
                             <p></p>
                        </div>
                    </div>
                
                      
                      

                      ';
                }
            }

            ?>


        </div>
        <div class="detailsBoxComment">
            <h1 style="text-align:center">Fun Facts That You Didnt Know?</h1>
            <button class="accordion">1.The dragon Paarthurnax in The Elder Scrolls V: Skyrim is voiced by the same man who voices Nintendo’s Mario.</button>
            <div class="panel">
                <table id="customers">
                    <h4>That’s right, both the leader of the Greybeards with the deep husky voice and Nintendo’s
                        most iconic character with his high-pitched Italian accent is voiced by Charles Martinet.
                        Some other notable people behind some of Skyrim’s voices include Lynda Carter (Miss World USA 1972),
                        Christopher Plummer (Charles F. Muntz from Pixar’s UP), and Michael Hogan (Colonel Saul Tigh from Battlestar Galactica).</h4>

                </table>
            </div>

            <button class="accordion">2.Gears of War 2 was featured in AMC’s The Walking Dead.</button>
            <div class="panel">
                <h4>During a flashback in the final episode of season ten of
                    The Walking Dead, the season’s antagonist, Negan, can be seen playing Gears of War 2.While Negan is supposedly playing multiplayer with a
                    couple of other players, keen-eyed viewers figured out that the gameplay footage was from a point in the game’s campaign, specifically Act 2.</h4>
            </div>


            <button class="accordion">3.Left 4 Dead 2 was so popular that an expansion was released 11 years after the original launch date.</button>
            <div class="panel">
                <ul class="b">
                    <h4>As far as zombie survival games go, Left 4 Dead 2 found a formula for exciting yet refreshing gameplay that’s
                        incredibly hard to beat.
                        Combine that with surprisingly good graphics for its time, and this is why ten years from launch, it still had enough
                        of a dedicated following to warrant an expansion.
                        Valve, the producers of the game, were initially planning to create a next-gen sequel
                        but instead decided to make The Last Stand Expansion to what is commonly referred to as “the game that refuses to die.”</h4>

                </ul>
            </div>
            <button class="accordion">4.Rockstar Games hired real-life gang members to voice background characters in Grand Theft Auto V.</button>
            <div class="panel">
                <ul class="b">
                    <h4>In an attempt to add as much authenticity as possible to a game set in a fictional criminal underworld, the
                        producers decided to shy away from “goofy LA actors,” who added little more than two dimensions to the characters they voiced.
                        Quite a lot of the background characters are gangsters belonging to Latino and Black gangs, so Rockstar Games got a guy to go around
                        and hire genuine gangsters to voice the part.Many who saw their scripts threw them on the floor, as they weren’t “real”
                        enough, and they recorded their own version instead!</h4>

                </ul>
            </div>
            <button class="accordion">5.Half-Life was listed as the Best-Selling First-Person Shooter of All Time (PC) in the 2008 gamer’s edition of the Guinness Book of World Records.</button>
            <div class="panel">
                <ul class="b">
                    <h4>Not only did Half-Life completely redefine the PC first-person shooter genre, but it also had an incredibly mind-bending sci-fi story to back it up!

                        It’s no wonder that by 2008 it ended up selling more than 9.3 million copies at retail alone, being described by IGN at the time as the best shooter since the first Doom game.

                        Many game critics and reviewers gave it a full ten out of ten, with PC Gamer awarding it the title of Best PC Game Ever in 1999, 2001, and 2005.</h4>

                </ul>
            </div>

            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === "block") {
                            panel.style.display = "none";
                        } else {
                            panel.style.display = "block";
                        }
                    });
                }
            </script>



        </div>

    </div>
    <!--end of the infomation on the contact us page-->

    <!---Footer--->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>find us</h4>
                    <ul>
                        <li>Store location:</li>
                        <li>59-61 Station St, Birmingham B5 4DY</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>help</h4>
                    <ul>
                        <li><a href="/aboutUs.php">about us</a></li>
                        <li><a href="/contactUs.php">Contact Us</a></li>
                        <br>
                        <li>Games4U.org</li>
                        <li>DISCLAIMER: We do not own these pictures, they belong to their own sources, respectivly.</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

</html>