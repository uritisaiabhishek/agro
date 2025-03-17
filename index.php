<?php 
   $seo_title = "Sharada Agro Industries";
   $seo_desc = "Sharada Agro Industries is a Modern Agriculture Company. We develop products and systems to help farmers around the world grow crops while using the best of the inputs efficiently.";
   $seo_keywords = "Sharada Agro Industries, Agriculture Company, Bio Fertilizers, Agriculture Inputs, Organic Inputs";
   
   require_once 'includes/header.inc.php'; ?>


<!--banner-->
<section class="banner">
  <div class="b-slider-view">
    	<div class="banner-right-e">
        	<img src="assets/img/banner1.jpg" style="z-index:-2;margin-right:0;" class="img-fluid">
      </div>
  </div>
</section>

<section class="welcome">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12">
        <div class="welcome-text">
          <div class="heading">
            <h2>Welcome To <span>Sharada Agro Industries</span></h2>
          </div>
          <div class="welcome-pragh">
           <p><strong>Sharada Agro Industries</strong> is a Modern Agriculture Company. We develop products and systems to help farmers around the world grow crops while using the best of the inputs efficiently. We believe Organic Inputs has the potential to bring humanity’s needs in balance with the resources of our planet.</p>

            <p>Sharada Agro Industries was established in the year 1996, during that time it was one of India’s First Bio Fertilizers company.  Since then the company has diversified into multiple categories of Agriculture Inputs.  The company’s policy is to provide the best of the products and never compromise with the quality, which is evident from regular sample tests of the products at Government level from time to time. </p>
            <a href="overview.php" class="read-more">READ MORE</a> </div>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="welcome-img"> <a href="overview.php"><img class="img-fluid" src="assets/img/banner-inner.png"></a> </div>
      </div>
    </div>
  </div>
</section>

<?php
// Only render the section if $products_list is a non-empty array
if (!empty($products_list) && is_array($products_list)) :
?>
<section class="our-product">
  <div class="container">

     <div class="heading-s mb-5">
        <h2><span>Our products</span></h2>
     </div>

     <div class="row">
         <?php foreach ($products_list as $product_category) : ?>
               <div class="col-md-4 mb-5">
                  <div class="products-view-outer">
                     <div class="products-box">
                        <h4><?php echo $product_category['name']; ?></h4>
                        <div class="clearfix"></div>
                        <div class="service-name">
                           <p>
                              <a href="products48a3.php?url=<?php echo $product_category['url']; ?>">
                                 View All Products
                              </a>
                           </p>
                           <a href="products48a3.php?url=<?php echo $product_category['url']; ?>">
                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAATCAMAAABBexbDAAAAXVBMVEVHcEz////Y/2n////Y/2nY/2nY/2n////////Y/2nY/2n////Y/2nY/2nY/2n////////////Y/2n////////Y/2n////Y/2nY/2nY/2n////////////////Y/2kVoUxeAAAAHXRSTlMA6+Pj3+fh6ODp694bIJUdwcjmGdOQl8HI05MikGN7YuIAAABsSURBVBjTfc9JDoAwCAVQ1E5a53m+/zFtidIoiSz+4uVDAqwa3JQSaDZtXBZSBAIkSF9kOfFWhJQp3lL/i7buXIopD3SMPs+SoG8ql8tcPGDwGRWeuSElSBBiBmyl/YCgRoWQi3Bjj3wOGcEFPFYDVeEQs70AAAAASUVORK5CYII=">
                           </a> 
                        </div>
                     </div>
                  </div>
               </div>
         <?php endforeach; ?>
     </div>
  </div>
</section>
<?php endif; ?>

<?php require_once 'includes/footer.inc.php'; ?>
