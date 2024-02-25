<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI-Driven travel planner</title>
    <!-- Adding Font cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/package.css">
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

<!-- Header section ends here -->

<!-- Main starts here -->

    <!-- home Section starts here  -->
    <div class="slider">
        <div class="slides">
            <img src="Images/Slides/beach.jpg" alt="Image 1" class="slide">
            <img src="Images/Slides/Historical.jpg" alt="Image 3" class="slide">
            <img src="Images/Slides/Mountains.jpg" alt="Image 3" class="slide">
            <img src="Images/Slides/hs3.jpg" alt="Image 4" class="slide">
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
                <img src="./Images/trekking-icon.png" alt="" height="100px" width="100px">
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

    <!-- Packages Section starts -->
    <div id="package-range">
    <h2>International Packages</h2>
</div>
<div class="package-range-section">
    <div class="package-box1 package-box">
        <div class="package-box-content">
             <div id="package-box-heading">
                <h1>France</h1>
            </div> 
            <div id="package-box-img" href="index.php" style="background-image: url(Images/packages/paris-img.jpg);"></div>
            <p>Duration : 13N/14D</p>
            <p>Cost per person : ₹2,96,852</p>
            <div class="packageLandmark">
                <p>Landmarks:</p>
                <a href="/agnethon/info-pack/france.php"><button class="packageBtn" >Panormic View</button></a>
                <a href="/agnethon/info-pack/france.php"><button class="packageBtn" >UNESCO sites</button></a>
                <a href="/agnethon/info-pack/france.php"><button class="packageBtn" >Iconic Landmarks</button></a>
            </div>
    </div>
    </div>
    <div class="package-box1 package-box">
        <div class="package-box-content">
             <div id="package-box-heading">
                <h1>England</h1>
            </div> 
            <div id="package-box-img" style="background-image: url(Images/packages/london-img.jpg);"></div>
            <p>Duration : 11N/10D</p>
            <p>Cost per person : ₹2,51,688</p>
            <div class="packageLandmark">
                <p>Landmarks:</p>
                <a href="/agnethon/info-pack/england.php"><button class="packageBtn" >Museum</button></a>
                <a href="/agnethon/info-pack/england.php"><button class="packageBtn" >Art Gallery</button></a>
                <a href="/agnethon/info-pack/england.php"><button class="packageBtn" >British Parliament</button></a>
            </div>
    </div>
    </div>
    <div class="package-box1 package-box">
        <div class="package-box-content">
             <div id="package-box-heading">
                <h1>Italy</h1>
            </div> 
            <div id="package-box-img" style="background-image: url(Images/packages/italy-img.webp);"></div>
            <p>Duration : 14N/13D</p>
            <p>Cost per person : ₹2,31,349</p>
            <div class="packageLandmark">
                <p>Landmarks:</p>
                <a href="/agnethon/info-pack/italy.php"><button class="packageBtn" >Colloseum's</button></a>
                <a href="/agnethon/info-pack/italy.php"><button class="packageBtn" >Castels</button></a>
                <a href="/agnethon/info-pack/italy.php"><button class="packageBtn" >Historical Landmarks</button></a>
            </div>
    </div>
    </div>
</div>

<div id="see-more">
<a href="package.php"><button id="see_more_btn">Click for more exciting packages</button></a>
</div>

<div id="package-range">
    <h2>Domestic Packages</h2>
</div>
<div class="package-range-section">
    <div class="package-box1 package-box">
        <div class="package-box-content">
             <div id="package-box-heading">
                <h1>Kerala</h1>
            </div> 
            <div id="package-box-img" style="background-image: url(Images/packages/kerala-img1.jpg);"></div>
            <p>Duration : 12D/11N</p>
            <p>Cost per person : ₹44,970</p>
            <div class="packageLandmark">
                <p>Landmarks:</p>
                <a href="/agnethon/info-pack/kerala.php"><button class="packageBtn" >Houseboats</button></a>
                <a href="/agnethon/info-pack/kerala.php"><button class="packageBtn" >Trekking</button></a>
                <a href="/agnethon/info-pack/kerala.php"><button class="packageBtn" >National Park</button></a>
            </div>
    </div>
    </div>
    <div class="package-box1 package-box">
        <div class="package-box-content">
             <div id="package-box-heading">
                <h1>Rajasthan</h1>
            </div> 
            <div id="package-box-img" style="background-image: url(Images/packages/rajasthan-img.jpg);"></div>
            <p>Duration : 8D/7N</p>
            <p>Cost per person : ₹37,890</p>
            <div class="packageLandmark">
                <p>Landmarks:</p>
                <a href="/agnethon/info-pack/rajasthan.php"><button class="packageBtn" >Historic Fort</button></a>
                <a href="/agnethon/info-pack/rajasthan.php"><button class="packageBtn" >Camel Safaris</button></a>
                <a href="/agnethon/info-pack/rajasthan.php"><button class="packageBtn" >Palaces</button></a>
            </div>
    </div>
    </div>
    <div class="package-box1 package-box">
        <div class="package-box-content">
             <div id="package-box-heading">
                <h1>Goa</h1>
            </div> 
            <div id="package-box-img" style="background-image: url(Images/packages/goa-img1.jpg);"></div>
            <p>Duration : 6D/6N</p>
            <p>Cost per person : ₹28,580</p>
            <div class="packageLandmark">
                <p>Landmarks:</p>
                <a href="/agnethon/info-pack/goa.php"><button class="packageBtn" >Beaches</button></a>
                <a href="/agnethon/info-pack/goa.php"><button class="packageBtn" >Churches</button></a>
                <a href="/agnethon/info-pack/goa.php"><button class="packageBtn" >Vibrant Nightlife</button></a>
            </div>
    </div>
    </div>
</div>
<div id="see-more">
<a href="index1.php"><button id="see_more_btn">Click for more exciting packages</button></a>
</div>

<!-- Package Section ends -->


    <!-- home about section starts -->
    <section class="home-about">

        <div class="image">
            <img src="./Images/about-us.jpg" alt="About Us ">
        </div>


        <div class="content">
            <h3>About Us</h3>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur est quas saepe, harum modi non optio
            sint, possimus maiores ratione deserunt iste voluptate provident sit tenetur molestias corporis praesentium
            doloribus, omnis cumque voluptatibus incidunt nam nostrum? Cupiditate tempore laudantium laboriosam!</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>
    <!-- home about section endss -->
<!-- Reviews section starts -->
<section class="reviews">

<div class="swiper reviews-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slider slide">

            <div class="stars">

                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>

            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolorem odit distinctio
                vero accusamus odio voluptate autem quas aliquid, quidem maxime totam officiis laborum cumque
                commodi omnis est. Ipsum, quam.
            </p>
            <h3>Amelia</h3>
            <span>Traveler</span>
            <img src="./Review Ppl Images/p1.jpg" alt="">

        </div>

        <div class="swiper-slider slide">

            <div class="stars">

                <!-- <i class="fas fa-star"> </i> -->
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>

            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolorem odit distinctio
                vero accusamus odio voluptate autem quas aliquid, quidem maxime totam officiis laborum cumque
                commodi omnis est. Ipsum, quam.
            </p>
            <h3>Gemma</h3>
            <span>Traveler</span>
            <img src="./Review Ppl Images/p2.jpg" alt="">
        </div>

        <div class="swiper-slider slide">

            <div class="stars">

                
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>

            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolorem odit distinctio
                vero accusamus odio voluptate autem quas aliquid, quidem maxime totam officiis laborum cumque
                commodi omnis est. Ipsum, quam.
            </p>
            <h3>Brandon</h3>
            <span>Traveler</span>
            <img src="./Review Ppl Images/p3.jpg" alt="">
        </div>

        <div class="swiper-slider slide">

            <div class="stars">

                <!-- <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i> -->
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>

            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolorem odit distinctio
                vero accusamus odio voluptate autem quas aliquid, quidem maxime totam officiis laborum cumque
                commodi omnis est. Ipsum, quam.
            </p>
            <h3>Steve Jon</h3>
            <span>Traveler</span>
            <img src="./Review Ppl Images/p4.jpg" alt="">
        </div>

        <div class="swiper-slider slide">

            <div class="stars">

          
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>

            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolorem odit distinctio
                vero accusamus odio voluptate autem quas aliquid, quidem maxime totam officiis laborum cumque
                commodi omnis est. Ipsum, quam.
            </p>
            <h3>Camilia</h3>
            <span>Traveler</span>
            <img src="./Review Ppl Images/p5.jpg" alt="">
        </div>


    </div>

</div>

</section>

<!-- Reviews section ends --> 

<!-- packages drop down section -->

<div id="selection">
    <label for="stateSelect">Select your state:</label>
    <select id="stateSelect" name="stateSelect">
        <option value="">Select...</option>
        <option value="Kerala">Kerala</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Goa">Goa</option>
    </select>

    <div id="keralaContent" class="hidden">
        <h2>Kerala Content</h2>
        <p>This content is specific to Kerala.</p>
        <a src="/agnethon/info-pack/kerala.php"><><button>click to view</button></a>
    </div>

    <div id="rajasthanContent" class="hidden">
        <h2>Rajasthan Content</h2>
        <p>This content is specific to Rajasthan.</p>
        <a src="/agnethon/info-pack/rajasthan.php"><><button>click to view</button></a>
    </div>

    <div id="GoaContent" class="hidden">
    <h2>Goa Content</h2>
        <p>This content is specific to Goa.</p>
        <a src="/agnethon/info-pack/goa.php"><><button>click to view</button></a>
    </div>

<script>
    document.getElementById("stateSelect").addEventListener("change", function() {
        var selectedState = this.value.trim();
        var keralaContent = document.getElementById("keralaContent");
        var rajasthanContent = document.getElementById("rajasthanContent");
        var GoaContent = document.getElementById("GoaContent");

        keralaContent.classList.add("hidden");
        rajasthanContent.classList.add("hidden");
        GoaContent.classList.add("hidden");

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
        }
    });
</script>
</div>
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


<!-- rgb(248 31 81)
rgb(248 31 81); -->