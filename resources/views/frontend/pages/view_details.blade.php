@extends('frontend.master')
@section('content')

    @php
        $product['image']= explode('|', $product->image);
    @endphp

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        @foreach($product->image as $image)
                        <div class="product-preview">
                            <img src="{{asset('/image/'.$image)}}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        @foreach($product->image as $image)
                            <div class="product-preview">
                                <img src="{{asset('/image/'.$image)}}" alt="">
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">{{$product->name}}</h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">&#2547;{{$product->price}} <del class="product-old-price">&#2547;{{$product->price}}</del></h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p>{{$product->description}}</p>


                        <form action="{{url('/add-to-cart')}}" method="post">
                            @csrf
                            <div class="add-to-cart">
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                    cart
                                </button>
                            </div>
                        </form>




                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="#">{{$product->category->name}}</a></li>
                            <li><a href="#">{{$product->subcategory->name}}</a></li>


                        </ul>



                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                            <li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>{{$product->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>{{$product->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->


                            <!-- tab3  -->
{{--                            <div id="tab3" class="tab-pane fade in">--}}
{{--                                <div class="row">--}}

{{--                                </div>--}}
{{--                            </div>--}}
                            <!-- /tab3  -->
                        </div>
                        <!-- /product tab content  -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- Section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Related Products</h3>
                    </div>
                </div>

                @foreach($related_products as $related_product)
                    @php
                        $related_product['image']= explode('|', $related_product->image);
                        $images= $related_product->image[0];
                    @endphp
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{asset('/image/'.$images)}}" alt="">
                            <div class="product-label">
                                <span class="sale">-20%</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category"><a href="{{url('/view-product/'.$related_product->id)}}"></a>{{$related_product->category->name}}</p>
                            <h3 class="product-name"><a href="{{url('/view-product/'.$related_product->id)}}">{{$related_product->name}}</a></h3>
                            <h4 class="product-price"><a href="{{url('/view-product/'.$related_product->id)}}">&#2547;{{$related_product->price}}<del class="product-old-price">&#2547;{{$related_product->price}}</del></a></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                @endforeach



            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->

@endsection
