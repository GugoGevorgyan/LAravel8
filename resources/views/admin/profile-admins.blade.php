@extends('admin.app')
@include('admin.sidebar')
@section('content')

    <div class="modal fade fixed-right" id="modalDemo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-vertical" role="document">
            <form class="modal-content" id="demoForm">
                <div class="modal-body">

                    <!-- Close -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="text-center">
                        <img src="{{asset('vendor/admin/assets/img/illustrations/designer-life.svg')}}" alt="..."
                             class="img-fluid mb-3">
                    </div>

                    <h2 class="text-center mb-2">
                        Make Dashkit Your Own
                    </h2>

                    <p class="text-center mb-4">
                        Set preferences that will be cookied for your live preview demonstration.
                    </p>

                    <hr class="mb-4">

                    <h4 class="mb-1">
                        Color Scheme
                    </h4>

                    <p class="small text-muted mb-3">
                        Overall light or dark presentation.
                    </p>

                    <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
                        <label class="btn btn-white active col">
                            <input type="radio" name="colorScheme" id="colorSchemeLight" value="light" checked> <i
                                class="fe fe-sun mr-2"></i> Light Mode
                        </label>
                        <label class="btn btn-white col ml-2">
                            <input type="radio" name="colorScheme" id="colorSchemeDark" value="dark"> <i
                                class="fe fe-moon mr-2"></i> Dark Mode
                        </label>
                    </div>

                    <h4 class="mb-1">
                        Navigation Position
                    </h4>

                    <p class="small text-muted mb-3">
                        Select the primary navigation paradigm for your app.
                    </p>

                    <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
                        <label class="btn btn-white active col">
                            <input type="radio" name="navPosition" id="navPositionSidenav" value="sidenav" checked>
                            Sidenav
                        </label>
                        <label class="btn btn-white col ml-2">
                            <input type="radio" name="navPosition" id="navPositionTopnav" value="topnav"> Topnav
                        </label>
                        <label class="btn btn-white col ml-2">
                            <input type="radio" name="navPosition" id="navPositionCombo" value="combo"> Combo
                        </label>
                    </div>

                    <h4 class="mb-1">
                        Sidebar Color
                    </h4>

                    <p class="small text-muted mb-3">
                        Usually dictated by the color scheme, but can be overriden.
                    </p>

                    <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
                        <label class="btn btn-white active col">
                            <input type="radio" name="sidebarColor" id="sidebarColorDefault" value="default" checked>
                            Default
                        </label>
                        <label class="btn btn-white col ml-2">
                            <input type="radio" name="sidebarColor" id="sidebarColorVibrant" value="vibrant"> Vibrant
                        </label>
                    </div>

                </div>
                <div class="modal-footer border-0">

                    <button type="submit" class="btn btn-block btn-primary mt-auto">
                        Preview
                    </button>

                </div>
            </form>
        </div>
    </div>


    <!-- Modal: Members -->
    <div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title" id="exampleModalCenterTitle">
                                    Add a member
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Close -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-header">

                        <!-- Form -->
                        <form>
                            <div class="input-group input-group-flush input-group-merge">
                                <input type="search" class="form-control form-control-prepended search"
                                       placeholder="Search">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fe fe-search"></span>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-body">

                        <!-- List group -->
                        <ul class="list-group list-group-flush list my--3">
                            <li class="list-group-item px-0">

                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a href="profile-posts.html" class="avatar">
                                            <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-5.jpg')}}"
                                                 alt="..." class="avatar-img rounded-circle">
                                        </a>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Title -->
                                        <h4 class="mb-1 name">
                                            <a href="profile-posts.html">Miyah Myles</a>
                                        </h4>

                                        <!-- Time -->
                                        <p class="small mb-0">
                                            <span class="text-success">●</span> Online
                                        </p>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Button -->
                                        <a href="#!" class="btn btn-sm btn-white">
                                            Add
                                        </a>

                                    </div>
                                </div> <!-- / .row -->

                            </li>
                            <li class="list-group-item px-0">

                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a href="profile-posts.html" class="avatar">
                                            <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-6.jpg')}}"
                                                 alt="..." class="avatar-img rounded-circle">
                                        </a>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Title -->
                                        <h4 class="mb-1 name">
                                            <a href="profile-posts.html">Ryu Duke</a>
                                        </h4>

                                        <!-- Time -->
                                        <p class="small mb-0">
                                            <span class="text-success">●</span> Online
                                        </p>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Button -->
                                        <a href="#!" class="btn btn-sm btn-white">
                                            Add
                                        </a>

                                    </div>
                                </div> <!-- / .row -->

                            </li>
                            <li class="list-group-item px-0">

                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a href="profile-posts.html" class="avatar">
                                            <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-7.jpg')}}"
                                                 alt="..." class="avatar-img rounded-circle">
                                        </a>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Title -->
                                        <h4 class="mb-1 name">
                                            <a href="profile-posts.html">Glen Rouse</a>
                                        </h4>

                                        <!-- Time -->
                                        <p class="small mb-0">
                                            <span class="text-warning">●</span> Busy
                                        </p>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Button -->
                                        <a href="#!" class="btn btn-sm btn-white">
                                            Add
                                        </a>

                                    </div>
                                </div> <!-- / .row -->

                            </li>
                            <li class="list-group-item px-0">

                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a href="profile-posts.html" class="avatar">
                                            <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-8.jpg')}}"
                                                 alt="..." class="avatar-img rounded-circle">
                                        </a>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Title -->
                                        <h4 class="mb-1 name">
                                            <a href="profile-posts.html">Grace Gross</a>
                                        </h4>

                                        <!-- Time -->
                                        <p class="small mb-0">
                                            <span class="text-danger">●</span> Offline
                                        </p>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Button -->
                                        <a href="#!" class="btn btn-sm btn-white">
                                            Add
                                        </a>

                                    </div>
                                </div> <!-- / .row -->

                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Search -->
    <div class="modal fade" id="sidebarModalSearch" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-vertical" role="document">
            <div class="modal-content">
                <div class="modal-body" data-toggle="lists" data-lists-values='["name"]'>

                    <!-- Form -->
                    <form class="mb-4">
                        <div class="input-group input-group-merge">
                            <input type="search" class="form-control form-control-prepended search"
                                   placeholder="Search">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fe fe-search"></span>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- List group -->
                    <div class="my--3">
                        <div class="list-group list-group-flush list">
                            <a href="team-overview.html" class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <img src="{{asset('vendor/admin/assets/img/avatars/teams/team-logo-1.jpg')}}"
                                                 alt="..." class="avatar-img rounded">
                                        </div>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Title -->
                                        <h4 class="text-body mb-1 name">
                                            Airbnb
                                        </h4>

                                        <!-- Time -->
                                        <p class="small text-muted mb-0">
                                            <span class="fe fe-clock"></span>
                                            <time datetime="2018-05-24">Updated 2hr ago</time>
                                        </p>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a href="team-overview.html" class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <img src="{{asset('vendor/admin/assets/img/avatars/teams/team-logo-2.jpg')}}"
                                                 alt="..." class="avatar-img rounded">
                                        </div>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Title -->
                                        <h4 class="text-body mb-1 name">
                                            Medium Corporation
                                        </h4>

                                        <!-- Time -->
                                        <p class="small text-muted mb-0">
                                            <span class="fe fe-clock"></span>
                                            <time datetime="2018-05-24">Updated 2hr ago</time>
                                        </p>

                                    </div>
                                </div> <!-- / .row -->
                            </a>
                            <a href="project-overview.html" class="list-group-item px-0">

                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-4by3">
                                            <img
                                                src="{{asset('vendor/admin/assets/img/avatars/projects/project-1.jpg')}}"
                                                alt="..." class="avatar-img rounded">
                                        </div>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Title -->
                                        <h4 class="text-body mb-1 name">
                                            Homepage Redesign
                                        </h4>

                                        <!-- Time -->
                                        <p class="small text-muted mb-0">
                                            <span class="fe fe-clock"></span>
                                            <time datetime="2018-05-24">Updated 4hr ago</time>
                                        </p>

                                    </div>
                                </div> <!-- / .row -->

                            </a>
                            <a href="project-overview.html" class="list-group-item px-0">

                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-4by3">
                                            <img
                                                src="{{asset('vendor/admin/assets/img/avatars/projects/project-2.jpg')}}"
                                                alt="..." class="avatar-img rounded">
                                        </div>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Title -->
                                        <h4 class="text-body mb-1 name">
                                            Travels & Time
                                        </h4>

                                        <!-- Time -->
                                        <p class="small text-muted mb-0">
                                            <span class="fe fe-clock"></span>
                                            <time datetime="2018-05-24">Updated 4hr ago</time>
                                        </p>

                                    </div>
                                </div> <!-- / .row -->

                            </a>
                            <a href="project-overview.html" class="list-group-item px-0">

                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-4by3">
                                            <img
                                                src="{{asset('vendor/admin/assets/img/avatars/projects/project-3.jpg')}}"
                                                alt="..." class="avatar-img rounded">
                                        </div>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Title -->
                                        <h4 class="text-body mb-1 name">
                                            Safari Exploration
                                        </h4>

                                        <!-- Time -->
                                        <p class="small text-muted mb-0">
                                            <span class="fe fe-clock"></span>
                                            <time datetime="2018-05-24">Updated 4hr ago</time>
                                        </p>

                                    </div>
                                </div> <!-- / .row -->

                            </a>
                            <a href="profile-posts.html" class="list-group-item px-0">

                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-1.jpg')}}"
                                                 alt="..." class="avatar-img rounded-circle">
                                        </div>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Title -->
                                        <h4 class="text-body mb-1 name">
                                            Dianna Smiley
                                        </h4>

                                        <!-- Status -->
                                        <p class="text-body small mb-0">
                                            <span class="text-success">●</span> Online
                                        </p>

                                    </div>
                                </div> <!-- / .row -->

                            </a>
                            <a href="profile-posts.html" class="list-group-item px-0">

                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-2.jpg')}}"
                                                 alt="..." class="avatar-img rounded-circle">
                                        </div>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Title -->
                                        <h4 class="text-body mb-1 name">
                                            Ab Hadley
                                        </h4>

                                        <!-- Status -->
                                        <p class="text-body small mb-0">
                                            <span class="text-danger">●</span> Offline
                                        </p>

                                    </div>
                                </div> <!-- / .row -->

                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Activity -->
    <div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-vertical" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <!-- Title -->
                    <h4 class="modal-title">
                        Notifications
                    </h4>

                    <!-- Close -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                &times;
              </span>
                    </button>

                </div>
                <div class="modal-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush my--3">
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-1.jpg')}}"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Dianna Smiley</strong> shared your post with <strong
                                            class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo
                                            Hess</strong>, and <strong class="text-body">3 others</strong>.
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-2.jpg')}}"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-3.jpg')}}"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Adolfo Hess</strong> commented
                                        <blockquote class="text-body">“I don’t think this really makes sense to do
                                            without approval from Johnathan since he’s the one...”
                                        </blockquote>
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-4.jpg')}}"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-5.jpg')}}"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Miyah Myles</strong> shared your post with <strong
                                            class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen
                                            Rouse</strong>, and <strong class="text-body">3 others</strong>.
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-6.jpg')}}"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-7.jpg')}}"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Glen Rouse</strong> commented
                                        <blockquote class="text-body">“I don’t think this really makes sense to do
                                            without approval from Johnathan since he’s the one...”
                                        </blockquote>
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-8.jpg')}}"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Grace Gross</strong> subscribed to you.
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- NAVIGATION
    ================================================== -->

    @stack('sidebar')


<!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">


        <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
            <div class="container-fluid">

                <!-- Form -->
                <form class="form-inline mr-4 d-none d-md-flex">
                    <div class="input-group input-group-flush input-group-merge" data-toggle="lists"
                         data-lists-values='["name"]'>

                        <!-- Input -->
                        <input type="search" class="form-control form-control-prepended dropdown-toggle search"
                               data-toggle="dropdown" placeholder="Search" aria-label="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fe fe-search"></i>
                            </div>
                        </div>

                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-card">
                            <div class="card-body">

                                <!-- List group -->
                                <div class="list-group list-group-flush list my--3">
                                    <a href="team-overview.html" class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/teams/team-logo-1.jpg')}}"
                                                        alt="..." class="avatar-img rounded">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Title -->
                                                <h4 class="text-body mb-1 name">
                                                    Airbnb
                                                </h4>

                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 2hr ago</time>
                                                </p>

                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a href="team-overview.html" class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/teams/team-logo-2.jpg')}}"
                                                        alt="..." class="avatar-img rounded">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Title -->
                                                <h4 class="text-body mb-1 name">
                                                    Medium Corporation
                                                </h4>

                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 2hr ago</time>
                                                </p>

                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a href="project-overview.html" class="list-group-item px-0">

                                        <div class="row align-items-center">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar avatar-4by3">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/projects/project-1.jpg')}}"
                                                        alt="..." class="avatar-img rounded">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Title -->
                                                <h4 class="text-body mb-1 name">
                                                    Homepage Redesign
                                                </h4>

                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 4hr ago</time>
                                                </p>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                    <a href="project-overview.html" class="list-group-item px-0">

                                        <div class="row align-items-center">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar avatar-4by3">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/projects/project-2.jpg')}}"
                                                        alt="..." class="avatar-img rounded">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Title -->
                                                <h4 class="text-body mb-1 name">
                                                    Travels & Time
                                                </h4>

                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 4hr ago</time>
                                                </p>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                    <a href="project-overview.html" class="list-group-item px-0">

                                        <div class="row align-items-center">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar avatar-4by3">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/projects/project-3.jpg')}}"
                                                        alt="..." class="avatar-img rounded">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Title -->
                                                <h4 class="text-body mb-1 name">
                                                    Safari Exploration
                                                </h4>

                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 4hr ago</time>
                                                </p>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                    <a href="profile-posts.html" class="list-group-item px-0">

                                        <div class="row align-items-center">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-1.jpg')}}"
                                                        alt="..." class="avatar-img rounded-circle">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Title -->
                                                <h4 class="text-body mb-1 name">
                                                    Dianna Smiley
                                                </h4>

                                                <!-- Status -->
                                                <p class="text-body small mb-0">
                                                    <span class="text-success">●</span> Online
                                                </p>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                    <a href="profile-posts.html" class="list-group-item px-0">

                                        <div class="row align-items-center">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-2.jpg')}}"
                                                        alt="..." class="avatar-img rounded-circle">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Title -->
                                                <h4 class="text-body mb-1 name">
                                                    Ab Hadley
                                                </h4>

                                                <!-- Status -->
                                                <p class="text-body small mb-0">
                                                    <span class="text-danger">●</span> Offline
                                                </p>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                </div>

                            </div>
                        </div> <!-- / .dropdown-menu -->

                    </div>
                </form>

                <!-- User -->
                <div class="navbar-user">

                    <!-- Dropdown -->
                    <div class="dropdown mr-4 d-none d-md-flex">

                        <!-- Toggle -->
                        <a href="#" class="text-muted" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                  <span class="icon active">
                    <i class="fe fe-bell"></i>
                  </span>
                        </a>

                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h5 class="card-header-title">
                                            Notifications
                                        </h5>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Link -->
                                        <a href="#!" class="small">
                                            View all
                                        </a>

                                    </div>
                                </div> <!-- / .row -->
                            </div> <!-- / .card-header -->
                            <div class="card-body">

                                <!-- List group -->
                                <div class="list-group list-group-flush my--3">
                                    <a class="list-group-item px-0" href="#!">

                                        <div class="row">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-1.jpg')}}"
                                                        alt="..." class="avatar-img rounded-circle">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Content -->
                                                <div class="small text-muted">
                                                    <strong class="text-body">Dianna Smiley</strong> shared your post
                                                    with <strong class="text-body">Ab Hadley</strong>, <strong
                                                        class="text-body">Adolfo Hess</strong>, and <strong
                                                        class="text-body">3 others</strong>.
                                                </div>

                                            </div>
                                            <div class="col-auto">

                                                <small class="text-muted">
                                                    2m
                                                </small>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                    <a class="list-group-item px-0" href="#!">

                                        <div class="row">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-2.jpg')}}"
                                                        alt="..." class="avatar-img rounded-circle">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Content -->
                                                <div class="small text-muted">
                                                    <strong class="text-body">Ab Hadley</strong> reacted to your post
                                                    with a 😍
                                                </div>

                                            </div>
                                            <div class="col-auto">

                                                <small class="text-muted">
                                                    2m
                                                </small>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                    <a class="list-group-item px-0" href="#!">

                                        <div class="row">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-3.jpg')}}"
                                                        alt="..." class="avatar-img rounded-circle">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Content -->
                                                <div class="small text-muted">
                                                    <strong class="text-body">Adolfo Hess</strong> commented
                                                    <blockquote class="text-body">“I don’t think this really makes sense
                                                        to do without approval from Johnathan since he’s the one...”
                                                    </blockquote>
                                                </div>

                                            </div>
                                            <div class="col-auto">

                                                <small class="text-muted">
                                                    2m
                                                </small>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                    <a class="list-group-item px-0" href="#!">

                                        <div class="row">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-4.jpg')}}"
                                                        alt="..." class="avatar-img rounded-circle">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Content -->
                                                <div class="small text-muted">
                                                    <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                                                </div>

                                            </div>
                                            <div class="col-auto">

                                                <small class="text-muted">
                                                    2m
                                                </small>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                    <a class="list-group-item px-0" href="#!">

                                        <div class="row">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-5.jpg')}}"
                                                        alt="..." class="avatar-img rounded-circle">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Content -->
                                                <div class="small text-muted">
                                                    <strong class="text-body">Miyah Myles</strong> shared your post with
                                                    <strong class="text-body">Ryu Duke</strong>, <strong
                                                        class="text-body">Glen Rouse</strong>, and <strong
                                                        class="text-body">3 others</strong>.
                                                </div>

                                            </div>
                                            <div class="col-auto">

                                                <small class="text-muted">
                                                    2m
                                                </small>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                    <a class="list-group-item px-0" href="#!">

                                        <div class="row">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-6.jpg')}}"
                                                        alt="..." class="avatar-img rounded-circle">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Content -->
                                                <div class="small text-muted">
                                                    <strong class="text-body">Ryu Duke</strong> reacted to your post
                                                    with a 😍
                                                </div>

                                            </div>
                                            <div class="col-auto">

                                                <small class="text-muted">
                                                    2m
                                                </small>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                    <a class="list-group-item px-0" href="#!">

                                        <div class="row">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-7.jpg')}}"
                                                        alt="..." class="avatar-img rounded-circle">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Content -->
                                                <div class="small text-muted">
                                                    <strong class="text-body">Glen Rouse</strong> commented
                                                    <blockquote class="text-body">“I don’t think this really makes sense
                                                        to do without approval from Johnathan since he’s the one...”
                                                    </blockquote>
                                                </div>

                                            </div>
                                            <div class="col-auto">

                                                <small class="text-muted">
                                                    2m
                                                </small>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                    <a class="list-group-item px-0" href="#!">

                                        <div class="row">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img
                                                        src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-8.jpg')}}"
                                                        alt="..." class="avatar-img rounded-circle">
                                                </div>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Content -->
                                                <div class="small text-muted">
                                                    <strong class="text-body">Grace Gross</strong> subscribed to you.
                                                </div>

                                            </div>
                                            <div class="col-auto">

                                                <small class="text-muted">
                                                    2m
                                                </small>

                                            </div>
                                        </div> <!-- / .row -->

                                    </a>
                                </div>

                            </div>
                        </div> <!-- / .dropdown-menu -->

                    </div>

                    <!-- Dropdown -->
                    <div class="dropdown">

                        <!-- Toggle -->
                        <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..."
                                 class="avatar-img rounded-circle">
                        </a>

                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="profile-posts.html" class="dropdown-item">Profile</a>
                            <a href="settings.html" class="dropdown-item">Settings</a>
                            <hr class="dropdown-divider">
                            <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form2').submit();" class="dropdown-item">{{ __('Logout') }}
                            </a>
                            <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </nav>


        <!-- HEADER -->
        <div class="header">

            <!-- Image -->
            <img src="{{asset('vendor/admin/assets/img/covers/profile-cover-1.jpg')}}" class="header-img-top" alt="...">

            <div class="container-fluid">


            </div>
        </div>

        <!-- CONTENT -->
        <div class="container-fluid">
            <div class="row">
                @foreach($admins as $admin)
                    <div class="col-12 col-md-6 col-xl-4">

                        <!-- Card -->
                        <div class="card">

                            <div class="dropdown card-dropdown">
                                <a href="#!" class="dropdown-ellipses dropdown-toggle text-white" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                            <img src="{{asset('vendor/admin/assets/img/covers/profile-cover-2.jpg')}}" alt="..."
                                 class="card-img-top">

                            <div class="card-body text-center">

                                <a href="#!" class="avatar avatar-xl card-avatar card-avatar-top">
                                    <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-2.jpg')}}"
                                         class="avatar-img rounded-circle border border-4 border-card" alt="...">
                                </a>

                                <h2 class="card-title">

                                    <a href="profile-posts.html">{{$admin->name}}</a>
                                </h2>

                                <p class="card-text text-muted">
                                    <small>
                                        {{$admin->email}}
                                    </small>
                                </p>
                                <hr>

                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto">
                                        <small>
                                            @if($admin->status === '1')
                                            <span class="text-success">●</span>
                                                verify
                                            @else<span class="text-success"></span>
                                            no verify
                                            @endif
                                        </small>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="btn btn-sm btn-primary">
                                            action
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>

    </div> <!-- / .main-content -->


@endsection
