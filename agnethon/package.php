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
    <link rel="stylesheet" href="../info-pack/infopack.css">
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
                <a href="package.php"><button class="packageBtn" >Panormic View</button></a>
                <a href="package.php"><button class="packageBtn" >UNESCO sites</button></a>
                <a href="package.php"><button class="packageBtn" >Iconic Landmarks</button></a>
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
                <a href="package.php"><button class="packageBtn" >Museum</button></a>
                <a href="package.php"><button class="packageBtn" >Art Gallery</button></a>
                <a href="package.php"><button class="packageBtn" >British Parliament</button></a>
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
                <a href="package.php"><button class="packageBtn" >Colloseum's</button></a>
                <a href="package.php"><button class="packageBtn" >Castels</button></a>
                <a href="package.php"><button class="packageBtn" >Historical Landmarks</button></a>
            </div>
    </div>
    </div>
</div>

<div id="package-range">
    <h2>Domestic Packages</h2>
</div>
<div class="package-range-section">
    <div class="package-box1 package-box">
        <div class="package-box-content">
             <div id="package-box-heading">
                <h1>kerala</h1>
            </div> 
            <div id="package-box-img" style="background-image: url(Images/packages/kerala-img1.jpg);"></div>
            <p>Duration : 12D/11N</p>
            <p>Cost per person : ₹44,970</p>
            <div class="packageLandmark">
                <p>Landmarks:</p>
                <a href="package.php"><button class="packageBtn" >Houseboats</button></a>
                <a href="package.php"><button class="packageBtn" >Trekking</button></a>
                <a href="package.php"><button class="packageBtn" >National Park</button></a>
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
                <a href="package.php"><button class="packageBtn" >Historic Fort</button></a>
                <a href="package.php"><button class="packageBtn" >Camel Safaris</button></a>
                <a href="package.php"><button class="packageBtn" >Palaces</button></a>
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
                <a href="package.php"><button class="packageBtn" >Beaches</button></a>
                <a href="package.php"><button class="packageBtn" >Churches</button></a>
                <a href="package.php"><button class="packageBtn" >Vibrant Nightlife</button></a>
            </div>
    </div>
    </div>
</div>
<?php include("partials/footer.php")?>