<?php
    $p_id           =$product->getproduct_id();
    $p_name         =$product->getproduct_name();
    $p_price        =$product->getproduct_price(); 
    $p_producer     =$product->getproduct_producer();
    $p_origin       =$product->getproduct_origin(); 
    $p_description  =$product->getproduct_description();
    $p_thumbnail    =$product->getproduct_thumbnail();
    $p_preview      =$product->getproduct_preview();
    $arr_preview    =explode(";",$p_preview);
  
    echo'
    <section class="py-5">
        <div class="container-fluid px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                <div class ="col-md-6">
                    <div id="products-preview-carousel" class="carousel slide carousel-dark" data-ride="carousel" style="margin-bottom: 3rem;">
                        <div class="carousel-inner">
                    ';
                         for($i = 0; $i<count($arr_preview)-1;$i++){
                            if($i==0)
                            {
                                echo'
                                    <div class="carousel-item active">
                                        <img class="product-preview-img" src="'.$arr_preview[$i].'">
                                    </div>
                                ';
                            }
                            else{
                                echo'
                                <div class="carousel-item">
                                    <img class="product-preview-img" src="'.$arr_preview[$i].'">
                                </div>
                            '; 
                            }
                        }
        echo'
                        </div>
                        <a class="carousel-control-prev" href="#products-preview-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#products-preview-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                    </div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">'.$p_name.'</h1>
                        <div id="accordion">
                            <div class="card-header" style="padding: 0px 0px;" id="headingOne">
                                <h5 class="mb-0">
                                <span class="accordion accordion-button collapsed" style="background-color: whitesmoke;" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    DESCRIPTION
                                </span>
                                </h5>
                            </div>
                            '.$p_description.'
                            <div class="fs-5 mb-5">
                        <span style="font-size: 2rem; color: red;">'.number_format((int)$p_price, 0, ",", ".").' đ</span>
                    </div>
                            <form action="add_to_cart.php" method="GET">
                                <div class="row">
                                <div class="checkout col-md-6">
                                    <p class="description">Quantity:</p>
                                    <button type="button" class="btn decrease-btn">-</button>
                                    <input type="number" name="productquantity" value="1" id="sl">
                                    <button type="button" class="btn increase-btn">+</button>
                                </div>
                                <div class="col-md-6" id="giohang">
                                <input type="hidden" name="productid" value="'.$p_id.'" />
                                <button type="submit" class="btn add-to-cart-button">
                                <i class="bi-cart"></i>
                                Thêm vào giỏ hàng
                                </button>
                                </div>
                                </div>
                            </form>
                        </div>
                </div>
        </div>
    </section>
    <div class="product-review-article text-center">
        '.$review->getDescription().'
    </div>
    
    ';
?>