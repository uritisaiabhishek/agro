<?php require_once 'includes/header.inc.php'; ?>
<!--banner-->
<section class="i-banner">
   <div class="container-fluid">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-12">
               <h1><span>Contact Us</span></h1>
               <div class="breadcrumb-banner">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="page">
   <div class="container-fluid">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="contact-form">
                  <form method="post" action="includes/contact.inc.php">
                     <div class="form-row">
                        <div class="col-md-6 col-12">
                           <!--<label class="col-full">First Name<span class="star">*</span></label>-->
                           <input type="text" class="form-control" placeholder="First Name*" required name="fname" pattern="[A-Z a-z]{4,32}" title="The first name must be at least 4 characters.">
                        </div>
                        <div class="col-md-6 col-12">
                           <!--<label class="col-full">Last Name<span class="star">*</span></label>-->
                           <input type="text" class="form-control" placeholder="Last Name*" required name="lname">
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-md-6 col-12">
                           <!--<label class="col-full">Email Address<span class="star">*</span></label>-->
                           <input type="text" class="form-control" placeholder="Email*" required name="email">
                        </div>
                        <div class="col-md-6 col-12">
                           <!--<label class="col-full">Phone / Mobile Number<span class="star">*</span></label>-->
                           <input type="text" class="form-control" placeholder="Number*" required name="phone" pattern="[1-9]{1}[0-9]{7,9}">
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-md-12 col-12">
                           <!--<label class="col-full">Your Message</label>                -->
                           <textarea class="form-control" name="message"placeholder="message*" rows="3" name="message"></textarea>
                        </div>
                     </div>
                     <div class="read-more-btn-view"> 
                        <button id="redirectbutton" class="read-more-btn" type="submit" name="contact">Submit</button> 
                     </div>
                     
                  </form>
               </div>
            </div>
            <div class="col-md-5">
               <div class="contact-deatils-inner">
                  <h2 class="heading-page">
                     <span>How to Contact</span>
                  </h2>
                  <div class="contact-address">
                     <div class="adddress">
                        <span><i class="la la-map-marker"></i></span>
                        <p>Head Office : J-71, Ashok Chowk, Adarsh Nagar,<br> Jaipur – 302004 (Rajasthan) INDIA</p>
                     </div>
                     <div class="adddress">
                        <span><i class="la la-phone"></i></span>
                        <p>(+91) 141 – 2600525 </p>
                        <p style="margin:-4px 0 0 0;">(+91) 141 – 4020690</p>
                     </div>
                     <div class="adddress">
                        <span><i class="la la-envelope"></i></span>
                        <p class="w-100"><strong>Domestic Enquiries:</strong> &nbsp;<a href="mailto:shivam@jaipurbiofertilizer.com">shivam@jaipurbiofertilizer.com </a></p>
                        <p style="margin:-8px 0 0 0;" class="w-100"><strong>Export Enquiries:</strong> &nbsp;<a href="mailto:sanchali@jaipurbiofertilizer.com">sanchali@jaipurbiofertilizer.com </a></p>
                     </div>
                     <h2 class="heading-page">
                        <span>Brochures</span>
                     </h2>
                     <div class="brochures-list">
                        <ul>
                           <li><a href="assets/img/pdf/Brochure_Jaipur%20Bio%20Fertilizers_India.pdf" target="_blank"><i class="las la-file-download"></i> Sharada Agro Industries Brochure</a></li>
                           <li><a href="assets/img/pdf/Biological_Products_Jaipur_Bio_Fertilizers.pdf" target="_blank"><i class="las la-file-download"></i> Biological Products_Sharada Agro Industries</a></li>
                           <li><a href="assets/img/pdf/Broucher_SC_Concentrates_Speciality_Fertilizers.pdf" target="_blank"><i class="las la-file-download"></i> Broucher_SC Concentrates & Speciality Fertilizers</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.948951575814!2d75.82590421501929!3d26.905115166894216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db6bf6fffff97%3A0x2dc887d83171109!2sJaipur%20Bio%20Fertilizers!5e0!3m2!1sen!2sin!4v1574864203430!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
   </div>
</section>
<?php require_once 'includes/footer.inc.php'; ?>