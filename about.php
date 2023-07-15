<style>
   .complete {
      padding-top: 50px;
      padding-right: 100px;
      padding-left: 100px;
   }

   .section {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
   }

   .section .content,
   .section .content2 {
      flex: 1;
      padding: 20px;
      font-family: "Open Sans", sans-serif; /* Change the font here */
      color: black;
   }
   

   .section .content h1,
   .section .content2 h1 {
      text-align: center;
   }

   .section .content p,
   .section .content2 p {
      padding: 20px;
      
      line-height: 40px;
      text-align: left; /* Adjusted alignment for the paragraph */
   }

   .section .content2 {
      font-weight: 400; /* Modify the font weight for content2 */
   }

   .section .image {
      flex: 1;
      text-align: center;
      position: relative;
   }

   .section .image img {
      width: 400px;
      margin: 0px;
      opacity: 1;
      transition: opacity 0.3s ease-in-out;
   }

   

   
   

   @media (max-width: 767px) {
      .section {
         flex-direction: column;
      }
      .complete {
      padding-top: 50px;
      padding-right: 10px;
      padding-left: 10px;
      }

      .section .content,
      .section .content2 {
         padding: 0;

      }
      .section .content2{
         display: block!important;
      }
      .section .content3{
         display: none!important;
      }
   }
   .section .content .social-icons {
   margin-top: 20px;
   display: flex;
   justify-content: center;
}

.section .content .social-icons a {
   font-size: 25px;
   color: black;
   margin-right: 30px; /* Adjust the margin value as needed */
   transition: all 0.3s ease-in-out;
}

.section .content .social-icons a:hover {
   color: purple; /* Change the color to purple */
    /*box-shadow: 0 0 5px 2px purple; Change the box-shadow color to purple */
   border-radius: 50%;
   transform: translateX(5px) translateY(-5px); /* Add the movement effect */
}



</style>
<div class="complete">

<!-- About Us Section 1 -->
<center>
<h1 style="padding-bottom:10px">About Us</h1>
</center>
<div class="section">
   <div class="image">
      <img src="<?php echo base_url()?>assets/img/brand/2.webp" alt="Image 1" class="background-image" style="width: 500px;">
   </div><br>
   <div class="content">
      <h3>The Global Scholarship</h3>
      <p>
      A Scholarship Portal That Connects You With the Right Scholarship, At the Right Time.
      Are you a student who is passionate about education and who is looking for financial assistance to help you achieve your goals? If so, then The Global Scholarship is the perfect place for you.
      We are a scholarship portal that is dedicated to helping students pursue their dreams of higher education by connecting them with the most suitable scholarships available. We understand that finding the right scholarship can be challenging and time-consuming, and that's why we're here to assist you on every step of the way.
      </p>
   </div>
   
</div>
<!-- About Us Section 5 -->

<div class="section">

   
   <div class="content">
      <h3>Vision & Mission</h3>
      <p><b>Our Vision</b> <br>
Our vision is to provide financial support to 1 million students through scholarships, so that they can pursue their educational goals and achieve their full potential.

<br><b>Our Mission</b> <br>
We are on a mission to build the world’s largest student community, & help them with scholarships & more…
 <br>
</p>
   </div>
   <div class="image">
      <img src="<?php echo base_url()?>assets/img/brand/3.webp" alt="Image 4">
   </div><br>
   
</div>

<!-- About Us Section 2 -->

<div class="section">
   
   <div class="content2" style="display: none;">
      <div class="content">
      <h3>What We Do</h3>
      <p>We've built an intuitive online platform that allows students to create personalized profiles and receive scholarship recommendations based on their qualifications and interests. Our team of experts regularly updates our database with the latest scholarship opportunities, so you can be sure that you're not missing out on any valuable funding opportunities.</p>
   </div>
   </div>
   <div class="image">
      <img src="<?php echo base_url()?>assets/img/brand/1.webp" alt="Image 2" style="width: 500px;">
   </div><br>
   
   <div class="content">
      <div class="content3" >
      <h3>What We Do</h3>
      <p>We've built an intuitive online platform that allows students to create personalized profiles and receive scholarship recommendations based on their qualifications and interests. Our team of experts regularly updates our database with the latest scholarship opportunities, so you can be sure that you're not missing out on any valuable funding opportunities.</p>
   </div>
   </div>
   
</div>



<!-- About Us Section 4 -->
<div class="section">
   <div class="content">
      <h3>Benefits </h3>
      <p>•  Personalized scholarship recommendations: We will recommend scholarships that are a good fit for your qualifications and interests.
<br>•  Up-to-date scholarship listings: We regularly update our database with the latest scholarship opportunities. <br>
•  Expert guidance: Our team of experts is available to answer any questions you may have and guide you through the scholarship application process.
</p>
   </div>
   <div class="image">
      <img src="<?php echo base_url()?>assets/img/brand/5.webp" alt="Image 4">
   </div><br>
   
</div>


<!-- About Us Section 6 -->
<div class="section">
   <div class="content2" style="display: none;">
   <div class="content">
      <h3>Our Process</h3>
      <p><b>Our solution works as follows:</b> <br>
• A team of experts curates the available scholarships by cross-checking facts and reaching out to the concerned authorities. <br>
• The team segregates all the details required for students to fill out the application form. <br>
• The scholarships are then posted on our Automated scholarship portal, which automatically filters them to match student profiles. <br>
• Students are notified via message, email, and application notifications when there are scholarships that match their profiles. <br>
• We don't just stop there. We also help students through the application process by providing detailed application process videos & instant query resolution through our social media handles. <br>
• We notify students when the results are out. And a lot more…

 <br>
</p>
   </div>
</div>
   <div class="image">
      <img src="<?php echo base_url()?>assets/img/brand/7.webp" alt="Image 4" style="height: 400px;"><br>
   </div>
   <div class="content">
      <div class="content3" >
      <h3>Our Process</h3>
      <p><b>Our solution works as follows:</b> <br>
• A team of experts curates the available scholarships by cross-checking facts and reaching out to the concerned authorities. <br>
• The team segregates all the details required for students to fill out the application form. <br>
• The scholarships are then posted on our Automated scholarship portal, which automatically filters them to match student profiles. <br>
• Students are notified via message, email, and application notifications when there are scholarships that match their profiles. <br>
• We don't just stop there. We also help students through the application process by providing detailed application process videos & instant query resolution through our social media handles. <br>
• We notify students when the results are out. And a lot more…

 <br>
</p>
</div>
   </div>

</div>
<!-- About Us Section 6 -->
<div class="section">
    
   
  
   <div class="content">
      <h3>Milestones</h3>
      <p><b>The Global Scholarships: A Growing and Dynamic Organization</b> <br>
The Global Scholarships product was launched in 2020 with the mission of providing scholarships to talented students from around the world. The organization has grown rapidly in recent years, and it has now helped over 100,000 students to apply for relevant scholarships. <br>
•  2021: The Global Scholarships organization launches a new website. <br>
•  2022: The Global Scholarships organization initiates Social Media Campaigns. <br> 
•  2023: The Global Scholarships organization achieves its target of helping 100,000 students apply for relevant scholarships.


</p>
   </div>
   <div class="image">
      <img src="<?php echo base_url()?>assets/img/brand/4a.webp" alt="Image 4">
   </div><br>
    
   
</div>
<!-- Contact Us Section -->
<div class="section">
   <div class="content2" style="display: none;">
   <div class="content">
      
      <h3>Contact Us</h3>
      <p>
         For any inquiries or assistance, please feel free to reach out to us:
         <br>
         <b>Email:</b>
         <br><b>For Business:</b>
         <a href="mailto:business@triwits.com">business@triwits.com</a>
         <br><b>For student:</b>
         <a href="mailto:support@theglobalscholarship.org">support@theglobalscholarship.org</a>
      </p>
      <div class="social-icons">
         <a href="https://www.instagram.com/the_global_scholarship/" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
         <a href="https://www.youtube.com/c/theglobalscholarshiporg" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube-play"></i></a>
         <a href="https://t.me/theglobalscholarship" target="_blank" rel="noopener noreferrer"><i class="fa fa-telegram"></i></a>
         <a href="https://www.facebook.com/theglobalscholarship/" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
      </div>
   </div>
</div>
   <div class="image">
      <img src="<?php echo base_url()?>assets/img/brand/7.webp" alt="Image 4" style="height: 400px;"><br>
   </div>
   <div class="content">
      <div class="content3" >
      <h3>Contact Us</h3>
      <p>
         For any inquiries or assistance, please feel free to reach out to us:
         <br><b>For Students:</b>
         <a href="mailto:support@theglobalscholarship.org">support@theglobalscholarship.org</a>
         <br><b>For Business:</b>
         <a href="mailto:business@triwits.com">business@triwits.com</a>
         
      </p>
      <div class="social-icons">
         <a href="https://www.instagram.com/the_global_scholarship/" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
         <a href="https://www.youtube.com/c/theglobalscholarshiporg" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube-play"></i></a>
         <a href="https://t.me/theglobalscholarship" target="_blank" rel="noopener noreferrer"><i class="fa fa-telegram"></i></a>
         <a href="https://www.facebook.com/theglobalscholarship/" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
      </div>
   </div>
</div>
</div>
</div>
</div>
