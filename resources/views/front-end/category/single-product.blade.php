@extends('front-end.master')
@section('body')

    <!--banner-->
    <div class="banner1">
        <div class="container">
            <h3><a href="{{ '/' }}">Home</a> / <span>Single</span></h3>
        </div>
    </div>
    <!--banner-->
    <!--content-->
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">
                <div class="single-grids">
                    <div class="col-md-9 single-grid">
                        <div clas="single-top">
                            <div class="single-left">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li data-thumb="{{ asset($product->product_image) }}">
                                            <div class="thumb-image"> <img src="{{ asset($product->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                        <li data-thumb="{{ asset($product->product_image) }}">
                                            <div class="thumb-image"> <img src="{{ asset($product->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                        <li data-thumb="{{ asset($product->product_image) }}">
                                            <div class="thumb-image"> <img src="{{ asset($product->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-right simpleCart_shelfItem">
                                <h4>{{ $product->product_name }}</h4>
                                <div class="block">
                                    {{-- <div class="starbox small ghosting"> </div> --}}
                                </div>
                                <p class="price item_price">BDT.{{ $product->product_price }}</p>
                                <div class="description">
                                    <p><span>Quick Overview : </span> {{ $product->short_description }}</p>
                                </div>


                                {{ Form::open(['route'=>'add-to-cart', 'method'=>'POST']) }}
                                <div class="color-quality">
                                    <h6>Quality :</h6>
                                    {{-- <div class="quantity"> --}}
                                        {{-- <input type="number" name="qty" value="1" min="1"/> --}}
                                        <input type="hidden" name="id" value="{{ $product->id }}"/>
                                    </div>
                                </div>
                                <div class="women">
                                    {{-- <span class="size">XL / XXL / S </span> --}}
                                    {{-- <input type="submit" name="btn" value="Add To Cart" class="my-cart-b item_add"/> --}}
                                </div>
                                {{ Form::close() }}

                                <div class="social-icon">
                                    <a href="#"><i class="icon"></i></a>
                                    <a href="#"><i class="icon1"></i></a>
                                    <a href="#"><i class="icon2"></i></a>
                                    <a href="#"><i class="icon3"></i></a>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                   
                    <div class="clearfix"> </div>
                </div>
                <!--Product Description-->
                <div class="product-w3agile">
                    <h3 class="tittle1">Product Description</h3>
                    <div class="product-grids">
                       
                        <div class="col-md-12 product-grid1">
                            <div class="tab-wl3">
                                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
                                        {{-- <li role="presentation"><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews">Reviews (1)</a></li> --}}

                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                            <div class="descr">
                                                <h4>{{ $product->product_name }} </h4>
                                                <p>{!! $product->long_description !!}.</p>
                                                {{-- <p class="quote">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p> --}}
                                                
                                            </div>
                                        </div>
              
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!--Product Description-->
            </div>
        </div>
        <!--single-->
      
        <!--new-arrivals-->
    </div>
    <!--content-->

    @endsection