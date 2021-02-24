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
                                        Categories
                                    </h1>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="{{url('categorie/create')}}" class="btn btn-primary">
                                        {{ __('Create Categorie / SubCategorie') }}
                                    </a>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="card" data-toggle="lists"
                         data-lists-values='["categorie-id", "categorie-name",  "categorie-parent"]'>

                        <div class="table-responsive">
                            <table class="table table-sm table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="categorie-id">
                                            id
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="categorie-name">
                                            Name
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="categorie-parent">
                                            Parent Categorie
                                        </a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody class="list">
                                @foreach($categories as $categorie)
                                    <tr>
                                        <td class="categorie-id">
                                            {{$categorie->id}}
                                        </td>
                                        <td class="categorie-name">
                                            {{$categorie->name}}
                                        </td>
                                        <td class="categorie-parent">
                                            {{$categorie->parent}}
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
                                                    {{--                delete          --}}
                                                    <!-- Button trigger modal -->
                                                        <a href="{{asset("categorie/{$categorie->id}/edit")}}" class="py-2">
                                                            <input type="submit" value="Edit" class="btn btn-primary w-100" >
                                                        </a>
                                                        <div class="py-2">
                                                            <input type="button" value="Delete"
                                                                   class="btn btn-danger w-100" data-toggle="modal"
                                                                   data-target="#deleteModalProduct">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--                                                            modal Delete--}}
                                            <div class="modal fade" id="deleteModalProduct" tabindex="-1" role="dialog"
                                                 aria-labelledby="deleteModalProductLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalProductLabel">Delete
                                                                product
                                                                "{{$categorie->name}} "</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body row display-4">
                                                            do you really want to delete .<p
                                                                class="text-danger"> {{$categorie->name}} </p>
                                                            ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">NO
                                                            </button>
                                                            <form action="{{url("categorie/{$categorie->id}")}}" method="post">
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
                    </div>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->


@endsection
