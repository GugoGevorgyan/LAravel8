@extends('layouts.app')
@include('home.macbook')
@include('home.subscribe')
@section('content')
    <div class="center">
        @stack('macbook')
        <div class="evenly p-0 pt-5 pb-md-5 center container-md container-fluid">
            <h2 class="popular_text">Popular Categories</h2>
            <div class="d-flex flex-row pt-5 flex-wrap container">
                @for ($i = 0; $i < count($imgs) ; $i++)
                    <figure class="col-xl-2 p-0 col-md-4 col-sm-6 position-static ">
                        <div class="d-flex rounded-circle  popular_categories_img center container">
                            <img src="{{asset('storage/images/'.$imgs[$i])}}" alt="photo">
                        </div>
                        <figcaption class="d-flex justify-content-center pt-2 pt-md-4 ">{{$figcaption[$i]}}</figcaption>
                    </figure>
                @endfor
            </div>
        </div>

        <div class="w-100 h-500 Rectangle Rectangle2 d-flex justify-content-end align-items-center">
            <div class="description text-white d-flex container-md container-fluid">
                <div class="text-white description_name ">
                    <p class="font-weight-lighter">TURN THE</p>
                    <p class="font-weight-bold">WORLD</p>
                </div>
                <div>
                    <div class='d-flex justify-content-sm-end align-items-baseline'>
                        <p class="font-weight-lighter display-4 mr-2 d-none d-lg-block ">UPSIDE</p>
                        <p class="display-2 down">DOWN</p>
                    </div>
                    <div>
                        <p class="font-weight-lighter h4 mr-2">WITH BRAND NEW</p>
                        <p class="font-weight-normal  description_name mb-3">HEADPHONES</p>
                    </div>
                </div>
                <button type="button" class="bg-white  explore border-0">
                    EXPLORE
                </button>
            </div>
        </div>
        <div class="center w-100 container pt-4">
            <div class="position-relative row">
                <h3 class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4 pb-4 container">Hot Sales</h3>
                <div class="container pb-4">
                    <div class="line"></div>


                    <div class="row container ">
                        <div class="col-6 d-flex justify-content-end" id="vectors">
                            {{ $hot_sales->links() }}
                        </div>
                    </div>

                </div>
                <div class="container">
                    <div class="evenly row">
                        @foreach($hot_sales as $sales)
                            <div class="col-xl-3 p-md-3 p-2  col-md-4 col-sm-6  disp2-none">
                                <div class="hot_sales_imgs_container   just_around ">
                                    <div class="d-flex flex-row position-relative h-15">
                                        @if($sales -> sale)
                                            <div class="yes_sale text-white position-absolute bg-danger center"> Sale
                                            </div>
                                        @endif
                                        <div class="heart">
                                            <img class="img_heart"
                                                 src="{{asset('storage/images/add-to-favorites.png')}}"
                                                 alt="favorites">
                                        </div>
                                    </div>
                                    <div class="hot_sales_img center mt-4">
                                        <img class="container" src="{{asset('storage/images/'.$sales->img)}}"
                                             alt="computers">
                                    </div>
                                    <div class="container">
                                        <div class="align-items-end d-flex flex-row">
                                            @if($sales -> sale)
                                                <p class="price_sale text-danger">${{$sales ->sale}}</p>
                                                <strike class="old_price"><p>${{$sales ->price}}</p></strike>
                                            @else
                                                <p class="price_sale" style="color: #151414 !important;">
                                                    ${{$sales ->price}}</p>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="sales_name">{{$sales ->name}} </p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around container pb-1">
                                        <button type="button"
                                                class="order_now   bg-dark   center sales_name text-white col-md-9 col-10 p-0">
                                            <a href="{{route('ordernow',$sales->id)}}" class="text-decoration-none text-white">ORDER NOW</a>
                                        </button>
                                        <a href="#"><img src="{{asset('storage/images/Cart-with-plus.png')}}"
                                                         alt="paiment"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                {{--             computers   --}}

                <div class="all_computers container">
                    <div class="d-block text-dark"><h3
                            class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4">
                            {{$productCategory }}</h3>
                    </div>
                    <div class="just_between flex-row pb-4 pt-2">
                        <div class="d-flex flex-row justify-content-between col-lg-6 col-md-12 p-0">

                            @foreach ($subCategories as $subCategory)
                                @if ($subCategory->subCategory && $subCategory->name === $productCategory)
                                    @foreach($subCategory->subCategory as $sub)
                                        <a @if($sub->name === $prod) class="p-0 text-danger" @else class="p-0"
                                           @endif class="p-0"
                                           href="{{route('prod.index',$sub->name)}}">{{$sub->name}}</a>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                        <div class="see_more ">
                            <a class=" " href="{{url('prod/'.$productCategory)}}">see more</a>
                        </div>
                    </div>
                </div>
                <div class="container pb-4">
                    <div class="line"></div>
                    <div class="row container ">
                        <div class="col-6 d-flex justify-content-end" id="vectors">
                            {{ $computers->onEachSide(1)->links() }}
                        </div>
                    </div>

                    {{--                    <div class="vector_left_container  d-md-flex d-none center"><a href="#">--}}
                    {{--                            <img class="vector_left" src="{{asset('storage/images/Vector.png')}}" alt="">--}}
                    {{--                        </a></div>--}}
                    {{--                    <div class="vector_right_container center d-md-flex d-none"><a href="#">--}}
                    {{--                            <img class="vector_right" src="{{asset('storage/images/Vector.png')}}" alt="">--}}
                    {{--                        </a></div>--}}
                </div>
                <div class="container pb-md-0 pb-5">
                    <div class="evenly row">
                        @foreach($computers as $computer)
                            <div class="col-xl-3 p-md-3 p-2 col-md-4 col-sm-6">
                                <div class="hot_sales_imgs_container just_around">
                                    @csrf
                                    <div class="d-flex flex-row position-relative h-15">
                                        @if($computer -> sale)
                                            <div class="yes_sale text-white position-absolute bg-danger center"> Sale
                                            </div>
                                        @endif
                                        <div class="heart">
                                            <img class="img_heart"
                                                 src="{{asset('storage/images/add-to-favorites.png')}}"
                                                 alt="favorites">
                                        </div>
                                    </div>
                                    <div class="hot_sales_img center mt-4">
                                        <img class="container" src="{{asset('storage/images/'.$computer->img)}}"
                                             alt="computers">
                                    </div>
                                    <div class="container">
                                        <div class="align-items-end d-flex flex-row">
                                            @if($computer -> sale)
                                                <p class="price_sale text-danger">${{$computer ->sale}}</p>
                                                <strike class="old_price"><p>${{$computer ->price}}</p></strike>
                                            @else
                                                <p class="price_sale" style="color: #151414 !important;">
                                                    ${{$computer ->price}}</p>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="sales_name">{{$computer ->name}} </p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around container">
                                        <button type="button"
                                                class="order_now bg-dark center sales_name text-white  col-10 col-md-9 p-0">
                                            <a href="{{route('ordernow',$computer->id)}}" class="text-decoration-none text-white">ORDER NOW</a>
                                        </button>
                                        <a href="#"><img src="{{asset('storage/images/Cart-with-plus.png')}}"
                                                         alt="paiment"></a>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>

                </div>

                <P class="justify-content-sm-center d-flex d-lg-block popular_text  pt-5  container">Brands we
                    deliver</P>
                <div class="container row p-0 ">
                    <div class="owl-carousel pb-lg-5 owl-theme  container" id="owl_1">
                        @foreach($brands as $brand)
                            <div class="item center p-3">
                                <img class="w-auto" src="{{asset('storage/images/'.$brand)}}" alt="{{$brand}}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @stack('subscribe')
    </div>


@endsection
