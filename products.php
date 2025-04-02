<?php 
  require_once 'includes/header.inc.php'; 
   
  // Get URL parameter
  $product_current_category = isset($_GET['url']) ? $_GET['url'] : '';
  // echo $product_current_category;
  // Find the matching category
  $selected_category = null;

  foreach ($products_list as $category) {
      if ($category['url'] === $product_current_category) {
          $selected_category = $category;
          break;
      }
  }

  // print_r($selected_category['products']);
  if(isset($products_list) && !empty($products_list)) { 
?>

  <!--banner-->
  <section class="i-banner">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12 col-12">

            <h1><span><?php echo $selected_category['name']; ?></span></h1>

            <p style="padding: 0;text-align: center;color: #ffffff;font-size: 17px;"><?php echo $selected_category['name']; ?></p>

            <div class="breadcrumb-banner">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo $selected_category['name']; ?></li>
                </ol>
              </nav>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

  <?php if(isset($selected_category['products']) && !empty($selected_category['products'])) { ?>
    
    <section class="page">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
        
            <div class="col-md-3 col-12">
              <div class="left-category">
                <h2><?php echo $selected_category['name']; ?></h2>
                <div id="accordion">
                  
                  <?php foreach($products_list as $product_category) : ?> 
                    <div class="card">
                      <div class="card-header" id="heading1">
                        <h5 class="mb-0">
                          <a class="btn btn-link" href="products.php?url=<?php echo $product_category['url']; ?>">
                            <?php echo $product_category['name']; ?>
                          </a>
                        </h5>
                      </div>
                    </div>
                  <?php endforeach; ?>
                  
                </div>
              </div>
            </div>
            
            <div class="col-md-9 col-12">
              <div class="row">
                  <div class="col-md-12">
                      <?php if(isset($selected_category['products']) && !empty($selected_category['products'])){ ?>
                        
                        <div class="row">

                          <?php foreach ($selected_category['products'] as $product) : ?>
                            <div class="col-md-4">

                              <div class="product-deatil">

                                  <a href="product-suppliers.php?pcode=<?php echo $product['url']; ?>">
                                    <img src="<?php echo BASE_URL . '/assets/img/products/' . $product['image']; ?>">
                                  </a>
                                
                                  <div class="read-more-btn-view"> 
                                    <a class="read-more-btn" href="product-suppliers.php?pcode=<?php echo $product['url']; ?>"><?php echo $product['name']; ?></a> 
                                  </div>

                                  <div class="products-name">
                                    <p><a class="read-more-btn" href="product-suppliers.php?pcode=<?php echo $product['url']; ?>">View Product Details</a></p>
                                  </div>

                              </div>

                            </div>
                          <?php endforeach; ?>

                        </div>
  
                      <?php } ?>

                  </div>
                </div>           
            </div>

          </div>
        </div>
      </div>
    </section>
    
  <?php }else{ ?>
    <div class="container">
      <div class="col-md-8 mx-auto py-5">
        <?php echo 'No data Found'; ?>
      </div>
    </div>
  <?php } ?>

<?php }else{ ?>

  <div class="container">
    <div class="col-md-8 mx-auto py-5">
      <?php echo 'No data Found'; ?>
    </div>
  </div>

<?php } ?>

<?php require_once 'includes/footer.inc.php'; ?>
