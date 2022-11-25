<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="ContactUsCSS.css">

    <title>Document</title>
</head>

<body>
    <div class="navbar">
        <a href="#"><img src="images/Logo.png" class="logo"></a>
        <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Log In</a></li>
            <li><a href="#"><i class="fa-solid fa-basket-shopping"></i> </a></li>
        </ul>

    </div>

    </div>
    </div>

    </head>

    <div id="Contact-Us-Body">

        <body>

            <div class="navbar2">
                <div class="dropdown">
                    <a href="#FAQ"> FAQ</a>
                    </button>

                </div>
                <div class="dropdown">
                    <a href="#EnquriesHeader">Email us </a>
                </div>
                <div class="dropdown">
                    <a href="#Discussions">Feedback</a>
                </div>
            </div>
            <div id="FAQ">
                <h1 style="padding-left: 40%;">Frequently Asked Questions</h1><br>
                <div id="Sidebar">
                    <nav class="sidebar   py-2  w-75 ">
                        <ul class="nav flex-column" id="nav_accordion">

                            <a class="nav-link" id="nav-link-Header" style="color: white;"><u>Delivery</u></a>
                            <ul class="submenu collapse">


                                <li><a class="nav-link" style="color: white;" onclick="DeliveryOptions()">Delivery options </a></li>
                                <div id="Delivery-Options">



                                    <table class="table" style="color: white;">
                                        <thead>
                                            <tr>
                                                <th>Delivery type</th>
                                                <th>Delivery time</th>
                                                <th>Cost</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td>Standard Orders</td>
                                            <td>3-5 Working days</td>
                                            <td>£2.99</td>
                                        </tr>

                                        <tr>
                                            <td>Premium orders</td>
                                            <td>2-4 Working days</td>
                                            <td>£3.99</td>
                                        </tr>

                                        <tr>
                                            <td>Next day delivery </td>
                                            <td>Next working day</td>
                                            <td>£4.99</td>
                                        </tr>
                                    </table>
                                </div>




                                <li><a class="nav-link" style="color: white;" onclick="StandardNextDayDelivery()">Standard & next day delivery</a></li>
                                <div id="Standard-Next-Day-Delivery" style="color: white;">

                                    <ul>
                                        <li> Working days are Monday to Friday. Exluding public holidays/ bank holidays and weekends</li>
                                        <li>Orders between 8 am to 7pm are available for next day Delivery. Except if ordered on the weekend or the day before a bank hoiday</li>
                                        <li>Orders from 7pm to 8am can only be standard orders </li>
                                        <li>Whilst we will always try to deliver your product on time. Sometimes this is not possible</li>
                                    </ul>
                                </div>

                                <li><a class="nav-link" style="color: white;" onclick="WhereIsMyOrder()">Where is my order?</a></li>
                                <div id="WhereIsMyOrder" style="color: white;">


                                    <p>If you have purchased an item. You should recieve an email on whenever the delivery progress has been moved onto the next stage</p>
                                    <p>If your item has not been delivered for a considerable amount of time You should contact us <a href="">here</a></p>
                                </div>
                                </li>
                            </ul>


                            <a class="nav-link" id="nav-link-Header" style="color: white;"><u>Orders & Payments</u></a>
                            <ul class="submenu collapse">
                                <li><a class="nav-link" style="color: white;" onclick="Payments()">Payments</a></li>
                                <div id="Payments" style="color: white;">

                                    <ul>
                                        <li>Visa MasterCard/Maestro or solo Debit/Credit cards</li>
                                        <li>PayPal</li>
                                        <li>Klarna</li>
                                    </ul>
                                </div>
                                <li><a class="nav-link" style="color: white;" onclick="PastOrders()">View past orders</a></li>
                                <div id="PastOrders" style="color: white;">

                                    <p>To view past orders you must be logged in. Then go to your account</p>
                                </div>
                            </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" id="nav-link-Header" style="color: white;"><u>Returns Policy</u></a>
                                <ul class="submenu collapse">
                                    <li><a class="nav-link" style="color: white;" onclick="Returns()">Returns</a></li>
                                    <div id="Returns" style="color: white;">

                                        <ul>
                                            <li>We dont offer refunds unless there is an exceptional circumstance such as you recieve the product in a faulty condition.</li>
                                            <li> In this case we will ask you to send evidence of this and determine whether you qualify for a refund </li>
                                        </ul>

                                    </div>
                                    <li><a class="nav-link" style="color: white;" onclick="ProductRecall()">Product recall</a></li>
                                    <div id="ProductRecall" style="color: white;">

                                        <p>In the unlikely event that a product is needed to be recalled. You will be contacted to return the product, once we recieve the product. You will be refunded for the purchase.</p>

                                    </div>
                                </ul>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>

            <!-- Customer service form with a submit form That auto fills out the mail and sends. -->
            <div id="EnquriesHeader">
                <h2 style="padding-left:30%; padding-top:5%; font-size:45px">Can't find what your looking for?</h2>
                <h3 style="padding-left:40%; padding-top:5%; font-size:40px">Send us an email</h3>

                <div id="Enquries" style="padding-left:40%">

                    <form method="POST" enctype="text/plain">
                        <label for="name">Full Name</label><br>
                        <input type="text" name="name" id="name" style="width:60%;border-radius:5px;" /> <br> <br>

                        <label for="email">Email address</label> <br>
                        <input type="email" name="email" id="email" style="width:60%;border-radius:5px;" /> <br> <br>

                        <label for="Subject">Subject</label> <br>
                        <input type="text" name="Subject" id="Subject" style="width:60%;border-radius:5px;" placeholder="Required to send Email..." /> <br> <br>

                        <label for="Description">Description</label><br>
                        <textarea name="Description" id="Description" cols="23" rows="5" style="width:60%;border-radius:5px;"></textarea>

                        <input type="submit" value="Submit" class="formButton" onclick="Email()">
                        <input type="reset" value="Reset" class="formButton">
                    </form>
                </div>
            </div>



            <h4 style="padding-left:40%; padding-top:5%; font-size:40px">Give us a Call</h4>
            <a href="tel:01123456789" style="padding-left:40% ; font-size:20px; color:#fefefe;text-decoration:none;">01123 456 789</a> <br><br>

            <div id="Mail" style="padding-left:40%;">
                <h5 style="padding-top:5%; font-size:40px">Head Office Address</h5>
                <p>If you want to write to Games4U, you can do so with the address provided below</p>
                <p>Please note that we respond faster to E-mails than mail.</p>
                <address>59-61 Station St,<br> Birmingham,<br> B5 4DY</address><br><br>
            </div>
            <!-- Area that allows users of the website to view other people's comments and add their own comments -->
            <div id="Discussions">
                <h1 style="padding-left: 40%;">Disscussion Form</h1>
                <!-- Data is fetched from a Discussions table and displayed. The input rating from the user is stored as an integer. There is a for loop, to print the number of stars(based on the user's rating)-->
                <?php

                try {
                    $db = new PDO("mysql:dbname=discussion;host=127.0.0.1:3306", "root", "");
                    $rows = $db->query("SELECT * FROM DisscussionForm LIMIT 5");
                    foreach ($rows as $row) {
                        $i = 1;
                ?>

                        <div id="list">
                            <div class="container-sm">
                                <!-- Image from: https://pixabay.com/vectors/blank-profile-picture-mystery-man-973460/ -->
                                <img src="images/Profile_Pic.png" alt="Profile picture" style="width:3%;height:3%; border-radius:30%">

                                <?= $row["Name"] ?> <?php echo '&nbsp'; ?> <?= $row["DatePosted"] ?> <br>

                                <?= $row["Ratings"] ?>

                                <?php while ($i <= $row['Ratings']) {
                                    echo '  <span class="fa fa-star checked"></span>';
                                    $i++;
                                } ?> <br>

                                <?= $row["Comment"] ?>
                            </div>
                        </div>
                        <br><br><br>
                <?php
                    }
                } catch (PDOException $ex) {
                    echo 'Sorry, a database error occurred.Please try again';
                }
                ?>
                <button id="LatestPost" class="formButton">View latest Posts</button>
            </div>


            <div id="Discussions-Latest" style="display:none">
                <h1 style="padding-left: 40%;">Disscussion Form</h1>
                <!-- Data is fetched from a Discussions table and displayed. The input rating from the user is stored as an integer. There is a for loop, to print the number of stars(based on the user's rating)-->
                <?php

                try {
                    $db = new PDO("mysql:dbname=discussion;host=127.0.0.1:3306", "root", "");
                    $rows = $db->query("SELECT * FROM DisscussionForm ORDER BY DatePosted DESC LIMIT 5");
                    foreach ($rows as $row) {
                        $i = 1;
                ?>

                        <div id="list">
                            <div class="container-sm">
                                <!-- Image from: https://pixabay.com/vectors/blank-profile-picture-mystery-man-973460/ -->
                                <img src="images/Profile_Pic.png" alt="Profile picture" style="width:3%;height:3%; border-radius:30%">

                                <?= $row["Name"] ?> <?php echo '&nbsp'; ?> <?= $row["DatePosted"] ?> <br>

                                <?= $row["Ratings"] ?>

                                <?php while ($i <= $row['Ratings']) {
                                    echo '  <span class="fa fa-star checked"></span>';
                                    $i++;
                                } ?> <br>

                                <?= $row["Comment"] ?>
                            </div>
                        </div>
                        <br><br><br>
                <?php
                    }
                } catch (PDOException $ex) {
                    echo 'Sorry, a database error occurred.Please try again';
                }
                ?>
                <button id="OldestPost" class="formButton">View Older Posts</button>
            </div>


            <!-- when the button is pressed, the modal section appears. This allows users to be able to add a post -->
            <button id=AddBtn class="formButton">Add post</button> <br><br>

            <div id="Modal" class="modal">
                <div class="modal-content" style="background-color:#4B0150 ;">
                    <form>
                        <div class="close">&times;</div>
                        <label for="name2">Name</label>
                        <input type="text" name="DiscussionName" id="DiscussionName" placeholder="Enter name here..." style="width:100%; border-radius:5px;" /> <br>

                        <label for="Comment">Comment</label><br>
                        <textarea name="Comment" id="Comment" cols="20" rows="5" placeholder="Type comment here..." style="width:100%; border-radius:5px;"></textarea>

                        <p>Ratings:</p>
                        <input type="range" min="1" max=5 id="ratings" name="ratings">
                        <br><button name="submit" class="formButton">Submit</button>
                    </form>
                </div>
            </div>
            <!-- This part inserts the data from the modal form and stores them into the Discussion table database. The JavaScript refreshes the page to update the database and display the newly inserted data -->
            <?php

            try {
                if (isset($_GET['DiscussionName']) && $_GET['DiscussionName'] != '' && $_GET['Comment'] != '') {
                    $Dname = strval($_GET['DiscussionName']);
                    $Comment = strval($_GET['Comment']);
                    $Rating = strval($_GET['ratings']);
                    $db = new PDO("mysql:dbname=discussion;host=127.0.0.1:3306", "root", "");
                    $db->query("INSERT INTO disscussionform(Name,Comment,Ratings) VALUES('$Dname','$Comment','$Rating')");

            ?> <script>
                        window.location.replace('ContactUs.php');
                    </script>

            <?php
                } else {
                }
            } catch (PDOException $ex) {
                echo 'A database error has occured';
            }
            ?>

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
                                <li><a href="#">about us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <br>
                                <li>Games4U.org</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

            <script>
                //This function allows users to click on the link,and when that link(parentElem) is pressed if another link is open(Showing the submenu(the nextElem)) it closes the previous link.
                document.addEventListener("DOMContentLoaded", function() {
                    document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {
                        element.addEventListener('click', function(e) {
                            let nextElem = element.nextElementSibling;
                            let parentElem = element.parentElement;

                            if (nextElem) {
                                e.preventDefault();
                                let mycollapse = new bootstrap.Collapse(nextElem);

                                if (nextElem.classList.contains('show')) {
                                    mycollapse.hide();
                                } else {
                                    mycollapse.show();
                                    // find other submenus with class=show
                                    var opened_submenu = parentElem.parentElement.querySelector('.submenu.show');
                                    // if it exists, then close all of them
                                    if (opened_submenu) {
                                        new bootstrap.Collapse(opened_submenu);
                                    }
                                }
                            }
                        });
                    })
                });
                //This function gets the user input from the input fields 'Subject' and 'Description' and when the mailto link(links to a email client on user's device) is run places the values into their respected places(e.g. 'Subject' goes into the subject of the mail and 'Description' goes into the body of the mail). Cannot send Email without filling these  subject field out, the other fields are optional
                function Email() {
                    var Subject = document.getElementById('Subject').value;
                    var Description = document.getElementById('Description').value;
                    if (Subject != '') {


                        window.location.href = "mailto:Games4U@gmail.com" + "?subject=" + Subject + "&body=" + Description;
                    } else {
                        window.alert("If you want to send an E-mail you need to Fill out the Required fields");
                    }
                }

                //This function allows the user to swap the view of the post from looking at the oldest posts to viewing the newest posts made
                var NewDiscussionsbtn = document.getElementById("LatestPost");
                NewDiscussionsbtn.onclick = function() {
                    var OldestP = document.getElementById("Discussions");
                    var latestP = document.getElementById("Discussions-Latest");

                    if (OldestP.style.display === "none") {
                        OldestP.style.display = "block";
                        latestP.style.display = "none";
                    } else {
                        OldestP.style.display = "none";
                        latestP.style.display = "block"
                    }
                }

                //This function allows the user to swap the view of the post from looking at the newest posts to viewing the oldest posts made. Its the reverse function to the one above
                var OldDiscussionsbtn = document.getElementById("OldestPost");
                OldDiscussionsbtn.onclick = function() {
                    var OldestP = document.getElementById("Discussions");
                    var latestP = document.getElementById("Discussions-Latest");

                    if (OldestP.style.display === "none") {
                        OldestP.style.display = "block";
                        latestP.style.display = "none";
                    } else {
                        OldestP.style.display = "none";
                        latestP.style.display = "block"
                    }
                }

                //Changes the visibility of the section 'Delivery-Options' from visible to invisible depending on what the visibility is currently set at(Turns visible section invisible and vice versa)
                function DeliveryOptions() {
                    var x = document.getElementById("Delivery-Options");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }

                //Changes the visibility of the section 'Standard-Next-Day-Delivery' from visible to invisible depending on what the visibility is currently set at(Turns visible section invisible and vice versa)
                function StandardNextDayDelivery() {
                    var x = document.getElementById("Standard-Next-Day-Delivery");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }
                //Changes the visibility of the section 'WhereIsMyOrder' from visible to invisible depending on what the visibility is currently set at(Turns visible section invisible and vice versa)
                function WhereIsMyOrder() {
                    var x = document.getElementById("WhereIsMyOrder");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }

                //Changes the visibility of the section 'Payments' from visible to invisible depending on what the visibility is currently set at(Turns visible section invisible and vice versa)
                function Payments() {
                    var x = document.getElementById("Payments");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }

                //Changes the visibility of the section 'PastOrders' from visible to invisible depending on what the visibility is currently set at(Turns visible section invisible and vice versa)
                function PastOrders() {
                    var x = document.getElementById("PastOrders");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }

                //Changes the visibility of the section 'Returns' from visible to invisible depending on what the visibility is currently set at(Turns visible section invisible and vice versa)
                function Returns() {
                    var x = document.getElementById("Returns");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }

                //Changes the visibility of the section 'ProductRecall' from visible to invisible depending on what the visibility is currently set at(Turns visible section invisible and vice versa)
                function ProductRecall() {
                    var x = document.getElementById("ProductRecall");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }
                //Assigning variable to the Modal section
                var modal = document.getElementById("Modal");

                // Get the button that opens the modal
                var btn = document.getElementById("AddBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on the add post button, opens the modal
                btn.onclick = function() {
                    modal.style.display = "block";
                }

                // When the user clicks on the X  close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }

                // When the user clicks anywhere that is not the modal, close modal
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }



                function myFunction1() {
                    document.getElementById("Xbox").classList.toggle("show");
                }

                function myFunction2() {
                    document.getElementById("Playstation").classList.toggle("show");
                }

                function myFunction3() {
                    document.getElementById("PC").classList.toggle("show");
                }

                window.onclick = function(e) {
                    if (!e.target.matches('.dropbtn')) {
                        var myDropdown = document.getElementById("Xbox");
                        if (myDropdown.classList.contains('show')) {
                            myDropdown.classList.remove('show');
                        }
                    }
                }

                window.onclick = function(e) {
                    if (!e.target.matches('.dropbtn')) {
                        var myDropdown = document.getElementById("Playstation");
                        if (myDropdown.classList.contains('show')) {
                            myDropdown.classList.remove('show');
                        }
                    }
                }

                window.onclick = function(e) {
                    if (!e.target.matches('.dropbtn')) {
                        var myDropdown = document.getElementById("PC");
                        if (myDropdown.classList.contains('show')) {
                            myDropdown.classList.remove('show');
                        }
                    }
                }
            </script>
        </body>
    </div>

</html>