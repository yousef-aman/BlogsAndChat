{{--<!doctype html>--}}
{{--<title>My blog</title>--}}
{{--<link rel="stylesheet" href="/app.css">--}}
{{--<body>--}}

{{--<article>--}}
{{--    <h1>{{$post->title}}</h1>--}}

{{--    <div>--}}
{{--        <p>--}}
{{--            {!! $post->body  !!}--}}
{{--        </p>--}}
{{--    </div>--}}
{{--</article>--}}
{{--<a href="/posts">Go back</a>--}}
{{--</body>--}}
@extends('Theme.Theme_master')
@section('content')




        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="breadcrumb-wrapper py-3 mb-4">
                <span class="text-muted fw-light">User Profile /</span> Teams
            </h4>




                <!-- Teams Cards -->
            <div class="row">
                <!-- Badge Circle -->
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="ms-auto">
                            <ul class="list-inline d-flex align-items-center mb-0">

                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                                    Edit Post
                                                </button>

                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="card-header">{{$post->title}}
                        </h3>

                        <div class="card-body">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <h6>
                                        <div class="d-flex h5 text-body me-2 mb-0">
                                            <h5>By :</h5>
                                            <a href="/?author={{$post->author->id}}">
                                                <div class="h5 text-body me-2 mb-0">

                                                    <strong>{{$post->author->name}}</strong>

                                                </div>



                                            </a>

                                        </div>

                                        <div class="d-flex h5 text-body me-2 mb-0">
                                            <h5>Category : </h5>
                                            <a href="/?category={{$post->category->slug}}">
                                                <div class="h5 text-body me-2 mb-0">

                                                    <strong>{{$post->category->name}}</strong>

                                                </div>



                                            </a>

                                        </div>

                                    </h6>
                                    <div class="t small fw-semibold mb-2"> <p style="font-size: 19px;">
                                            {{$post->body }}

                                        </p></div>
                                    <div class="demo-inline-spacing">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card mb-4 list-group-item align-items-center ">
                        <div class="card-body ">
                            <p class="demo-inline-spacing align-items-center">
                                <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Write Comment
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                @auth()
                                <form method="post" action="/posts/{{$post->slug}}/comments" class="border-0 d-grid d-sm-flex border p-3">
                                    @csrf
                                    <div class="input-group">
                                        <span >
                                             <img src="../../assets/img/avatars/2.png" alt="User Image" class="w-px-50 rounded-circle me-3">
                                        </span>
                                        <span class="input-group-text">{{\Illuminate\Support\Facades\Auth::user()->name}}

                                        </span>

                                        <textarea id="autosize-demo"  name="body" rows="3" class="form-control" required style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 80px;"></textarea>
                                        <button type="submit" class="btn btn-label-primary">Send</button>
                                    </div>

                                </form>
                                @endauth
                                <div class="col-12 ">
                                    <small class="text-light fw-semibold">Comments</small>
                                    <div class="demo-inline-spacing mt-3">
                                        <div class="list-group">
                                            @foreach($post->comments as $comment)
                                                <div class="list-group-item list-group-item-action d-flex align-items-center cursor-pointer">
                                                    <img src="../../assets/img/avatars/2.png" alt="User Image" class="w-px-50 rounded-circle me-3">
                                                    <div class="w-100">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="user-info">
                                                                <h4 class="mb-1">{{$comment->author->name}}</h4>
                                                                <small >{{$comment->created_at->diffForhumans()}}</small>
                                                                <h5 class="mb-5 mt-5">{{$comment->body}}</h5>
                                                                <div class="user-status">
                                                                    <span class="badge badge-dot bg-success"></span>
                                                                    <small>Online</small>
                                                                </div>
                                                            </div>
                                                            <div class="add-btn">
                                                                <button class="btn btn-primary btn-sm">Add</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <!-- User List Style -->


            </div>
            <!--/ Teams Cards -->
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="card mb-5">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex align-items-center mb-xxl-5 ">--}}

{{--                                <div class="avatar avatar-sm me-2">--}}
{{--                                    <img src="../../assets/img/icons/brands/react-label.png" alt="Avatar" class="rounded-circle">--}}
{{--                                </div>--}}
{{--                                <div class="h5 text-body me-2 mb-0">{{$post->title}}</div>--}}


{{--                                <div class="ms-auto">--}}
{{--                                    <ul class="list-inline d-flex align-items-center mb-0">--}}
{{--                                        <li class="list-inline-item me-0">--}}
{{--                                            <a href="javascript:void(0);" class="text-body"><i class="bx bx-star"></i></a>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <div class="dropdown">--}}
{{--                                                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                                    <i class="bx bx-dots-vertical-rounded"></i>--}}
{{--                                                </button>--}}
{{--                                                <ul class="dropdown-menu dropdown-menu-end">--}}
{{--                                                    <li><a class="dropdown-item" href="javascript:void(0);">Rename Team</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>--}}
{{--                                                    <li>--}}
{{--                                                        <hr class="dropdown-divider">--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="d-flex h5 text-body me-2 mb-0">--}}
{{--                                By :--}}
{{--                                <a href="/posts?author={{$post->author->id}}">--}}
{{--                                    <div class="h5 text-body me-2 mb-0">--}}

{{--                                        <strong>{{$post->author->name}}</strong>--}}

{{--                                    </div>--}}



{{--                                </a>--}}

{{--                            </div>--}}

{{--                            <div class="d-flex align-items-center mb-xxl-5 ">--}}
{{--                                <a href="/categories/{{$post->category->slug}}" class="d-flex align-items-center">--}}
{{--                                    <div class="h5 text-body me-2 mb-0">Category : <strong>{{$post->category->name}}</strong></div>--}}
{{--                                </a>--}}


{{--                            </div>--}}

{{--                            <p style="font-size: 19px;">--}}
{{--                                {{$post->body }}--}}

{{--                            </p>--}}
{{--                            <div class="gap-1 d-flex flex-wrap align-items-center">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <ul class="list-unstyled avatar-group d-flex align-items-center mb-0">--}}
{{--                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="" class="avatar avatar-sm pull-up" data-bs-original-title="Vinnie Mostowy">--}}
{{--                                            <img class="rounded-circle" src="../../assets/img/avatars/5.png" alt="Avatar">--}}
{{--                                        </li>--}}
{{--                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="" class="avatar avatar-sm pull-up" data-bs-original-title="Allen Rieske">--}}
{{--                                            <img class="rounded-circle" src="../../assets/img/avatars/12.png" alt="Avatar">--}}
{{--                                        </li>--}}
{{--                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="" class="avatar avatar-sm pull-up" data-bs-original-title="Julee Rossignol">--}}
{{--                                            <img class="rounded-circle" src="../../assets/img/avatars/6.png" alt="Avatar">--}}
{{--                                        </li>--}}
{{--                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="" class="avatar avatar-sm pull-up" data-bs-original-title="George Burrill">--}}
{{--                                            <img class="rounded-circle" src="../../assets/img/avatars/7.png" alt="Avatar">--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <small class="text-muted ms-1">+254</small>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="ms-auto">--}}
{{--                                    <a href="javascript:;" class="me-1"><span class="badge bg-label-primary">Like</span></a>--}}
{{--                                    <a href="javascript:;"><span class="badge bg-label-warning">Dislike</span></a>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}



{{--                </div>--}}

{{--            </div>--}}
        </div>

        <!-- / Content -->

@endsection
