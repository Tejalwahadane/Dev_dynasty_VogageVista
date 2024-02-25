<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI-Driven travel planner</title>
    <!-- Adding Font cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Swipper from cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
</head>
<body>
    <!-- Header sections start here -->
    <section class="header">
        <a href="index.php " class="logo">AI Travel Planner</a>
        
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
            <a href="about.php">About</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header sections ends here -->

    <section>
        <div id="book-bg-img">
            <h1 class="heading-title1">Plan your Trip now!!!</h1>
        </div>
    </section>
    <section id="section" class="booking">
        <form action="book-form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span>Name :</span>
                    <input type="text" placeholder="Enter your name " name="name">
                </div>
                <div class="inputbox">
                    <span>Email :</span>
                    <input type="email" placeholder="Enter your email " name="email">
                </div>
                <div class="inputbox">
                    <span>Phone :</span>
                    <input type="number" placeholder="Enter your Phone number " name="phone">
                </div>
                <div class="inputbox">
                    <span>Address :</span>
                    <input type="text" placeholder="Enter your address " name="address">
                </div>
                <div class="inputbox">
                    <span>Country :</span>
                    <select  name="country">
                        <option value="Australia">Australia</option>
                        <option value="Spain">Spain</option>
                        <option value="India">India</option>
                        <option value="Japan">Japan</option>
                        <option value="France">France</option>
                    </select>
                </div>
                <div class="inputbox">
                    <span>State :</span>
                    <select  name="state">
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="lakshadweep">lakshadweep</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Goa">Goa</option>
                    </select>
                </div>
                <div class="inputbox">
                    <span>Destination :</span>
                    <input type="text" placeholder="Specify Location name if necessary " name="location">
                </div>
                <div class="inputbox">
                    <span>Number of People :</span>
                    <input type="number" placeholder="Number of Members " name="guests">
                </div>
                <div class="inputbox">
                    <span>Period of Trip :</span>
                    <input type="number" placeholder="Number of Members " name="period">
                </div>
                <div class="inputbox">
                    <span>Budget :</span>
                    <select  name="budget">
                        <option value="0-25000">0-25000</option>
                        <option value="25000-50000">25000-50000</option>
                        <option value="50000-75000">50000-75000</option>
                        <option value="75000-100000">75000-100000</option>
                    </select>
                </div>

            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>
    </section>

 
        <!-- Footer Section Starts -->
        <footer>
            <div id="foot1">
                <div id="link1">
                    <div id="t1">USEFUL LINKS</div>
                    <div id="t2"><a href="#" style="color: white; text-decoration: none;">PRIVACY POLICY<a></div>
                    <div id="t3"><a href="index.php" style="color: white; text-decoration: none;">HOME</a></div>
                    <div id="t4"><a href="index.php" style="color: white; text-decoration: none;"></a></div>
                    <div id="t5"><a href="book.php" style="color: white; text-decoration: none;">Book</a></div>
                </div>
                <div id="link2">
                    <div id="t6"><a href="about.php" style="color: white; text-decoration: none;">ABOUT US</a></div>
                    <div id="t7"><a href="packages.php" style="color: white; text-decoration: none;">GALLERY</a></div>
                    <div id="t8"><a href="#" style="color: white; text-decoration: none;">VIDEOS</a></div>
                    <div id="t9"><a href="#" style="color: white; text-decoration: none;">TESTIMONIALS</a></div>
                </div>
                <div id="link3">
                    <div id="c1">Contact Information</div>
                    <div id="c5">Our Office Address:-xyz</div>
                    <div id="c2">General Enquiries:- Ai-travel@gmail.com</div>
                    <div id="c3">call Us:-99xxxxxxx</div>
                    <div id="c4">Our Timing:- 24x7</div>
                </div>
            </div>
        </footer>
        <!-- Footer Section Starts -->
    
        <!-- Swpipper javascript cdn -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- Custum javascript file -->
        <script src="js/script.js"></script>
</body>
</html>