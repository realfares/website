<?php
 include 'header.php'; ?> <!-- Modular header -->
 <section class="hero">
        <video autoplay muted loop class="hero-video">
            <source src="1734657855772.publer.io.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        <h2>Discover the Charm of Sur</h2>
        <p>A picturesque coastal city filled with history, beauty, and adventure.</p>
        <a href="#things-to-do" class="btn-primary">Explore Now</a>
    </section>
<style>
    .hero{
    text-align: center;
    margin-bottom: 60px;
    height: 50vh;
    width: 100%;
    object-fit: cover;}

.hero-video {
    position: absolute;
    width: 100%;
    height: 70%;
    object-fit: cover; /* Ensures the video covers the entire section */
    z-index: -1;
}
ul{
    color: wheat;
}
p {
    color: wheat;
}
h2 {
    color: wheat;
    text-align: center;
}



</style>


<section class="gallery-im">
        <div class="gallery-text">
            <h2>Transportation in sur </h2>
        </div>

        <div class="image-grid">
            <img class="image-grid-col-2  image-grid-row-2" src="farries.jpg" alt="art">
            <img src="mwaslat.jpeg" alt="art">
            <img src="women otaxi.jpg" alt="art">
            <img src="mwaslat.PNG" alt="art">
            <img src="farrires.PNG" alt="art">
        </div>

    </section>






    <!-- Main Content -->
    <main class="transport-container">
        <h1>Transportation Options in Sur</h1>

        <!-- Section: Local Buses -->
        <section id="buses">
            <h2>Local Buses</h2>
            <p>Sur has a reliable bus service operated by <a href="https://mwasalat.om/ar/Index.aspx" style="color: red;"> Mwasalat </a>, connecting key areas within the town and nearby villages.</p>
            <div class="media-container">
                <img src="mwaslat.jpeg" alt="Local Buses in Sur" class="media-image">
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th>Route</th>
                            <th>Schedule</th>
                            <th>Fare (OMR)</th>
                            <th>Stops</th>
                        </tr>
                    </thead>
                    <tbody>

                            <td>Sur to Muscat</td>
                            <td>Daily: 7:00 AM, 5:00 PM</td>
                            <td>5 OMR</td>
                            <td>Sur Bus Station - Muscat Central</td>
              
                        <tr>
                            <td>Sur to Ras al Hadd</td>
                            <td>Hourly: 8:00 AM - 6:00 PM</td>
                            <td>1 OMR</td>
                            <td>Sur Bus Station - Ras al Hadd</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Section: Taxis -->
        <section id="taxis">
            <h2>Taxis</h2>
            <p>Local taxis are an easy way to explore Sur. You can find taxis at key locations like the bus station, hotels, and markets.</p>
            <ul class="fare-details">
                <li>Base fare: 0.5 OMR</li>
                <li>Rate per kilometer: 0.2 OMR</li>
                <li>Apps: <a href="https://otaxi.com" target="_blank" style="color: orangered;">OTaxi</a> for pre-booked rides.</li>
            </ul>
            <img src="otaxi.jpeg" alt="Taxis in Sur" class="media-image">
        </section>

        <!-- Section: Coastal Ferries and Boats -->
        <section id="ferries">
            <h2>Coastal Ferries & Boats</h2>
            <p>Sur is famous for its dhow boats and coastal ferries. Visitors can take guided boat tours to explore the coastal beauty of Sur and nearby islands.get your boats and coastal ferries giud with <a href="https://nfc.mwasalat.om/home" style="color: red;"> mwasalat </p>
            <div class="media-container">
                <img src="farriers.jpeg" alt="Coastal Boats in Sur" class="media-image">
                <ul class="fare-details">
                    <li>Sur to Ras al Hadd Coastal Tour: <strong>Starting from 10 OMR</strong></li>
                    <li>Private dhow tours: Prices vary by duration (starting at 30 OMR).</li>
                    <li>Booking: Local tour operators near the harbor.</li>
                </ul>
            </div>
        </section>

        <!-- Section: Cycling in Sur -->
        <section id="cycling">
            <h2>Cycling Routes</h2>
            <p>Explore Sur’s scenic beauty on two wheels! Popular cycling routes include coastal paths and village trails.</p>
            <ul class="fare-details">
                <li>Sur Coastal Path: 5 km easy ride</li>
                <li>Sur to Al Ayjah Village: Moderate 10 km ride</li>
            </ul>
            <img src="Cycling Routes.jpeg" alt="Cycling in Sur" class="media-image">
        </section>

        <!-- Section: Travel Tips -->
        <section id="travel-tips">
            <h2>Travel Tips</h2>
            <p>Helpful tips to ensure a smooth journey around Sur:</p>
            <ul class="travel-tips-list">
                <li>Taxis may not always use meters, so agree on fares beforehand.</li>
                <li>Boat tours are best booked early in the morning for calmer waters.</li>
                <li>Bring cash for local buses, taxis, and small vendors.</li>
                <li>Renting a bicycle can be a great way to explore the town’s coastline.</li>
            </ul>
        </section>
    </main>
      <style>
      section {
        margin-top: 30px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 20px;
    }</style>
    <?php
     include 'footer.php'; ?> <!-- Modular footer -->
</body>
</html>