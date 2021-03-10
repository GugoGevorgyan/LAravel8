@extends('layouts.app')
@include('home.subscribe')
@section('content')
    <div class="center">
        <div class="container-md container-fluid pt-lg-5 p-0">
            <div class="container col-12 m-0 pb-lg-5 p-0 d-flex flex-lg-row flex-column position-static" id="cart">
                <div class="col-lg-8 col-12 m-0 row position-static d-lg-block d-flex flex-row">
                    @if(!empty($cart->items))
                        @foreach($cart->items as $product)
                            <div class="pt-3 pb-2 pr-2 pl-0 col-lg-12 col-6 m-0 position-static">
                                <div class="d-flex flex-lg-row flex-column align-items-lg-start col-12 p-lg-0
                                    pt-lg-4 pb-lg-4 m-0 rounded shadow position-static" id="cart-container">
                                    <div class="container col-lg-1 pb-lg-0 pb-4 col-12 m-0 center order-lg-0 order-2">
                                        <input checked type="checkbox" name="cart"
                                               class="radio_input appearance p-2 rounded-circle"
                                               value="@if($product['product']->sale){{$product['product']->sale}}@else{{$product['product']->price}} @endif">
                                    </div>
                                    <div class="container p-0 pt-lg-0 pt-4 col-lg-4 col-12 m-0 position-static
                                        order-lg-1 order-0">
                                        <div class="hot_sales_img center">
                                            <img class="container p-0"
                                                 src="{{asset('storage/images/'.$product['product']->img)}}"
                                                 alt="computers">
                                        </div>
                                    </div>
                                    <div class="d-lg-block d-flex flex-column-reverse
                                        container p-0 col-lg-4 col-12 m-0 position-static order-lg-2 order-1">
                                        <div>
                                            <div>
                                                <p class="font29_size24 text-cart">{{$product['product']->name}}</p>
                                            </div>
                                            <div class="d-flex flex-column pt-lg-2 pb-3 font_16_20 text-cart">
                                                <p class="">{{$product['product']->description}}</p>
                                                <p> Color: black</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="container p-0 pt-lg-0 pb-lg-0 pt-1 pb-1 ">
                                                <div class="align-items-end d-flex flex-row">
                                                    @if($product['product']->sale)
                                                        <p class="price_sale text-danger">
                                                            ${{$product['product']->sale}}</p>
                                                        <strike class="old_price"><p>${{$product['product']->price}}</p>
                                                        </strike>
                                                    @else
                                                        <p class="price_sale" style="color: #151414 !important;">
                                                            ${{$product['product']->price}}</p>
                                                    @endif


                                                    {{--                                            <p class="price_sale text-danger ">${{$computers[1]->sale}}</p>--}}
                                                    {{--                                            <strike class="old_price"><p>${{$computers[0]->price}}</p></strike>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container pl-3 pr-2 p-0 col-lg-3 col-12 m-0 position-static order-lg-3">
                                        <div class="d-lg-flex d-none flex-row justify-content-between">
                                            <div class="font_16_20 pr-3 pl-3 text-white bg-danger center"> Sale</div>
                                            <div class="pr-3">
                                                <img class=""
                                                     src="{{asset('storage/images/add-to-favorites.png')}}"
                                                     alt="favorites">
                                            </div>
                                        </div>
                                        <div class="pt-5" id="cart-delete">
                                            <a href="" class="btn btn-success">delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    {{--                    two--}}
                    {{--                    <div class="pt-3 pb-3 pr-2 pl-0 col-lg-12 col-6 m-0 position-static">--}}
                    {{--                        <div--}}
                    {{--                            class="d-flex flex-lg-row flex-column align-items-lg-start col-12 p-lg-0 pt-lg-4 pb-lg-4 m-0 rounded shadow position-static">--}}
                    {{--                            <div class="container col-lg-1 pb-lg-0 pb-4 col-12 m-0 center order-lg-0 order-2">--}}
                    {{--                                <input type="radio" name="cart" class="radio_input appearance p-2 rounded-circle ">--}}
                    {{--                            </div>--}}
                    {{--                            <div--}}
                    {{--                                class="container p-0 pt-lg-0 pt-4 col-lg-4 col-12 m-0 position-static order-lg-1 order-0">--}}
                    {{--                                <div class="hot_sales_img center">--}}
                    {{--                                    <img class="container p-0" src="{{asset('storage/images/computer.png')}}" alt="computers">--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="d-lg-block d-flex flex-column-reverse--}}
                    {{--                                        container p-0 col-lg-4 col-12 m-0 position-static order-lg-2 order-1">--}}
                    {{--                                <div>--}}
                    {{--                                    <div>--}}
                    {{--                                        <p class="font29_size24 text-cart">HP proBook 4530s</p>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="d-flex flex-column pt-lg-2 pb-3 font_16_20 text-cart">--}}
                    {{--                                        <p class="">15-inch display </p>--}}
                    {{--                                        <p> Color: black</p>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="container p-0 pt-lg-0 pb-lg-0 pt-1 pb-1 ">--}}
                    {{--                                        <div class="align-items-end d-flex flex-row">--}}

                    {{--                                            @if($computers[1]->sale)--}}
                    {{--                                                <p class="price_sale text-danger">${{$computers[1]->sale}}</p>--}}
                    {{--                                                <strike class="old_price"><p>${{$computers[1]->price}}</p></strike>--}}
                    {{--                                            @else--}}
                    {{--                                                <p class="price_sale" style="color: #151414 !important;">--}}
                    {{--                                                    ${{$computers[1]->price}}</p>--}}
                    {{--                                            @endif--}}

                    {{--                                            <p class="price_sale ">${{$computers[1] ->sale}}</p>--}}
                    {{--                                            <strike class="old_price d-none"><p>${{$computers[0] ->price}}</p>--}}
                    {{--                                            </strike>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="container pl-3 pr-2 p-0 col-lg-3 col-12 m-0 position-static order-lg-3">--}}
                    {{--                                <div class="d-lg-flex d-none flex-row justify-content-end">--}}
                    {{--                                    <div class="d-none font_16_20 pr-3 pl-3 text-white bg-danger center"> Sale</div>--}}
                    {{--                                    <div class="pr-3">--}}
                    {{--                                        <img class=""--}}
                    {{--                                             src="{{asset('storage/images/add-to-favorites.png')}}"--}}
                    {{--                                             alt="favorites">--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>

                {{--                Summary     --}}

                <div class="container col-lg-4 col-12 m-0 p-0 position-static">
                    <div class="container-lg container-fluid  m-0 pt-lg-3 pb-lg-3 pr-lg-0 pl-lg-3">
                        <div class="container shadow shadow_none pr-4 pl-4">
                            <form method="get" action="{{route('shipping')}}">
                                <div class="pt-4 pb-3">
                                    <h2 class="font-weight-bold m-0 font29_size24">Summary</h2>

                                </div>
                                <div class="d-flex flex-column border-top font18_size22 summary_content">
                                    <div class="d-flex flex-row justify-content-between pt-3 pb-2">
                                        <div class="">
                                            <p> Total</p>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <p class="text-uppercase">us $</p>
                                            </div>
                                            <div>
                                                <p>
                                                    @if(!empty($cart)){{$cart->getTotalPrice()}}@endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between  pt-2 pb-2">
                                        <div class="d-flex flex-row align-items-start">
                                            <input type="radio" id="shipping" name="cart"
                                                   value="20"
                                                   class="radio_input appearance p-2 rounded-circle m-0 mr-2">
                                            <label class="" for="shipping">Shipping</label>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <p class="text-uppercase">us $</p>
                                            </div>
                                            <div>
                                                <p>
                                                    20
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between pt-2 pb-2 pb-lg-5">
                                        <div class="d-flex flex-row align-items-start">
                                            <input type="radio" id="sale" name="cart"
                                                   value="10" checked
                                                   class="radio_input appearance p-2 rounded-circle m-0 mr-2">
                                            <label class="pb-3" for="sale">Sale</label>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <p class="text-uppercase">us $</p>
                                            </div>
                                            <div>
                                                <p>
                                                    10
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-between border-top pt-3">
                                    <div>
                                        <h2 class="text-dark font29_size24">Subtotal</h2>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <h2 class="text-dark font29_size24 text-uppercase">us $</h2>
                                        <h2 class="text-dark font29_size24" id="totalPrice">@if(!empty($cart))
                                                {{$cart->getTotalPrice() + 10}}@endif</h2>
                                    </div>
                                </div>
                                <div class="container-fluid p-0 d-flex justify-content-end pt-4 pb-lg-4 pb-5">
                                    <button type="submit" class="order_now bg-dark center sales_name
                                        text-white col-lg-7 col-7 p-0 pb-lg-0 pt-lg-0 pt-3 pb-3 text-uppercase">checkout
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--                   similar Items               --}}

                <div class="d-lg-none center w-100 container p-0 pt-4 pb-5 position-relative">
                    <div class="all_computers container">
                        <div class="d-none d-lg-block"><h3
                                class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4 pb-4">Similar
                                Items</h3></div>
                        <div class="d-block d-lg-none"><h3
                                class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4 pb-4">Recommended
                                for you</h3></div>
                    </div>
                    <div class="container pb-4">
                        <div class="line"></div>
                        <div class="vector_left_container  d-lg-flex d-none center"><a href="#">
                                <img class="vector_left" src="{{asset('storage/images/Vector.png')}}" alt="">
                            </a></div>
                        <div class="vector_right_container center d-lg-flex d-none"><a href="#">
                                <img class="vector_right" src="{{asset('storage/images/Vector.png')}}" alt="">
                            </a></div>
                    </div>

                    <div class="evenly d-flex flex-row flex-wrap container p-0">

                        @foreach($similar as $computer)
                            <div class="col-xl-3 p-3   col-md-4 col-sm-6  disp2-none">
                                <div class="hot_sales_imgs_container just_around ">
                                    <div class="d-flex flex-row position-relative h-15">
                                        @if($computer -> sale)
                                            <div class="yes_sale text-white position-absolute bg-danger center"> Sale
                                            </div>
                                        @endif
                                        <div class="heart" data-id="{{$computer->id}}">
                                            <div
                                                class="black-heart {{!empty($computer->users->first()->pivot->favorite) ? '' : 'd-none'}}"></div>
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
                                            @if($computer->sale)
                                                <p class="price_sale text-danger">${{$computer->sale}}</p>
                                                <strike class="old_price"><p>${{$computer->price}}</p></strike>
                                            @else
                                                <p class="price_sale" style="color: #151414 !important;">
                                                    ${{$computer->price}}</p>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="sales_name">{{$computer->name}} </p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around container">
                                        <button type="button"
                                                class="order_now bg-dark center sales_name text-white col-md-9  col-10 p-0">
                                            <a href="{{route('ordernow',$computer->id)}}"
                                               class="text-decoration-none text-white">ORDER NOW</a>
                                        </button>
                                        <a href="#"><img src="{{asset('storage/images/Cart-with-plus.png')}}"
                                                         alt="paiment"></a>

                                    </div>

                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </div>
@endsection
