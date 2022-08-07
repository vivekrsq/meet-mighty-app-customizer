<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta data-item="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <?php
    include 'header.php';
    ?>
    <div class="container d-flex flex-wrap align-items-center justify-content-center">
                        <div class="form mx-3 my-4" style="width: 754px;">
                        <form class="row g-3">
                                    <div class="col-md-3">
                                        <label for="primaryColor" class="form-label">Primary Color</label>
                                        <input type="color" onChange="changePrimaryColor()" class="form-control" id="primaryColor" value="#DD439B">
                                    </div>
                                    
                                    
                                    <div class="col-3">
                                        <label for="inputAddress" class="form-label">Background Color</label>
                                        <input type="color" onChange="changeBackgroundColor()" class="form-control" id="bg-color" value="#FFFFFF">
                                    </div>
                                    <div class="col-3">
                                        <label for="inputAddress2" class="form-label">Text Primary Color</label>
                                        <input type="color" onChange="changeTxtPrimaryColor()" class="form-control" id="txtPrimaryColor" value="#000000">
                                    </div>
                                    <div class="col-3">
                                        <label for="inputAddress2" class="form-label">Text Secondary Color</label>
                                        <input type="color" class="form-control" onChange="changeTxtSecondaryColor()" id="txtSecondaryColor" value="#000000">
                                    </div>
                                    
                                    
                                    
                        </form>

                        <div class="d-flex flex flex-column mt-4 align-items-center dragContainer">
                        
                        <div class="toggleBtns form-check form-switch" draggable="true">
                            
                            <label class="form-check-label"></i>  Category</label>
  <input class="form-check-input" onChange="hideCategory()" type="checkbox" role="switch" id="category" checked>
</div>
                        <div class="toggleBtns form-check form-switch" draggable="true">
                            <label class="form-check-label"></i> Advertise Banner</label>
  <input class="form-check-input" type="checkbox" role="switch" onChange="hideAdBanner()" id="flexSwitchCheckChecked" checked>
</div>
                        <div class="toggleBtns form-check form-switch" draggable="true">
                            <label class="form-check-label"></i> New Collection</label>
  <input class="form-check-input" onChange="hideNewCollection()" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div>
                        <div class="toggleBtns form-check form-switch" draggable="true">
                            <label class="form-check-label"></i> Featured Product</label>
  <input class="form-check-input" onChange="hideFeaturedProduct()" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div>
                        <div class="toggleBtns form-check form-switch" draggable="true">
                            <label class="form-check-label"></i> Sale Banner</label>
  <input class="form-check-input" onChange="hideSaleBanner()" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div>
                        <div class="toggleBtns form-check form-switch" draggable="true">
                            <label class="form-check-label"></i> Vendors</label>
  <input class="form-check-input" onChange="hideVendor()" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div>
                        <div class="toggleBtns form-check form-switch" draggable="true">
                            <label class="form-check-label"></i> Deal of the day</label>
  <input class="form-check-input" onChange="hideDealOfTheDay()" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div>
                        <div class="toggleBtns form-check form-switch" draggable="true">
                            <label class="form-check-label"></i> Top Selling</label>
  <input class="form-check-input" onChange="hideTopSelling()" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div>
                        <div class="toggleBtns form-check form-switch" draggable="true">
                            <label class="form-check-label"></i> Trading Product</label>
  <input class="form-check-input" onChange="hideTradingProduct()" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div>
                        <div class="toggleBtns form-check form-switch" draggable="true">
                            <label class="form-check-label"></i> Available Offers</label>
  <input class="form-check-input" onChange="hideAvailableOffer()" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div>
                        <div class="toggleBtns form-check form-switch" draggable="true">
                            <label class="form-check-label"></i> Recommendation For You</label>
  <input class="form-check-input" onChange="hideRecommendation4u()" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div>
                        <div class="toggleBtns form-check form-switch" draggable="true">
                            <label class="form-check-label"></i> You Might Like</label>
  <input class="form-check-input" onChange="hideYouMightLike()" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div></div>
                        <div class="d-flex mt-3">
                                        
                                        <a onClick="Download()" class="btn btn-success mx-2">Download</a>
                                        
                                    </div>
                        </div>
                        <div class="preview mx-2 my-4">
                            <div class="phone" id="phone">
                                <h4>Mighty Store</h4>
                                <div class="phone-page" id="phone-page">
                                    <div class="categories position-relative" id="categories" data-item="categories" style="display: flex;">
                                    <div class="category-inner position-relative d-flex">
                                        <div class="iconbox">
                                            <div class="category-image"><img src="https://media.voguebusiness.com/photos/6216413a067349b21703e5e5/master/pass/-courtesy-of-gabriela-hearst-feb-22-story.jpg" alt="" width="59px"></div>
                                            <p><span class="txtPrimary">All</span></p>
                                        </div>
                                        <div class="iconbox">
                                            <div class="category-image"><img src="https://www.tomjames.com/pics/catalog/2021FA/pics/Ladies-Custom-Capsule-D2-63.jpg" alt="" width="59px"></div>
                                            <p><span class="txtPrimary">Bags</span></p>
                                        </div>
                                        <div class="iconbox">
                                            <div class="category-image"><img src="https://images.saymedia-content.com/.image/c_fit%2Ccs_srgb%2Cq_auto:eco%2Cw_620/MTc2NDU3NDg3NDI3MTgzODI5/clothing-tips-real-women.png" alt="" width="59px"></div>
                                            <p><span class="txtPrimary">Cothing</span></p>
                                        </div>
                                        <div class="iconbox">
                                            <div class="category-image"><img src="https://cf.ltkcdn.net/womens-fashion/images/std-xs/263385-340x340-ann-taylor.png" alt="" width="59px"></div>
                                            <p><span class="txtPrimary">Cosmetics</span></p>
                                        </div>
                                        <div class="iconbox">
                                            <div class="category-image"><img src="https://www.whitehouseblackmarket.com/Product_Images/570330038ext1.jpg?imgPolicy=productMed" alt="" width="59px"></div>
                                            <p><span class="txtPrimary">Dresses</span></p>
                                        </div>
                                        <div class="iconbox">
                                            <div class="category-image"><img src="https://media.voguebusiness.com/photos/6216413a067349b21703e5e5/master/pass/-courtesy-of-gabriela-hearst-feb-22-story.jpg" alt="" width="59px"></div>
                                            <p><span class="txtPrimary">Fashion</span></p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="banner" data-item="slider" style="display: flex;" id="AdBanner">
                                        <img src="https://img.freepik.com/premium-vector/black-friday-sale-banner-retail-shopping-promotion-with-black-gift-box-retro-light-sign-black-friday-banner-design-big-sale-special-offer-year_139523-468.jpg?w=2000" alt="" style="width:100%; padding: 10px; border-radius: 20px;">
                                        <img src="https://img.freepik.com/premium-vector/black-friday-sale-banner-retail-shopping-promotion-with-black-gift-box-retro-light-sign-black-friday-banner-design-big-sale-special-offer-year_139523-468.jpg?w=2000" alt="" style="width:100%; padding: 10px; border-radius: 20px;">
                                        <img src="https://img.freepik.com/premium-vector/black-friday-sale-banner-retail-shopping-promotion-with-black-gift-box-retro-light-sign-black-friday-banner-design-big-sale-special-offer-year_139523-468.jpg?w=2000" alt="" style="width:100%; padding: 10px; border-radius: 20px;">
                                    </div>
                                    <div class="product-section" data-item="newest_product" id="newCollection" style="display: block;">
                                            <div class="new-col p-3 d-flex justify-content-between">
                                                <p><b><span class="txtPrimary">New Collection</span></b></p>
                                                <p class="primaryColor">See All</p>
                                            </div>
                                            <div class="products d-flex flex-wrap justify-content-center">
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://media.voguebusiness.com/photos/621e06bf17b9c2e9b062bc0b/master/pass/reliance-acquisition-voguebus-full-getty-credit-mar-22-story.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://static01.nyt.com/images/2016/03/31/fashion/31UNBUTTONED-LADY-GAGA-slide-UKT3/31UNBUTTONED-LADY-GAGA-slide-UKT3-master1050.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://cdn-brilio-net.akamaized.net/news/2016/05/04/58433/259166-gaga-style.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://i.pinimg.com/236x/db/63/11/db6311803608087d0f12ef2a81faff4e.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                            </div>
                                    </div>
                                    <div class="product-section" data-item="feature_products" id="featuredProduct" style="display: block;">
                                            <div class="new-col p-3 d-flex justify-content-between">
                                                <p><b><span class="txtPrimary">Featured Product</span></b></p>
                                                <p class="primaryColor">See All</p>
                                            </div>
                                            <div class="products d-flex flex-wrap justify-content-center">
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://media.voguebusiness.com/photos/621e06bf17b9c2e9b062bc0b/master/pass/reliance-acquisition-voguebus-full-getty-credit-mar-22-story.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://static01.nyt.com/images/2016/03/31/fashion/31UNBUTTONED-LADY-GAGA-slide-UKT3/31UNBUTTONED-LADY-GAGA-slide-UKT3-master1050.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://cdn-brilio-net.akamaized.net/news/2016/05/04/58433/259166-gaga-style.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://i.pinimg.com/236x/db/63/11/db6311803608087d0f12ef2a81faff4e.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                            </div>
                                    </div>
                                    <div id="saleBanner" data-item="Sale_Banner" style="display: block;">
                                        <div class="banner d-flex" >
                                            <img src="https://img.myloview.com/posters/fashion-sale-banner-with-woman-fashion-outfit-online-shopping-social-media-voucher-or-web-template-with-beautiful-woman-pink-background-vector-illustration-400-146996494.jpg" alt="" style="width:100%;  border-radius: 3px;">
                                            
                                        </div>
                                        <div class="saleBannerName">
                                            <div>Black Friday Sale 2021</div>
                                            <div>Sale starts from 1 Aug 2022</div>
                                        </div>
                                        <div class="banner d-flex">
                                            <img src="https://previews.123rf.com/images/igorvkv/igorvkv1801/igorvkv180100024/93528965-winter-sale-banner-template-design-vector-illustration.jpg" alt="" style="width:100%; border-radius: 3px;">
                                            
                                        </div>
                                        <div class="saleBannerName">
                                            <div>Black Friday Sale 2021</div>
                                            <div>Sale starts from 1 Aug 2022</div>
                                        </div>
                                    </div>
                                    <div class="product-section" data-item="vendor" id="vendors" style="display: block;">
                                            <div class="new-col p-3 d-flex justify-content-between">
                                                <p><b><span class="txtPrimary">Vendors</span></b></p>
                                                <p class="primaryColor">See All</p>
                                            </div>
                                            <div class="products d-flex flex-wrap justify-content-center">
                                                <div class="mx-2">
                                                    <img src="https://img.freepik.com/free-vector/toothpaste-tube-water-splash-promo-banner_107791-1942.jpg" alt="" srcset="" style="width:100%; border-radius: 10px;">
                                                </div>                                      
                                                <div class="mx-2 d-flex align-items-center p-2">
                                                    <div class="imgicon"><img src="https://img.freepik.com/free-photo/happy-overjoyed-ethnic-lady-with-bushy-crisp-hair-gives-positive-answer-with-thumbs-up-likes-awesome-idea-closes-eyes-from-laugh-dressed-mockup-t-shirt-isolated-yellow-wall_273609-27923.jpg?w=2000" alt="" srcset="" style="width:58px; border-radius: 43px;"></div>
                                                    <div class="infos" style="padding-left: 15px;">
                                                        <p style="margin-bottom: 2px;font-weight: 700;">Store</p>
                                                        <p style="font-size: 13px; margin-bottom:0px;">3205 Hart Ridge Road Siginow, Michigan, 48607</p>
                                                    </div>
                                                    
                                                </div>                                      
                                                                                 
                                            </div>
                                    </div>
                                    <div class="product-section" data-item="deal_of_the_day" id="dealOfTheDay" style="display: block;">
                                            <div class="new-col p-3 d-flex justify-content-between">
                                                <p><b><span class="txtPrimary">Deal Of The Day</span></b></p>
                                                <p class="primaryColor">See All</p>
                                            </div>
                                            <div class="products d-flex flex-wrap justify-content-center">
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://media.voguebusiness.com/photos/621e06bf17b9c2e9b062bc0b/master/pass/reliance-acquisition-voguebus-full-getty-credit-mar-22-story.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://static01.nyt.com/images/2016/03/31/fashion/31UNBUTTONED-LADY-GAGA-slide-UKT3/31UNBUTTONED-LADY-GAGA-slide-UKT3-master1050.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                                                                 
                                            </div>
                                    </div>
                                    <div class="product-section" data-item="best_selling_product" id="topSelling" style="display: block;">
                                            <div class="new-col p-3 d-flex justify-content-between">
                                                <p><b><span class="txtPrimary">Top Selling</span></b></p>
                                                <p class="primaryColor">See All</p>
                                            </div>
                                            <div class="products d-flex flex-wrap justify-content-center">
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://media.voguebusiness.com/photos/621e06bf17b9c2e9b062bc0b/master/pass/reliance-acquisition-voguebus-full-getty-credit-mar-22-story.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://static01.nyt.com/images/2016/03/31/fashion/31UNBUTTONED-LADY-GAGA-slide-UKT3/31UNBUTTONED-LADY-GAGA-slide-UKT3-master1050.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://cdn-brilio-net.akamaized.net/news/2016/05/04/58433/259166-gaga-style.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://i.pinimg.com/236x/db/63/11/db6311803608087d0f12ef2a81faff4e.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                            </div>
                                    </div>
                                    <div class="product-section" data-item="sale_product" id="tradingProducts" style="display: block;">
                                            <div class="new-col p-3 d-flex justify-content-between">
                                                <p><b><span class="txtPrimary">Trading Products</span></b></p>
                                                <p class="primaryColor">See All</p>
                                            </div>
                                            <div class="products d-flex flex-wrap justify-content-center">
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://media.voguebusiness.com/photos/621e06bf17b9c2e9b062bc0b/master/pass/reliance-acquisition-voguebus-full-getty-credit-mar-22-story.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://static01.nyt.com/images/2016/03/31/fashion/31UNBUTTONED-LADY-GAGA-slide-UKT3/31UNBUTTONED-LADY-GAGA-slide-UKT3-master1050.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://cdn-brilio-net.akamaized.net/news/2016/05/04/58433/259166-gaga-style.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://i.pinimg.com/236x/db/63/11/db6311803608087d0f12ef2a81faff4e.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                            </div>
                                    </div>
                                    <div class="product-section" data-item="offer" id="availableOffer" style="display: block;">
                                            <div class="new-col p-3 d-flex justify-content-between">
                                                <p><b><span class="txtPrimary">Available Offer</span></b></p>
                                                <p class="primaryColor">See All</p>
                                            </div>
                                            <div class="products d-flex flex-wrap justify-content-center">
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://media.voguebusiness.com/photos/621e06bf17b9c2e9b062bc0b/master/pass/reliance-acquisition-voguebus-full-getty-credit-mar-22-story.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://static01.nyt.com/images/2016/03/31/fashion/31UNBUTTONED-LADY-GAGA-slide-UKT3/31UNBUTTONED-LADY-GAGA-slide-UKT3-master1050.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                                                                 
                                            </div>
                                    </div>
                                    <div class="product-section" data-item="suggested_for_you" id="recommendation4u" style="display: block;">
                                            <div class="new-col p-3 d-flex justify-content-between">
                                                <p><b><span class="txtPrimary">Recommendation For You</span></b></p>
                                                <p class="primaryColor">See All</p>
                                            </div>
                                            <div class="products d-flex flex-wrap justify-content-center">
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://media.voguebusiness.com/photos/621e06bf17b9c2e9b062bc0b/master/pass/reliance-acquisition-voguebus-full-getty-credit-mar-22-story.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://static01.nyt.com/images/2016/03/31/fashion/31UNBUTTONED-LADY-GAGA-slide-UKT3/31UNBUTTONED-LADY-GAGA-slide-UKT3-master1050.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://cdn-brilio-net.akamaized.net/news/2016/05/04/58433/259166-gaga-style.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://i.pinimg.com/236x/db/63/11/db6311803608087d0f12ef2a81faff4e.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                            </div>
                                    </div>
                                    <div class="product-section" data-item="you_may_like" id="youMightLike" style="display: block;">
                                            <div class="new-col p-3 d-flex justify-content-between">
                                                <p><b><span class="txtPrimary">You Might Like</span></b></p>
                                                <p class="primaryColor">See All</p>
                                            </div>
                                            <div class="products d-flex flex-wrap justify-content-center">
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://media.voguebusiness.com/photos/621e06bf17b9c2e9b062bc0b/master/pass/reliance-acquisition-voguebus-full-getty-credit-mar-22-story.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://static01.nyt.com/images/2016/03/31/fashion/31UNBUTTONED-LADY-GAGA-slide-UKT3/31UNBUTTONED-LADY-GAGA-slide-UKT3-master1050.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://cdn-brilio-net.akamaized.net/news/2016/05/04/58433/259166-gaga-style.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span><span class="txtSecondary">₹999/-</span></p>
                                                    
                                                </div>                                      
                                                <div class="product mx-2">
                                                    <div class="lg-product-image"><img src="https://i.pinimg.com/236x/db/63/11/db6311803608087d0f12ef2a81faff4e.jpg" alt="" srcset="" width="120px"></div><div class="favorite"><i class="fa-regular fa-heart"></i></div>
                                                    <p><span class="txtPrimary">Women White</span><br> <span class="primaryColor" style="font-size:13px; color: red;">₹1288/-</span></p>
                                                    
                                                </div>                                      
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
  <script src="script.js"></script>
  
  </body>
</html>