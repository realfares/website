<?php 
    include 'header.php'; ?> <!-- Modular header -->
    <?php  include 'form_handler.php';?> 
    <main>
    <section class="contact-container">
        <div class="contact-card">
            <div class="contact-text">
                <h1>Contact Us</h1>
                <p>Have any questions or feedback? Feel free to reach out to us. We'd love to hear from you!</p>
                <p>Email us at: <a href="mailto:info@wondersofsur.com">info@wondersofmuttrah.com</a></p>
                <p>Call us: <a href="tel:+96878922497">+968 123 456 78</a></p>
            </div>
            <div class="contact-form">
                <form action="form_handler.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Your Email Address" required>
                    </div>
                    <div class="form-group">
                        <label for="phonenumber">Phone Number</label>
                        <input type="phonenumber" name="phonenumber"id="phonenumber" placeholder="Write your phone number..."  required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Write your message..." rows="6" required></textarea>
                    </div>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    <div class="ministry-details">
    <h2>Ministry Contact Details</h2>
    <p><strong>Address:</strong> Ministry of Tourism, P.O. Box 114, Sur, Sultanate of Oman, Postal Code: 110</p>
    <p><strong>Phone:</strong> (968) 79090917</p>
    <p><strong>Email:</strong> info@ministry-sur.om</p>
    <p><strong>Office Locations:</strong></p>
    <ul>
      <li>Main Office: Sur Corniche</li>
      <li>Branch Office:Dhow yard, sur, Oman</li>
    </ul>
  </div>
 
  <!-- Map Container -->
  <div class="map-container">
    <h2>Find Us Here</h2>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.835434556892!2d58.56512331531974!3d23.59817368467396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e9fdf00e21f79df%3A0x830ae8b2394d69cd!2sMuttrah%20Corniche!5e0!3m2!1sen!2som!4v1679483834240!5m2!1sen!2som"
      width="100%"
      height="400"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>
<?php
     include 'footer.php'; ?>
</main>
<style>
   
/* Contact Container */
.contact-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
    background: url(7\ DAYS\ OMAN\ ITINERARY\ -\ Best\ places\ to\ visit\ in\ Oman\ -\ Bonjour\ Sunset.jpeg);/* Subtle gradient */
}
 
/* Contact Card */
.contact-card {
    display: flex;
    flex-wrap: wrap;
    max-width: 500px;
    background: transparent;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);
    gap: 30px;
    color: #FFFFFF; /* White text for readability */
}
 
/* Contact Text Section */
.contact-text {
    flex: 1 1 40%; /* Flexible width */
    text-align: center;
    line-height: 1.8;
}
 
.contact-text h1 {
    font-size: 3.5rem;
    margin-bottom: 20px;
    font-family: 'Merriweather', serif;
    color:rgb(2, 44, 18); /* Gold */
    text-align: center;
    box-shadow: #000;
}
 
.contact-text p {
    padding: 5px;
    margin-bottom: 15px;
    font-size: 1.5rem;
    color:rgb(6, 70, 31);
    box-shadow: #000; 
    font-family: 'Merriweather', serif;
    font-weight: bold;


}
 
.contact-text a {
    color:rgb(2, 51, 21); 
    text-decoration: none;
    font-weight: bold;
}
 
.contact-text a:hover {
    color: black; /* White hover effect */
    text-decoration: underline;
}
 
/* Contact Form Section */
.contact-form {
    flex: 1 1 55%; /* Flexible width */ 
}
 
form {
    display: flex;
    flex-direction: column;
    gap: 20px; /* Space between inputs */
}
 
.form-group label {
    font-size: 0.9rem;
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
}
 
form input, form textarea {
    width: 100%;
    padding: 15px;
    font-size: 1rem;
    background: whitesmoke; 
    color:#117236;
    border: 1px solid #117236; 
    border-radius: 10px;
    outline: none;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}
 
form input:focus, form textarea:focus {
    border-color: #FFFFFF; /* White border on focus */
    box-shadow: 0 0 10px #117236; /* Gold glow */
}
 
/* Submit Button */
form button {
    padding: 15px;
    font-size: 1.1rem;
    font-weight: bold;
    color: white;
    background:#117236 ; 
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: transform 0.3s ease, background 0.3s ease;
}
 
form button:hover {
    background: #FFFFFF; /* White background on hover */
    color: #000; /* Black text */
    transform: translateY(-5px); /* Subtle lift effect */
}
 
/* Responsive Design */
@media (max-width: 768px) {
    .contact-card {
        flex-direction: column;
        text-align: center;
    }
 
    .contact-text, .contact-form {
        flex: 1 1 100%; /* Full width */
    }
}
/* Logo and social icons */
.logo-and-social {
    display: flex;
    align-items: center;
}
 
.logo {
    width: 90px; /* Adjust logo size */
    margin-right: 20px;
}
 
.social-icons a {
    margin-right: 15px;
    display: inline-block;
}
 
.social-icons img {
    width: 30px; /* Size of social media icons */
    height: 30px;
}
 
/* Navigation styles */
.nav a {
    margin: 0 15px;
    text-decoration: none;
    color: #117236; /* Gold color */
    font-size: 16px;
}
 
.nav a:hover {
    text-decoration: underline;
}
/* General Styles */
body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
  background-color: whitesmoke; 
  color: #117236; 
}
 
/* Container Styles */
.contact-us-section {
  display: flex;
  flex-wrap: wrap;
  padding: 20px;
  gap: 20px;
}
 
.ministry-details, .map-container {
  flex: 1 1 45%;
  background:rgb(236, 232, 232); /* Slightly lighter black for contrast */
  padding: 20px;
  border: 1px solid #117236; /* Gold Border */
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(6, 71, 6, 0.3); /* Subtle Gold Shadow */
}
 
/* Header Styles */
h2 {
  color:#117236; /* Gold Header Text */
  border-bottom: 2px solid #117236;
  padding-bottom: 10px;
  margin-bottom: 20px;
  font-size: 24px;
}
 
/* Text Styles */
p, ul, li {
  color: #117236;
  line-height: 1.6;
}
 
/* List Style */
.ministry-details ul {
  list-style-type: disc;
  margin-left: 20px;
}
 
.ministry-details ul li {
  margin: 10px 0;
}
 
/* Map Styling */
.map-container iframe {
  border: 2px solid #117236; /* Gold Border */
  border-radius: 8px;
  width: 100%;
  height: 400px;
}
 
/* Button Styles (if needed) */
button {
  background-color:#117236;
  color: whitesmoke;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
  text-transform: uppercase;
}
 
button:hover {
  background-color: #117236; /* Darker Gold */
}
 
/* Responsive Design */
@media (max-width: 768px) {
  .contact-us-section {
    flex-direction: column;
  }
 
  .ministry-details, .map-container {
    flex: 1 1 100%;
  }
}
 
 
</style>
 
</main>