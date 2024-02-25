<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Show HTML Based on State Name</title>
<link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body>
<label for="stateSelect">Select your state:</label>
<select id="stateSelect" name="stateSelect">
    <option value="">Select...</option>
    <option value="Kerala">Kerala</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Goa">Goa</option>
    <!-- Add more options as needed -->
</select>

<div id="keralaContent" class="hidden">
    <h2>New York Content</h2>
    <p>This content is specific to New York.</p>
    <div id="services">
          <div class="box">
              <img src="images/catering-img.jpg" alt="">
              <h2 class="h-secondary center">Food Catering</h2>
              <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et qui, repudiandae similique nam, recusandae quidem ab asperiores ex, aut fugit labore veritatis facere?
                  sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                  voluptas beatae facilis labore, omnis sint quae eum.</p>
          </div>
          <div class="box">
              <img src="images/bulk-img.jpeg" alt="">
              <h2 class="h-secondary center">Bulk Ordering</h2>
              <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

                  sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                  voluptas beatae facilis labore, omnis sint quae eum.</p>
          </div>
          <div class="box">
              <img src="delivery-image.avif" alt="">
              <h2 class="h-secondary center">Food Ordering</h2>
              <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus provident fugiat aliquam minima at explicabo. Earum eveniet quaerat, sunt molestias nesciunt quas! Quis.
                  sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                  voluptas beatae facilis labore, omnis sint quae eum.</p>
          </div>
      </div>
</div>

<div id="rajasthanContent" class="hidden">
    <h2>California Content</h2>
    <p>This content is specific to California.</p>
</div>

<div id="GoaContent" class="hidden">
    <h2>Texas Content</h2>
    <p>This content is specific to Texas.</p>
</div>

<script>
    // JavaScript to show/hide content based on state selection
    document.getElementById("stateSelect").addEventListener("change", function() {
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
</body>
</html>