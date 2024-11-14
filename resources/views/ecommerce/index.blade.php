@include('ecommerce.header')
<section class="w3l-ecommerce-main-inn">
    <!--/mag-content-->
    <div class="ecomrhny-content-inf py-5">
        <div class="container py-lg-5">
           
            <div class="ecommerce-grids row">
                <div class="ecommerce-left-hny col-lg-4">
                </div>
                <div class="ecommerce-right-hny col-lg-8">
                    <div class="row ecomhny-topbar">
                        <div class="col-6 ecomhny-result">
                            <h4 class="ecomhny-result-count"> Showing all {{count($product)}} Results</h4>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="ecom-products-grids row">
                        @foreach ($product as $value )
                        <div class="col-lg-4 col-6 product-incfhny mb-4">
                            <div class="product-grid2 transmitv">
                                <div class="product-image2">
                                    <a href="ecommerce-single.html">
                                        <img class="pic-1 img-fluid" src="/product_images/{{$value->service_img}}">
                                        <img class="pic-2 img-fluid" src="/product_images/{{$value->service_img}}">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a>
                                        </li>

                                        <li><a href="#" data-tip="Add to Cart"><span
                                                    class="fa fa-shopping-bag"></span></a>
                                        </li>
                                    </ul>
                                    <div class="transmitv single-item">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="transmitv_item" value="Women Maroon Top">
                                            <input type="hidden" name="amount" value="899.99">
                                            <button type="submit"
                                                class="transmitv-cart ptransmitv-cart add-to-cart">
                                                Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="ecommerce-single.html">{{$value->servic_name}}</a>
                                    </h3>
                                    <span class="price">
                                        {{-- <del>₹975.00</del> --}}
                                        ₹{{$value->price}}</span>
                                </div>
                            </div>
                        </div>   
                        @endforeach
                    </div>
                    <div class="ecom-slider-hny">
                        <div class="ecommerce-banv covers-9">
                            <div class="csslider infinity" id="slider1">
                                <input type="radio" name="slides" checked="checked" id="slides_1" />
                                <input type="radio" name="slides" id="slides_2" />
                                <input type="radio" name="slides" id="slides_3" />

                                <ul class="banner_slide_bg">
                                    <li>
                                        <div class="wrapper">

                                            <div class="cover-top-center-9">

                                                <div class="w3ls_cover_txt-9">
                                                    <h6 class="tag-cover-9">30% Off</h6>
                                                    <h3 class="title-cover-9">Men's Suit</h3>

                                                    <div class="read-more-button">
                                                        <a href="/" class="read-btn btn">Shop
                                                            Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wrapper">
                                            <div class="cover-top-center-9">
                                                <div class="w3ls_cover_txt-9">
                                                    <h6 class="tag-cover-9">50% Off</h6>
                                                    <h3 class="title-cover-9">Men's Footerwear</h3>

                                                    <div class="read-more-button">
                                                        <a href="/" class="read-btn btn">Shop
                                                            Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wrapper">
                                            <div class="cover-top-center-9">
                                                <div class="w3ls_cover_txt-9">
                                                    <h6 class="tag-cover-9">50% Off</h6>
                                                    <h3 class="title-cover-9">Women's Footwear</h3>

                                                    <div class="read-more-button">
                                                        <a href="/" class="read-btn btn">Shop
                                                            Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                                <div class="arrows">
                                    <label for="slides_1"></label>
                                    <label for="slides_2"></label>
                                    <label for="slides_3"></label>

                                </div>
                                <div class="navigation">
                                    <div>
                                        <label for="slides_1"></label>
                                        <label for="slides_2"></label>
                                        <label for="slides_3"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--//row22-->
                </div>
            </div>

        </div>
    </div>
    <!--//mag-content-->
</section>



@include('ecommerce.footer')