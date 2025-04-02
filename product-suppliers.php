<?php 
  require_once 'includes/header.inc.php'; 

  $current_product_name = isset($_GET['pcode']) ? $_GET['pcode'] : '';
  $selected_product = null;
  
  if(isset($products_list) && !empty($products_list)) {

    // check inside the products list and check for product -> url if it matches with $current_product_name
    foreach($products_list as $product_category) :
      
      
      if(isset($product_category['products']) && !empty($product_category['products'])) {
        
        foreach($product_category['products'] as $product) {
          if($product['url'] == $current_product_name) {
            $current_product_category_slug = $product_category['url']; // if product is found, set the current product category
            $current_product_category_name = $product_category['url']; // if product is found, set the current product category
            $selected_product = $product;
            break;
          }
        }

      }

    endforeach;
?>

  <!--banner-->
  <section class="i-banner">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-12">
            <h1><span><?php echo $selected_product['name']; ?></span></h1>
            <div class="breadcrumb-banner">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>">Home</a></li>
                  <li class="breadcrumb-item white"><a href="<?php echo BASE_URL; ?>/products.php?url=<?php echo $current_product_category_slug; ?>">Sulphur fertilizer</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo $selected_product['name']; ?></li>
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
          <section class="deatils-apge">
            <div class="container">
              <div class="row">
                <div class="col-md-5 col-12">
                    <div class="slider-container">
                      <div id="slider" class="slider owl-carousel">
                          <div class="item">
                            <div class="content">
                              <img src="<?php echo  BASE_URL . '/assets/img/products/' . $selected_product['image']; ?>" alt="">
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-7 col-12">
                    <div class="pro-details">
                      <h2><?php echo $selected_product['name']; ?></span></h2>
                      
                      <div class="benefits" style="padding:10px 0 0 0;">
                          <span>Product Description</span>
                          <p>
                            <?php echo $selected_product['description']; ?>
                          </p>
                          
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

    </div>

  </section>
<?php } ?>

<?php require_once 'includes/footer.inc.php'; ?>
