<?php require_once('includes/constants.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="assets/img/icon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon/favicon-16x16.png">

      <?php if(isset($site_title) && !empty($site_title)) { ?>
         <title><?php echo $site_title; ?></title>
         <meta property="og:title" content="<?php echo $seo_title; ?>"/>
      <?php } else { ?>
         <title>:: Sharada Agro Industries ::</title>
         <meta property="og:title" content="Sharada Agro Industries"/>
      <?php } ?>

      <?php if(isset($seo_keywords) && !empty($seo_keywords)) { ?>
         <meta name="keywords" content="<?php echo $seo_keywords; ?>" />
      <?php } ?>

      <?php if(isset($seo_desc) && !empty($seo_desc)) { ?>
         <meta property="og:description" content="<?php echo $seo_desc; ?>"/>
         <meta name="description" content="<?php echo $seo_desc; ?>"/>
      <?php } else { ?>
         <meta property="og:description" content="Sharada Agro Industries is a Modern Agriculture Company. We develop products and systems to help farmers around the world grow crops while using the best of the inputs efficiently. We believe Organic Inputs has the potential to bring humanity’s needs in balance with the resources of our planet."/>
         <meta name="description" content="Sharada Agro Industries is a Modern Agriculture Company. We develop products and systems to help farmers around the world grow crops while using the best of the inputs efficiently. We believe Organic Inputs has the potential to bring humanity’s needs in balance with the resources of our planet."/>
      <?php } ?>
      
      <meta property="og:image" content="share.jpg" />
      <meta property="og:url" content="<?php echo $_SERVER['REQUEST_URI']; ?>"/>
      <meta property="og:site_name" content="Sharada Agro Industries"/>
      <meta property="og:type" content="website"/>
      <meta property="og:image" content="share.jpg" />
      <meta property="og:type" content="website"/>
      <?php require_once('includes/header-scripts.inc.php'); ?>
   </head>
   <body>
      <!--header-->
      <header>
         <section class="menu">
            <div class="container">
               <div class="top-logo-menu">
                  <div class="menu-bg-top">
                     <nav class="navbar navbar-expand-lg navbar-static">
                        <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png"></a>
                        <button class="navbar-toggler" type="button" data-toggle="slide-collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>            
                        <div class="collapse navbar-collapse" id="navbars">
                           <a href="#" class="nav-close" data-toggle="slide-collapse" data-target="#navbars"><i class="la la-close"></i></a>            	
                           <ul class="navbar-nav ml-auto">
                              <li class="nav-item"> <a class="nav-link" href="index.php"><span>Home</span></a> </li>
                              <li class="nav-item dropdown"><a class="nav-link" href="aboutus.php"><span>About Us</span></a></li>
                              <?php
                              // Only render the section if $products is a non-empty array
                              if (!empty($products) && is_array($products)) :
                              ?>
                              
                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><span>Products <i class="la la-angle-down"></i> </span></a>
                                 <div class="dropdown-menu dropdown-cetogery">
                                    <ul>
                                       
                                       <?php foreach ($products as $product) : ?>
                                          <li><a href="products48a3.php?url=<?php echo $product['url']; ?>"><?php echo htmlspecialchars($product['name']); ?></a></li>
                                       <?php endforeach; ?>
                                       
                                    </ul>
                                 </div>
                              </li>

                              <?php endif; ?>
                              
                              <li class="nav-item"> <a class="nav-link" href="contact-us.php">CONTACT US</a> </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </section>
      </header>
      <!--end-->