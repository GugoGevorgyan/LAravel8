<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,500,800" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
          crossorigin="anonymous"/>
    <!-- Styles -->

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <main>
        <div class="container-md container-fluid p-sm-0 p-1">
        <div class="container center col-12 col-lg-6 col-md-10 pl-sm-2 pr-sm-2 p-sm-0 p-3">
            <div class="col-12 col-sm-11 bg-white p-sm-3 p-0 m-0">
                <div class="center">
                    <h6 class="font29_size24 pt-5 m-0 mt-2 position-absolute top_0">Shipping Address</h6>
                    <div class="pb-4 mb-1 m-sm-0 pt-3 pt-sm-0">
                        <img src="{{asset('storage/images/pana.jpg')}}" alt="shipping">
                    </div>
                </div>
                <form class="pr-sm-4 pl-sm-4 pr-3 pl-3  shipping_text" method="get" action='{{route('home.index')}}'>
                    <div class="mr-1 ml-1 m-sm-0 bg-white">
                        <div class="flex-wrap center">
                            <div class="col-12 p-0 m-0 d-flex flex-wrap">
                                <div class="d-flex flex-wrap pr-2 pl-2 m-0 col-6">
                                    <div class="border-bottom w-100 pt-3 pl-2">
                                        <label for="firstName" class="ml-1 mt-1 m-0 d-block">First Name</label>
                                        <input type="text" class="d-block border-0 w-100 p-0 m-0" id="firstName"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap pl-2 pr-2 m-0 col-6">
                                    <div class="border-bottom w-100 pt-3 pl-2 text-left">
                                        <label for="lastName" class="ml-1 mt-1 m-0 d-block">Last Name</label>
                                        <input type="text" class="d-block border-0 w-100 p-0 m-0" id="lastName"
                                               placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-wrap center">
                            <div class="col-12 p-0 m-0 d-flex flex-wrap">
                                <div class=" pr-2 pl-2 m-0 col-6">
                                    <div class="border-bottom w-100 pt-3 pb-3 pl-2">
                                        <label for="country" class="ml-1 mt-1 m-0 d-block"></label>
                                        <select id="country" class="col-10 d-block bg-white border-0 w-100 p-0 m-0">
                                            <option selected>Country</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=" pl-2 pr-2 m-0 col-6">
                                    <div class="border-bottom w-100 pt-3 pb-3 pl-2 text-left">
                                        <label for="state" class="ml-1 mt-1 m-0 d-block"></label>
                                        <select id="state" class="col-10 d-block bg-white border-0 w-100 p-0 m-0">
                                            <option selected>State</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-wrap center">
                            <div class="col-12 p-0 m-0 d-flex flex-wrap">
                                <div class=" pr-2 pl-2 m-0 col-6">
                                    <div class="border-bottom w-100 pt-3 pb-3 pb-lg-4 pl-2">
                                        <label for="city" class="ml-1 mt-1 m-0 d-block"></label>
                                        <select id="city" class="col-10 d-block bg-white border-0 w-100 p-0 m-0">
                                            <option selected>City</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=" pl-2 pr-2 m-0 col-6">
                                    <div class="border-bottom w-100 pt-3 pl-2 text-left">
                                        <label for="zipCode" class="ml-1 mt-1 m-0 d-block">Zip Code</label>
                                        <input type="text" class="d-block border-0 w-100 p-0 m-0" id="zipCode">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-wrap center">
                            <div class="col-12 p-0 m-0 d-flex flex-wrap">
                                <div class=" pr-2 pl-2 m-0 col-12">
                                    <div class="border-bottom w-100 pt-3 pl-2">
                                        <label for="email" class="ml-1 mt-1 m-0 d-block">E-Mail</label>
                                        <input type="email" class="d-block border-0 w-100 p-0 m-0" id="email">
                                    </div>
                                </div>
                                <div class=" pr-2 pl-2 m-0 col-12">
                                    <div class="border-bottom w-100 pt-3 pl-2">
                                        <label for="phone" class="ml-1 mt-1 m-0 d-block">Phone Number</label>
                                        <input type="number" class="d-block border-0 w-100 p-0 m-0" id="phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 pb-5 pl-lg-2 pr-lg-3 mt-2 mb-2 d-flex justify-content-center">
                                <button type="reset" class="btn focus rounded-pill capitalize pt-2 pb-2 pb-md-3 pt-md-3 col-5">
                                    <a href="{{ route('cart')}}" class="text-decoration-none text-dark">Cancel</a></button>
                            <button type="submit" class="btn rounded-pill btn-dark uppercase pt-2 pb-2 pb-md-3 pt-md-3 col-5">save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </main>

</div>
</body>
</html>
