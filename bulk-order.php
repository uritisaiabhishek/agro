<?php require_once 'includes/header.inc.php'; ?>

<!--banner-->

<section class="i-banner">

  <div class="container-fluid">

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-12">

          <h1><span>Bulk Query</span></h1>

          <div class="breadcrumb-banner">

            <nav aria-label="breadcrumb">

              <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="index-3.php">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Bulk Query</li>

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

      <div class="col-md-6 col-12">

      <div class="service-heading">

            <div class="heading-s">

              <h2>Send Query</h2>

            </div>

          </div>

        <div class="c-form-wrap">          

          <form class="c-form" method="post" action="https://www.jaipurbiofertilizer.com/jaipurbiofertilizer_controller/includes/save.php">

            <input placeholder="Full Name*" type="text" name="name" required pattern="[A-Z a-z]{4,32}" title="The first name must be at least 4 characters.">

            <input placeholder="Email Address*" type="email" name="email" required>

            <input placeholder="Phone Number*" type="text" name="phone" required pattern="[1-9]{1}[0-9]{7,9}">

            <input placeholder="Address" type="text" name="address">

            <input placeholder="Country" type="text" name="country">

            <input placeholder="State" type="text" name="state">

            <input placeholder="City" type="text" name="city">

            <input placeholder="Subject" type="text" name="subject">

            <textarea type="text" rows="3" placeholder="Bulk Query...*" name="bulk_query" required></textarea>

            <button type="submit" class="blk-btn" name="bulk">Submit Now</button>

            <input type="hidden"name="recaptcha_response"id="recaptchaResponse">

          </form>

        </div>

      </div>

      <div class="col-md-6 col-12">

        <div class="service-heading">

          <div class="heading-s">

            <h2>Bulk Order</h2>

          </div>

        </div>

        <ul class="ul-types">

          <li><i class="la la-check-square"></i><span>Better prices at bulk buying</span> </li>

          <li><i class="la la-check-square"></i><span>Customer focused product catalogues</span> </li>

          <li><i class="la la-check-square"></i><span>Easy reorder workflows</span> </li>

          <li><i class="la la-check-square"></i><span>Delivery of products worldwide</span> </li>

          <li><i class="la la-check-square"></i><span>Quality assured products</span> </li>

          <li><i class="la la-check-square"></i><span>Swift Logistics Support</span> </li>

          <li><i class="la la-check-square"></i><span>Customer Care Support</span> </li>

          <li><i class="la la-check-square"></i><span>Dedicated Sales Team for expediting the process</span> </li>

          <li><i class="la la-check-square"></i><span>Return Provision for damaged products</span> </li>

        </ul>

      </div>

    </div>

  </div>

</section>



<?php require_once 'includes/footer.inc.php'; ?>
