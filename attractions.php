<?php 
    include 'header.php'; ?> <!-- Modular header -->

<style>
/* Parent Container */
.souq-cards-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px; /* Space between cards */
  justify-content: center; /* Center-align the cards */
}

/* Souq Card */
.souq-card {
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  max-width: 300px; /* Set a fixed width for cards */
  flex: 1 1 calc(33.33% - 20px); /* Make cards flexible for a 3-column layout */
  overflow: hidden;
  font-family: Arial, sans-serif;
}

/* Souq Card Image */
.souq-card-image {
  position: relative;
  width: 100%;
  height: 200px;
}

.souq-card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-bottom: 1px solid #ccc;
}

.souq-card-category {
  position: absolute;
  top: 10px;
  right: 10px;
  background-color: #8a2be2;
  color: white;
  padding: 5px 10px;
  border-radius: 15px;
  font-size: 14px;
}

/* Souq Card Body */
.souq-card-body {
  padding: 15px;
}

.souq-card-header {
  margin-bottom: 10px;
}

.souq-title {
  font-size: 18px;
  margin: 0;
  color: wheat;
}

.souq-reviews {
  font-size: 14px;
  color: wheat;
  margin: 5px 0 0;
}

.souq-location {
  font-size: 14px;
  color:wheat;
  margin-bottom: 10px;
}

.souq-description {
  font-size: 14px;
  color: wheat;
  line-height: 1.4;
}

.souq-verification {
  margin-top: 10px;
}

.souq-verification-badge {
  background-color: #28a745;
  color: white;
  padding: 5px 10px;
  border-radius: 15px;
  font-size: 12px;
}

/* Star Rating */
.souq-rating {
  color: #f4c150;
}
.shooping h2{
    font-size: 2.5em;
    margin: 0 0 10px;
    position:central;
    font-weight: bold;
    text-align: center;
    z-index: 2;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    color: white;  
}
</style>
    
    
    <section class="hero">
            <video autoplay muted loop class="hero-video">
              <source src="t-rf-m-n-l-jml-wly-swr-fy-sltn-mn-1080-publer.io.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
        <h2>Discover the Charm of Sur</h2>
        <p>A picturesque coastal city filled with history, beauty, and adventure.</p>
        <a href="#things-to-do" class="button">Explore Now</a>
    </section>

    <section class="icon-grid">
        <div class="icon-card green-1">
            <i class="fas fa-hotel"></i>
            <a href="#Hotel-And-Resorts"class="1">Hotel And Resorts</a>
        </div>
    
        <div class="icon-card green-3">
            <i class="fas fa-utensils"></i>
            <a href="#landmarks">Restaurants</a>
            
        </div>
        <div class="icon-card green-4">
            <i class="fas fa-map-signs"></i>
            <a href="#Attractions">Attractions</a>
        </div>

        <div class="icon-card green-6">
            <i class="fas fa-shopping-cart"></i>
            <a href="#shopping">Shopping</a>
        </div>
        <div class="icon-card green-7">
            <i class="fas fa-user-md"></i>
            <a href="#Medical"></a><p>Medical </p></a>
        </div>
        <div class="icon-card green-8">
            <i class="fas fa-map-signs"></i>
            <a href="#itinerary">plan for 5days</a>
        </div>
    </section>







   <section><h2 class= hotels>Things to Do in Sur</h2></section>

    <div class="Hotel-And-Resorts" id="Hotel-And-Resorts">
        <div class="hotel-image">
            <img src="sur hotel.jpg" alt="Sur Hotel">
        </div>
        <div class="hotel-details">
            <div class="hotel-header">
                <span class="category">Hotel And Resorts</span>
                <div class="rating">
                    ⭐⭐⭐⭐⭐ <span>(0 Reviews)</span>
                </div>
            </div>
            <h2>Sur Hotel</h2>
            <p class="hotel-location">
                📍 HG9G+CJ Sur, Sur, Sharqiyah South, Oman
            </p>
            <p class="hotel-description">
                Sur Hotel is located in the heart of the city of Sur, specifically in the commercial market. 
                What distinguishes the hotel is its proximity to Naama Beach and the old commercial market. 
                It also facilitates the hotel’s residents’ access to all services due to its strategic location.
            </p>
            <div class="verified">
                ✅ Verified
            </div>
        </div>
    </div>
    </section>
    <div class="Hotel-And-Resorts">
        <div class="hotel-image">
            <img src="Ras Al Jinz Turtle reserve resort.jpg" alt="Ras Al Jinz Turtle Reserve">
        </div>
        <div class="hotel-details">
            <div class="hotel-header">
                <span class="category">Hotel And Resorts</span>
                <div class="rating">
                    ⭐⭐⭐⭐⭐ <span>(0 Reviews)</span>
                </div>
            </div>
            <h2>Sur Hotel</h2>
            <p class="hotel-location">
                CRGG+6W راس الحد, Sur, Sharqiyah South , Oman            </p>
            <p class="hotel-description">
                Ras Al Jinz Turtle Reserve    </p>
            <div class="verified">
                ✅ Verified
            </div>
        </div>
    </div>
    <div class="Hotel-And-Resorts">
        <div class="hotel-image">
            <img src="Sur Inn Hotel Apartments.jpg" alt="Sur Inn Hotel Apartments">
        </div>
        <div class="hotel-details">
            <div class="hotel-header">
                <span class="category">Hotel And Resorts</span>
                <div class="rating">
                    ⭐⭐⭐⭐⭐ <span>(0 Reviews)</span>
                </div>
            </div>
            <h2>Sur Inn Hotel Apartments</h2>
            <p class="hotel-location">
                📍 HF6F+JX Sur, Sur, Sharqiyah South , Oman
            </p>
            <p class="hotel-description">
                The units all have a seating area with a sofa, a satellite flat-screen TV, a fully equipped kitchenette, and a private bathroom with slippers and free toiletries. A fridge, a stove top, and kitchenware are also offered, as well as a kettle. At the condo hotel, the units include bed linen and towels.
            </p>
            <div class="verified">
                ✅ Verified
            </div>
        </div>
    </div>
    


















    <section id="Attractions"class=hotels>
    <h2>attractions in oman</h2>
    </section>

    
        <section class="attraction-card">
            <div class="images-section">
                <div class="image-large">
                    <img src="Dhow Yards-gg.jpeg" alt="Dhow Yard Large">
                </div>
                <div class="image-small">
                    <img src="Dhow-Yard-.png" alt="Dhow Yard Small">
                </div>
            </div>
            <div class="text-section">
                <h2>Discover Dhow Yard</h2>
                <p>
                Dhow Yards in Sur, Oman, is a testament to the city's maritime heritage and the historical importance of shipbuilding in the region. For centuries, these yards have been the center of dhow production, the traditional wooden vessels used throughout the Arabian Peninsula. Sur, once a bustling port and trading center, became renowned for its skilled craftsmen and sturdy, reliable ships. The construction of dhows is an intricate process, learned through generations, where artisans use age-old techniques and simple tools to shape the hulls, exemplifying Sur's ongoing cultural practices. Visitors can observe the painstaking work that goes into each vessel,                </p>
            </div>
        </section>

        <!-- Card 2 -->
        <section class="attraction-card">
            <div class="images-section">
                <div class="image-large">
                    <img src="Sur Maritime Museum5.jpg" alt=" Yard Large">
                </div>
                <div class="image-small">
                    <img src="Early 1900s Oil Painting on Cardboard - Maritime Scene with French Flagged Ship.jpeg" alt="Dhow Yard Small">
                </div>
            </div>
            <div class="text-section">
                <h2>Sur Maritime Museum</h2>
                <p>
                Sur Maritime Museum is located within the premises of Al Orouba Sports Club. It is a small building painted white featuring ship wheels on the wall. The major attraction of the museum includes old photography, wooden models, and maritime artefacts.
               Entry Free.
              is a small marine museum run by the local youth sports club in Sur               </p>
            </div>
            </section>
            <section class="attraction-card">
    
            <div class="images-section">
                <div class="image-large">
                    <img src="Wadi Shab.jpeg" alt="Dhow Yard Large">
                </div>
                <div class="image-small">
                    <img src="Wadi Shab Adventure.jpeg" alt="Dhow Yard Small">
                </div>
            </div>
            <div class="text-section">
                <h2>Discover Wadi Shab</h2>
                <p>
                    In Oman, traditional fishing boats are still produced at the dhow yards of Sur by craftsmen from memory, without plans or drawings. Building a dhow to completion takes between three and six months, depending on the size of the ship.
                </p>
            </div>
            </section>
        

            <section id="Ras Al Jinz" class="attraction-card">
            <div class="images-section">
                <div class="image-large">
                    <img src="7 DAYS OMAN ITINERARY - Best places to visit in Oman - Bonjour Sunset.jpeg" alt="Dhow Yard Large">
                </div>
                <div class="image-small">
                    <img src="download.jpeg" alt="Dhow Yard Small">
                </div>
            </div>
            <div class="text-section">
                <h2>Ras Al Jinz</h2>
                <p>
                ocated in Ras Al Jinz, the nesting site for green turtles, Ras Al jinz Turtle Reserve offers air-conditioned rooms and cottages with a flat-screen satellite TV. It offers a free private beach area.                </p>
            </div>
        </section>
    </section>



    































    
    <section id="landmarks" class="section">
        <h2>Famous Tourist Landmarks in Sur City</h2>
        <div class="landmark-grid">
            <div class="landmark-card">
                <img src="Sedrah Restaurant.png" alt="Landmark Image">
                <div class="landmark-card-actions">
                    <a href="#" class="save">Save</a>
                    <a href="#" class="preview">Preview</a>
                </div>
                <div class="landmark-card-content">
                    <h3>Sedrah Restaurant</h3>
                    <p>for tradtional food in modren way</p>
                </div>
                <div class="landmark-card-footer">
                    <span class="location">Sur</span>
                    <span class="status">Open Now~</span>
                </div>
            </div>
        
            <div class="landmark-card">
                <img src="ARIZONA.jpeg" alt="Landmark Image">
                <div class="landmark-card-actions">
                    <a href="#" class="save">Save</a>
                    <a href="#" class="preview">Preview</a>
                </div>
                <div class="landmark-card-content">
                    <h3>Arizona Luxury Art Club</h3>
                    <p>A Window of Art Spreading Love</p>
                </div>
                <div class="landmark-card-footer">
                    <span class="location">Sur</span>
                    <span class="status closed">Day Off!</span>
                </div>
            </div>
        
            <div class="landmark-card">
                <img src="zaki restaurant.png" alt="Landmark Image">
                <div class="landmark-card-actions">
                    <a href="#" class="save">Save</a>
                    <a href="#" class="preview">Preview</a>
                </div>
                <div class="landmark-card-content">
                    <h3>zaki reaturant </h3>
                    <p>Legendary sushi maestro in your town</p>
                </div>
                <div class="landmark-card-footer">
                    <span class="location">Sur</span>
                    <span class="status">Open Now~</span>
                </div>
            </div>
        </div>
    </section> 
    <section class= "shopping" id="shopping">
  <h2>Shopping in Sur</h2>
  <div class="souq-cards-container">
    <div class="souq-card">
      <div class="souq-card-image">
        <img src="sur souqe.jpeg" alt="Sur Traditional Souq">
        <div class="souq-card-category">Shopping</div>
      </div>
      <div class="souq-card-body">
        <div class="souq-card-header">
          <h3 class="souq-title">Sur Traditional Souq</h3>
          <p class="souq-reviews"><span class="souq-rating">★★★★★</span> (0 Reviews)</p>
        </div>
        <p class="souq-location"><i class="fas fa-map-marker-alt"></i> Gold Souq, Sur</p>
        <p class="souq-description">Sur Traditional Souq سوق صور التقليدي</p>
        <div class="souq-verification">
          <span class="souq-verification-badge">✔ Verified</span>
        </div>
      </div>
    </div>
    
    <div class="souq-card">
      <div class="souq-card-image">
        <img src="My City Centre Sur.jpg" alt="Sur Traditional Souq">
        <div class="souq-card-category">Shopping</div>
      </div>
      <div class="souq-card-body">
        <div class="souq-card-header">
          <h3 class="souq-title">My City Centre Sur</h3>
          <p class="souq-reviews"><span class="souq-rating">★★★★★</span> (0 Reviews)</p>
        </div>
        <p class="souq-location"><i class="fas fa-map-marker-alt"></i> HGG5+FG Sur, Sur, Sharqiyah South , Oman</p>
        <p class="souq-description">My City Centre Sur is set to become a key destination for both residents and the increasing number of tourists visiting nearby attractions.</p>
        <div class="souq-verification">
          <span class="souq-verification-badge">✔ Verified</span>
        </div>
      </div>
    </div>
    
    <div class="souq-card">
      <div class="souq-card-image">
        <img src="lulu hyper.jpg" alt="Sur Traditional Souq">
        <div class="souq-card-category">Shopping</div>
      </div>
      <div class="souq-card-body">
        <div class="souq-card-header">
          <h3 class="souq-title">Lulu Hypermarket - Sur</h3>
          <p class="souq-reviews"><span class="souq-rating">★★★★★</span> (0 Reviews)</p>
        </div>
        <p class="souq-location"><i class="fas fa-map-marker-alt"></i>  HCWQ+77 Sur, Sur, Sharqiyah South , Oman</p>
        <p class="souq-description">Lulu Hypermarket - Sur </p>
        <div class="souq-verification">
          <span class="souq-verification-badge">✔ Verified</span>
        </div>
      </div>
    </div>
  </div>
</section>



    <!-- 5-Day Itinerary Section -->
    <section id="itinerary" class="section">
    <h2>5-Day Itinerary for Exploring Sur City</h2>
    <div class="itinerary">
        <!-- Day 1 -->
        <div class="day">
            <img src="Sur City Arrival.jpeg" alt="Sur City Arrival">
            <h3>Day 1: Arrival in Sur</h3>
            <ul>
                <li>Visit: Sur Maritime Museum, Al Ayjah Lighthouse</li>
                <li>Dine: Al Hawash Restaurant (Omani seafood specialties)</li>
                <li>Stay: Sur Grand Hotel</li>
            </ul>
        </div>
        <!-- Day 2 -->
        <div class="day">
            <img src="Dhow Yard and Beaches.jpeg" alt="Dhow Yard and Beaches">
            <h3>Day 2: Traditional Dhow Yard and Beaches</h3>
            <ul>
                <li>Visit: Dhow Yard, Fins Beach</li>
                <li>Dine: Beachfront café near Fins</li>
                <li>Stay: Turtle Beach Resort</li>
            </ul>
        </div>
        <!-- Day 3 -->
        <div class="day">
            <img src="Wadi Shab Adventure.jpeg" alt="Wadi Shab Adventure">
            <h3>Day 3: Wadi Shab Adventure</h3>
            <ul>
                <li>Visit: Wadi Shab and Tiwi Beach</li>
                <li>Dine: Picnic or packed lunch during the adventure</li>
                <li>Stay: Hotel Sur Plaza</li>
            </ul>
        </div>
        <!-- Day 4 -->
        <div class="day">
            <img src="Ras Al Jinz Eco-Lodge.jpeg" alt="Ras Al Jinz Turtle Watching">
            <h3>Day 4: Ras Al Jinz Turtle Watching</h3>
            <ul>
                <li>Visit: Ras Al Jinz Turtle Reserve, Ras Al Hadd</li>
                <li>Dine: Eco-resort dining experience</li>
                <li>Stay: Ras Al Jinz Eco-Lodge</li>
            </ul>
        </div>
        <!-- Day 5 -->
        <div class="day">
            <img src="Al Ayjah Bridge.jpeg" alt="Relax in Sur City">
            <h3>Day 5: Relax and Departure</h3>
            <ul>
                <li>Visit: Corniche Walk, Al Ayjah Bridge</li>
                <li>Dine: Local café with traditional Omani coffee</li>
                <li>Stay: Optional extended stay in Sur</li>
            </ul>
        </div>
    </div>
</section>


    
  <section>
    
    <div class="container-attractions">
      
        <div class="panel active" style="background-image: url(download\ \(11\).jpeg) ;">
            <h1>expanding cards</h1>
        </div>
        <div class="panel " style="background-image: url(Omani\ Faces.jpeg) ;">
            <h1>expanding cards</h1>
        </div>
        <div class="panel " style="background-image: url(Sur\ Maritime\ Museum4.jpg) ;">
            <h1>expanding cards</h1>
        </div>  
        <div class="panel " style="background-image: url(Scuba\ Diving.jpeg) ;">
            <h1>expanding cards</h1>
        </div>
        <div class="panel " style="background-image: url(al-ayjah.jpg) ;">
            <h1>expanding cards</h1>
        </div> 
        <div class="panel " style="background-image: url(OMAN\ \(1\).jpeg) ;">
            <h1>expanding cards</h1>
        </div>
    
      </div>
      <script>
        const panels = document.querySelectorAll(".panel");
    
        panels.forEach((panel) => {
            panel.addEventListener("click",() => {
                removeActiveClasses();
                panel.classList.add("active");
            });
    
        });
    
        function removeActiveClasses() {
            panels.forEach((panel) => {
                panel.classList.remove("active");
            });
        }
      </script>  
  </section>
   

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Oman Tourism. All rights reserved.</p>
    </footer>
</body>
</html>
    <?php
     include 'footer.php'; ?> <!-- Modular footer -->
</body>
</html>
