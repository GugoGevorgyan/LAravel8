@extends('admin.app')
@include('admin.sidebar')
@section('content')
    @stack('sidebar')

    <div class="main-content">
        <!-- CONTENT -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- message -->
                                    @if(Session::has('message'))
                                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                                @endif

                                <!-- Title -->
                                    <h1 class="header-title">
                                        All Product
                                    </h1>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="{{route('product.create')}}" class="btn btn-primary">
                                        {{ __('Create Product') }}
                                    </a>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="card" data-toggle="lists"
{{--                         data-lists-values='["prod-id", "prod-image", "prod-name", "prod-description", "prod-price", "prod-sale", "prod-category", "prod-status"]'--}}
                    >

                        <div class="table-responsive">
                            <table class="table table-sm table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th>
                                        <a href="{{route('product.show','id')}}" class="text-muted " data-sort="prod-id">
                                            id
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted "
{{--                                           data-sort="prod-image"--}}
                                        >
                                            image
                                        </a>
                                    </th>
                                    <th>
                                        <a href="{{route('product.show','name')}}" class="text-muted" data-sort="prod-name">
                                            Name
                                        </a>
                                    </th>
                                    <th>
                                        <a href="{{route('product.show','description')}}" class="text-muted" data-sort="prod-description">
                                            Description
                                        </a>
                                    </th>
                                    <th>
                                        <a href="{{route('product.show','price')}}" class="text-muted" data-sort="prod-price">
                                            Price
                                        </a>
                                    </th>
                                    <th>
                                        <a href="{{route('product.show','sale')}}" class="text-muted" data-sort="prod-sale">
                                            Sale
                                        </a>
                                    </th>
                                    <th>
                                        <a href="" class="text-muted"
{{--                                           data-sort="prod-category"--}}
                                        >
                                            Category
                                        </a>
                                    </th>
                                    <th>
                                        <a href="{{route('product.show','status')}}" class="text-muted " data-sort="prod-status">
                                            Status
                                        </a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody class="list">
                                @foreach($products as $product)
                                    <tr>
                                        <td class="prod-id">
                                            {{$product->id}}
                                        </td>
                                        <td class="prod-image">
                                            <img class="" src="{{asset('storage/images/'.$product->img)}}"
                                                 alt="{{$product->name}}">
                                        </td>
                                        <td class="prod-name">
                                            {{$product->name}}
                                        </td>
                                        <td class="prod-description">
                                            {{$product->description}}
                                        </td>
                                        <td class="prod-price">
                                            {{--                                            @if($product->old_price)--}}
                                            {{--                                                <strike class="old_price"><p>${{$product ->old_price}}</p></strike>--}}
                                            {{--                                            @endif--}}
                                            ${{$product->price}}
                                        </td>
                                        <td class="prod-sale">
                                            @if($product->sale)
                                               ${{$product ->sale}}
                                            @endif
                                        </td>
                                        <td class="prod-category">
                                            @if($product ->categories)
                                                @foreach($product ->categories as $category)
                                               <p>{{$category->name}}</p>
                                                @endforeach
                                            @endif
                                        </td>

                                        <td class="prod-status">
                                            @if($product->status)
                                                <div class="badge badge-soft-success">
                                                    {{$product->status}}
                                                </div>
                                            @else
                                                <div class="badge badge-soft-danger">
                                                    {{$product->status}}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="">
                                            <div class="dropdown">
                                                <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                   data-boundary="window">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-item d-flex flex-column">
                                                        <form action="{{route('admin.prduct.status',$product->id)}}" method="post"
                                                              class="py-2">
                                                            @csrf
                                                            @method('PUT')
                                                            @if(!$product->status)
                                                                <input type="submit" value="Activate"
                                                                       class="btn btn-success w-100">
                                                            @else
                                                                <input type="submit" value="Deactivate"
                                                                       class="btn  btn-warning w-100">
                                                            @endif

                                                        </form>

                                                    {{--                     delete     --}}
                                                    <!-- Button trigger modal -->
                                                        <a href="{{route("product.edit",$product->id)}}" class="py-2">
                                                            <input type="submit" value="Edit"
                                                                   class="btn btn-primary w-100">
                                                        </a>
                                                        <div class="py-2">
                                                            <input type="button" value="Delete"
                                                                   class="btn btn-danger w-100" data-toggle="modal"
                                                                   data-target="#deleteModalProduct{{$product->id}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--                                                            modal Delete--}}
                                            <div class="modal fade" id="deleteModalProduct{{$product->id}}" tabindex="-1" role="dialog"
                                                 aria-labelledby="deleteModalProductLabel{{$product->id}}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalProductLabel{{$product->id}}">Delete
                                                                product
                                                                "{{$product->name}} "</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body row display-4">
                                                            do you really want to delete .<p
                                                                class="text-danger"> {{$product->name}} </p>
                                                            ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">NO
                                                            </button>
                                                            <form action="{{route("product.destroy",$product->id)}}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger">YES
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--                                                                  / modal delete--}}
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-end py-5">
                            <div class="col-6 d-flex justify-content-end ">
                                {{ $products->onEachSide(1)->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->


@endsection
