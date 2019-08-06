@extends('front-end.master')
@section('title')
    Category
@endsection
@section('body')
    <!--banner-->
    <div class="banner1">
        <div class="container">
            <h3><a href="{{route('/')}}">Home</a> / <span>Products</span></h3>
        </div>
    </div>
    <!--banner-->
    <!--content-->
    <div class="content">
        <div class="products-agileinfo">
            <h2 class="tittle">Category Products</h2>
            <div class="container">
                <div class="product-agileinfo-grids w3l">
                   
                    <div class="col-md-9 product-agileinfon-grid1 w3l">
                       
                       
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
                                <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="{{asset('/')}}/front-end/images/menu1.png"></a></li>
                                    <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="{{asset('/')}}/front-end/images/menu.png"></a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                        <div class="product-tab">
                                            @foreach($categoryProducts as $categoryProduct)
                                                <div class="col-md-4 product-tab-grid simpleCart_shelfItem">
                                                    <div class="grid-arr">
                                                        <div  class="grid-arrival">
                                                            <figure>
                                                                <a href="{{ route('single-product', ['id'=>$categoryProduct->id]) }}" class="new-gri">
                                                                    <div class="grid-img">
                                                                        <img  src="{{asset($categoryProduct->product_image)}}" class="img-responsive" alt="">
                                                                    </div>
                                                                    <div class="grid-img">
                                                                        <img  src="{{asset($categoryProduct->product_image)}}" class="img-responsive"  alt="">
                                                                    </div>
                                                                </a>
                                                            </figure>
                                                        </div>
                                                        <div class="block">
                                                            <div class="starbox small ghosting"> </div>
                                                        </div>
                                                        <div class="women">
                                                            <h6><a href="{{ route('single-product', ['id'=>$categoryProduct->id]) }}">{{ $categoryProduct->product_name }}</a></h6>
                                                            <span class="size">XL / XXL / S </span>
                                                            <p ><em class="item_price">{{ $categoryProduct->product_price }}</em></p>
                                                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                        @foreach($categoryProducts as $categoryProduct)
                                            <div class="product-tab1">
                                                <div class="col-md-4 product-tab1-grid">
                                                    <div class="grid-arr">
                                                        <div  class="grid-arrival">
                                                            <figure>
                                                                <a href="{{ route('single-product', ['id'=>$categoryProduct->id]) }}" class="new-gri" >
                                                                    <div class="grid-img">
                                                                        <img  src="{{asset($categoryProduct->product_image)}}" class="img-responsive" alt="">
                                                                    </div>
                                                                    <div class="grid-img">
                                                                        <img  src="{{asset($categoryProduct->product_image)}}" class="img-responsive"  alt="">
                                                                    </div>
                                                                </a>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6><a href="{{ route('single-product', ['id'=>$categoryProduct->id]) }}">{{ $categoryProduct->product_name }}</a></h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p>{{$categoryProduct->short_description}}</p>
                                                        <p ><em class="item_price">{{$categoryProduct->product_price}}</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!--content-->

@endsection