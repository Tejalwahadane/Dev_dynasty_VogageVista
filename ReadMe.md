Personalized AI-Driven Travel Suggestion Website

**Overview**

**Welcome to the Personalized Travel Suggestion Website! This part of
our project complements the mobile application by providing users with a
web-based interface to access personalized travel recommendations, plan
their trips, and explore exciting destinations. The website is designed
to be responsive, making it accessible across various devices.**

**Features**

**WEBSITE PART:**

**User Authentication: Secure user authentication and account creation
for a personalized experience.**

**Dashboard: A personalized dashboard displaying user recommendations,
recent trips, and upcoming plans.**

**Interactive Map: Explore destinations visually through an interactive
map with detailed markers and information.**

**Trip Planning: Plan and organize your trips directly from the website,
including itinerary creation and activity recommendations.**

**Responsive Design: Ensures a seamless user experience across desktops,
tablets, and mobile devices.**

**<img src="media/image1.jpg" style="width:6.925in;height:3.88958in" />**

**<img src="media/image2.jpg" style="width:6.925in;height:3.88958in" />**

# MODEL PART: 

**This project creates personalized travel plans based on user
preferences and budget.**

**Key functions:**

- **extract_info(data):**

  - Fetches essential details from a JSON file:

    - State
    - Location (optional)
    - Budget
    - Duration

  - Loads a state-specific CSV file containing travel information.

- **get_cost(duration, num_people, similar_places):**

  - Estimates trip cost within budget for a given duration.
  - Considers estimated expenses per person for recommended places.

- **display(place_index):**

  - Presents information about a recommended place:

    - Place name
    - Description
    - Activities
    - Rating
    - Reviews

- **vect(data):**

  - Identifies similar places based on descriptions:

    - Uses TF-IDF (Term Frequency-Inverse Document Frequency) for text
      analysis.
    - Calculates cosine similarity between place descriptions.

- **get_package():**

  - Orchestrates trip planning:

    - Extracts information from JSON input.
    - Finds similar places using text analysis.
    - Estimates cost and adjusts duration if needed.
    - Generates a detailed trip plan with estimated cost.
    - Saves the plan to a text file.

**Usage:**

1.  Install required libraries: *pip install ipynb numpy pandas sklearn
    nltk*
2.  Place CSV files for each state in the same directory as the code.
3.  Provide input in a JSON file named "web_output.txt".
4.  Run the code.

**Output:**

- A detailed trip plan in a text file, including:

  - Number of people
  - Budget
  - Estimated cost
  - Duration
  - Daily itinerary with places to visit, descriptions, activities,
    ratings, and reviews

<img src="media/image3.png" style="width:6.925in;height:3.90625in" />

**Getting Started**

**Prerequisites**

**MongoDB**

**React.js**

**Installation**

**Clone the repository: git clone
https://github.com/yourusername/travel-website.git**

**Install dependencies: npm install**

**Set up MongoDB and configure the database connection in config.js.**

**Start the website: npm start**

**Usage**

**Navigate to the website URL.**

**Sign in or create a user account.**

**Explore personalized recommendations on the dashboard.**

**Plan and organize your trips using the interactive features.**

**Enjoy a seamless and responsive web experience.**

**Contributing**

**We welcome contributions from the community. If you find any issues or
have ideas for improvements, feel free to submit a pull request or open
an issue in the repository.**
