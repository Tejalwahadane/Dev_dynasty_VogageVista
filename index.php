<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI-Driven travel planner</title>
    <!-- Adding Font cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Swipper from cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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

    <!-- Header section ends here -->

    <!-- Main starts here -->

    <!-- home Section starts here  -->
    <div class="slider">
        <div class="slides">
            <img src="Images/Slides/beach.jpg" alt="Image 1" class="slide">
            <img src="Images/Slides/Historical.jpg" alt="Image 2" class="slide">
            <img src="Images/Slides/Mountains.jpg" alt="Image 3" class="slide">
            <!-- Add more images here -->
        </div>
    </div>
    <!-- home Section ends here  -->



    <!-- services section starts here-->
    <section class="services">
        <h1 class="services-title"> Our Services</h1>

        <div class="box-container">

            <div class="box">
                <img src="./Images/home-icon.png" alt="" height="100px" width="100px">
                <h2>Adventure</h2>
            </div>

            <div class="box">
                <img src="./Images/tour-guide.png" alt="" height="100px" width="100px">
                <h2>Tour Guide</h2>
            </div>

            <div class="box">
                <img src="./Images/hiking.png" alt="" height="100px" width="100px">
                <h2>Trekking </h2>
            </div>

            <div class="box">
                <img src="./Images/camping-icon.png" alt="" height="100px" width="100px">
                <h2>Camping </h2>
            </div>

            <div class="box">
                <img src="./Images/offroad.png" alt="" height="100px" width="100px">
                <h2>Off Road </h2>
            </div>
        </div>
    </section>
    <!-- Services section ends here -->

    <!-- home about section starts -->
    <section class="home-about">

        <div class="image">
            <img src="./Images/about-us.jpg" alt="About Us ">
        </div>


        <div class="content">
            <h3>About Us</h3>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur est quas saepe, harum modi non optio
                sint, possimus maiores ratione deserunt iste voluptate provident sit tenetur molestias corporis
                praesentium
                doloribus, omnis cumque voluptatibus incidunt nam nostrum? Cupiditate tempore laudantium laboriosam!</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>
    <!-- home about section endss -->




    <label for="stateSelect">Select your state:</label>
    <select id="stateSelect" name="stateSelect">
        <option value="">Select...</option>
        <option value="Kerala">Kerala</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Goa">Goa</option>
        <!-- Add more options as needed -->
    </select>

    <div id="keralaContent" class="hidden">
        <h2>Kerala Content</h2>
        <p>This content is specific to Kerala.</p>
        <div id="servicesDropDown">
            <div class="boxDropDown">
                <img src="Images/img.jpg" alt="">
                <h2 class="h-secondary center">Wayanad</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et qui, repudiandae similique nam,
                    recusandae quidem ab asperiores ex, aut fugit labore veritatis facere?
                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
            <div class="boxDropDown">
                <img src="Images/beach.jpg" alt="">
                <h2 class="h-secondary center">Kochi</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab
                    dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
            <div class="boxDropDown">
                <img src="Images/beach.jpg" alt="">
                <h2 class="h-secondary center">Munnar</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus provident fugiat aliquam
                    minima at explicabo. Earum eveniet quaerat, sunt molestias nesciunt quas! Quis.
                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
        </div>
    </div>

    <div id="rajasthanContent" class="hidden">
        <h2>Rajasthan Content</h2>
        <p>This content is specific to Rajasthan.</p>
    </div>

    <div id="GoaContent" class="hidden">
        <h2>Goa Content</h2>
        <p>This content is specific to Goa.</p>
    </div>

    <script>
        // JavaScript to show/hide content based on state selection
        document.getElementById("stateSelect").addEventListener("change", function () {
            var selectedState = this.value.trim();
            var keralaContent = document.getElementById("keralaContent");
            var rajasthanContent = document.getElementById("rajasthanContent");
            var GoaContent = document.getElementById("GoaContent");

            // Hide all content initially
            keralaContent.classList.add("hidden");
            rajasthanContent.classList.add("hidden");
            GoaContent.classList.add("hidden");

            // Show content based on selected state
            switch (selectedState) {
                case "Kerala":
                    keralaContent.classList.remove("hidden");
                    break;
                case "Rajasthan":
                    rajasthanContent.classList.remove("hidden");
                    break;
                case "Goa":
                    GoaContent.classList.remove("hidden");
                    break;
                // Add more cases for additional states
            }
        });
    </script>
    <!-- Main ends here -->
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