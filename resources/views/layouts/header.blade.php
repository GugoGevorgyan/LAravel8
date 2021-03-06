@push('header')
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm pb-3 m-0">
        <div class="container-lg pb-lg-1">
            <a class="container col-md-1 col-2 p-0 m-0" href="{{route('home.index')}}">
                <img src="{{asset('storage/images/MGlogo.png')}}" class="img-fluid navbar-brand" alt="logo">
            </a>
            <!-- @media -->

            <ul class="navbar-toggler  list-unstyled d-lg-none  d-sm-flex m-0 border-0 p-0">
                <li class="media_heart container">
                    <a href="{{route('home.show','favorites')}}" class="text-decoration-none">
                        <img class="img_heart" src="{{asset('storage/images/add-to-favorites.png')}}" alt="">
                    </a>
                </li>
                <li class="container p-md-3 p-0">
                    <a href="{{route('cart')}}" class="text-decoration-none">
                        <img class="img_heart" src="{{asset('storage/images/Cart-with-plus.png')}}" alt="">
                    </a>
                </li>
                <li class="container p-0 pl-md-3 nav-item dropdown dropleft">
                    <a class="nav-link" id="dropDownMenuMedia" role="button"
                       data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                        <img class="img_heart" src="{{asset('storage/images/menu-alt-2.png')}}" alt="">
                    </a>
                    <div class="dropdown-menu border-0 bg-white p-0 transform106" aria-labelledby="dropDownMenuMedia">
                        <ul class="dropdown-item container flex_column bg-white p-0">
                            <li class="list-unstyled col-12 d-flex justify-content-end pb-3 pt-3 mt-1 mb-1 pr-3">
                                <img class="pr-1" src="{{asset('storage/images/menu-alt2-2.png')}}" alt="menu">
                            </li>
                            @if(!empty($categories))

                                @foreach ($categories as $category)
                                    @if (!$category->category)
                                        <li class="dropdown-submenu p-0 mb-1 w-100">
                                            <a class="container text-muted media_subMenu flex-nowrap pl-4 pr-5 pb-3 pt-3 font-weight-bold"
                                               tabindex="-1" href="#">
                                                <div class="pr-3 mr-4 pl-3">
                                                    {{$category->name}}
                                                </div>
                                                <span class="fa fa-angle-right ml-1 pl-5"></span>
                                            </a>
                                            <ul class="dropdown-menu m-0 border-0 rounded-0 pl-5 ml-1 p-0 position-static float-none">
                                                @foreach ($subCategories as $subCategory)
                                                    @if ($subCategory->subCategory && $subCategory->name === $category->name)
                                                        @foreach($subCategory->subCategory as $sub)
                                                            <li class="pt-3 pb-3"><a class="text-muted" tabindex="-1"
                                                                                     href="{{url('prod/'.$sub->name)}}">{{$sub->name}}</a>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>

                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </li>
            </ul>

            <div class="collapse navbar-collapse pt-5" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-6 justify-content-around">
                    @if(!empty($categories))
                        @foreach ($categories as $category)
                            @if (!$category->category)
                                <li class="drop nav-item dropdown col-3  d-flex flex-row align-items-center p-0 justify-content-between">
                                    <a class="nav-link p-0 font18_size22" href="{{url('prod/'.$category->name)}}"
                                       id="navbarDropdownMenuLink{{$category->name}}">
                                        {{$category->name}}
                                    </a>
                                    <img class="h-50" src="{{asset('storage/images/Vector.png')}}" alt=">">
{{--                                    {{dd($category)}}--}}
                                    <div class=" dropdown-menu border-0 bg-transparent m-0 pt-4 swing">
                                        <div class="dropdown-menu m-0 menu_txt text-dark p-0 top menu_Accesories"
                                             aria-labelledby="navbarDropdownMenuLink{{$category->name}}">
                                            @foreach ($subCategories as $subCategory)
                                                @if ($subCategory->subCategory && $subCategory->name === $category->name)
                                                    @foreach($subCategory->subCategory as $sub)
                                                        <a class="dropdown-item d-flex  align-items-center"
                                                           href="{{url('prod/'.$sub->name)}}">{{$sub->name}}</a>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="col-6 p-0 pl-3 pr-1 navbar-nav  justify-content-around ">
                    <li class="container search overflow-hidden col-9 pb-1 pt-2 border border-dark">
                        <div class="input-group rounded">
                            <input type="search" class="form-control border-0 rounded" placeholder="Search"
                                   aria-label="Search"
                                   aria-describedby="search-addon"/>
                            <span class="input-group-text bg-white border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </li>
                    <li class="nav-item dropdown col-1 p-0">
                        <a class="nav-link menu_ellipse h-100" href="#" id="DropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="dropdown-menu" aria-labelledby="DropdownMenuLink" id="hidden_menu">
                            <div class="dropdown-item flex_column just_around d-flex ">
                                <a href="{{route('home.show','favorites')}}" class="text-decoration-none">
                                    <div class="flex_row d-flex  align-items-center menu_content">
                                        <img class="menu_icon" src="{{asset('storage/images/Cart-with-plus.png')}}"
                                             alt="Favorites">
                                        <p class="menu_txt text-dark">Favorites</p>
                                    </div>
                                </a>
                                <a href="{{route('cart')}}" class="text-decoration-none">
                                    <div class="flex_row d-flex  align-items-center menu_content">

                                        <img class="menu_icon" src="{{asset('storage/images/add-to-favorites.png')}}"
                                             alt="Cart">


                                        <p class="menu_txt text-dark">
                                            Cart </p>
                                        <p id="total_qty">@if(Session::has('cart') && Session::get('cart')->total_qty)({{Session::get('cart')->total_qty}})@endif</p>
                                    </div>
                                </a>
                                <div class="flex_row  justify-content-between menu_content">
                                    <p class="menu_txt text-dark"> Currency</p>
                                    <div class="center">
                                        <div class="menu_img">
                                            <input type="radio" id="amd" name="Currency" value="AMD"
                                                   class="radio_input_menu" role="button">
                                            <label class="menu_txt text-dark" for="amd">AMD</label>
                                        </div>

                                        <div class="menu_img">
                                            <input type="radio" id="usd" name="Currency" value="USD"
                                                   class="radio_input_menu" role="button">
                                            <label class="menu_txt text-dark" for="usd">USD</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex_row justify-content-between menu_content">
                                    <p class="menu_txt text-dark"> Language</p>
                                    <div class="center">
                                        <div class="menu_img">
                                            <input type="radio" id="usa" name="Language" value="usa"
                                                   class="radio_input_menu" role="button">
                                            <label for="usa"><img src="{{asset('storage/images/usa.png')}}"
                                                                  alt="usa"></label>
                                        </div>

                                        <div class="menu_img">
                                            <input type="radio" id="arm" name="Language" value="arm"
                                                   class="radio_input_menu" role="button">
                                            <label for="arm"><img src="{{asset('storage/images/arm.png')}}"
                                                                  alt="arm"></label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

@endpush
