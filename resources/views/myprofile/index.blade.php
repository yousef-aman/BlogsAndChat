@extends('Theme.Theme_master')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y ">
        <h4 class="breadcrumb-wrapper py-3 mb-4">
            <span class="text-muted fw-light"><a href="/" class="text-body">Homepage</a> /</span> Profile
        </h4>
        <!-- Header -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="user-profile-header-banner">
                        <img src="../../assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top" />
                    </div>
                    <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                        <div class="mt-n2 flex-shrink-0 mx-auto mx-sm-0">
                            <img
                            src="{{isset($user->image) ? asset('/images/'.$user->image) : '../../assets/img/icons/brands/react-label.png'}}"
                            alt="user image"
                            class="rounded-3 user-profile-img d-block h-auto ms-0 ms-sm-4" />
                        </div>
                        <div class="flex-grow-1 mt-3 mt-sm-5">
                            <div
                                class="gap-4 d-flex flex-column flex-md-row justify-content-start justify-content-md-between align-items-center align-items-sm-start align-items-md-end mx-4"
                            >
                                <div class="user-profile-info">
                                    <h4>{{ucwords($user->name)}}</h4>
                                    {{-- User status--}}
                                    <div class=" align-items-center mb-xxl-3 d-flex">
                                        @if(Cache::has('user-is-online-' . $user->id))
                                            <div class="user-status text-success">
                                                <span class="badge badge-dot bg-success"></span>
                                                <small>Online</small>
                                            </div>
                                        @else
                                            <div class="user-status text-danger">
                                                <span class="badge badge-dot bg-danger"></span>
                                                <small>Offline</small>
                                                <small>{{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</small>
                                            </div>

                                        @endif
                                    </div>
                                    {{-- End User status--}}
                                    <ul
                                        class="list-inline gap-2 d-flex flex-wrap justify-content-center justify-content-sm-start align-items-center mb-0"
                                    >
                                        <li class="list-inline-item fw-semibold"><span class="invert-text-dark"><strong>{{$user->follows->count()}}</strong></span> Following</li>
                                        <li class="list-inline-item fw-semibold"><span class="invert-text-dark"><strong>{{$user->following->count()}}</strong></span> Followers</li>
                                        <li class="list-inline-item fw-semibold">
                                            <i class="bx bx-calendar-alt"></i> Joined {{$user->created_at->format('d M Y')}}
                                        </li>
                                    </ul>
                                </div>
                                @auth()
                                    @unless(auth()->user()->is($user))

                                        @if(!auth()->user()->isFollowing($user))
                                            <form action="/follow/{{$user->id}}" method="post" class="border-0">
                                                @csrf
                                                <button type="submit" href="javascript:void(0)" class="btn btn-primary text-nowrap">
                                                    <i class="bx bx-user-check"></i> Follow
                                                </button>
                                            </form>
                                        @else
                                            <form action="/follow/{{$user->id}}" method="post" class="border-0">
                                                @csrf
                                                <button type="submit" href="javascript:void(0)" class="btn btn-outline-primary text-nowrap">
                                                    <i class="bx bx-user-check"></i> Unfollow
                                                </button>
                                            </form>

                                        @endif
                                    @endunless
                                @endauth

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Header -->

        <!-- Navbar pills -->
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-profile-teams.html"><i class="bx bx-group"></i> Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-profile-projects.html"><i class="bx bx-grid-alt"></i> Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-profile-connections.html"
                        ><i class="bx bx-link-alt"></i> Connections</a
                        >
                    </li>
                </ul>
            </div>
        </div>
        <!--/ Navbar pills -->

        <!-- User Profile Content -->
        <div class="row">
            <div class="col-md-5 col-lg-5 col-xl-4">
                <!-- About User -->
                <div class="card mb-4">
                    <div class="card-body">
                        <small class="text-muted text-uppercase">About</small>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-user"></i><span class="fw-semibold mx-2">Full Name:</span>
                                <span>John Doe</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-check"></i><span class="fw-semibold mx-2">Status:</span> <span>Active</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-star"></i><span class="fw-semibold mx-2">Role:</span> <span>Developer</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-flag"></i><span class="fw-semibold mx-2">Country:</span> <span>USA</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-detail"></i><span class="fw-semibold mx-2">Languages:</span>
                                <span>English</span>
                            </li>
                        </ul>
                        <small class="text-muted text-uppercase">Contacts</small>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-phone"></i><span class="fw-semibold mx-2">Contact:</span>
                                <span>(123) 456-7890</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-chat"></i><span class="fw-semibold mx-2">Skype:</span> <span>john.doe</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-envelope"></i><span class="fw-semibold mx-2">Email:</span>
                                <span>john.doe@example.com</span>
                            </li>
                        </ul>
                        <small class="text-muted text-uppercase">Teams</small>
                        <ul class="list-unstyled mt-3 mb-0">
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bxl-github text-primary me-2"></i>
                                <div class="d-flex flex-wrap">
                                    <span class="fw-semibold me-2">Backend Developer</span><span>(126 Members)</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bx bxl-react text-info me-2"></i>
                                <div class="d-flex flex-wrap">
                                    <span class="fw-semibold me-2">React Developer</span><span>(98 Members)</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/ About User -->
                <!-- Profile Overview -->
                <div class="card mb-4">
                    <div class="card-body">
                        <small class="text-muted text-uppercase">Overview</small>
                        <form action="/image/profile/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image">
                            <button type="submit">Save</button>
                        </form>
                    </div>
                </div>
                <!--/ Profile Overview -->
            </div>
            <div class="col-md-7 col-lg-7 col-xl-8">
                <!-- Activity Timeline -->
                @if($posts->count())

                    @foreach($posts as $post)
                        {{--                Edit post --}}

                        <div class="modal fade" id="modalCenter{{$post->id}}" tabindex="-1" style="display: none;" aria-hidden="true" >
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Edit Post {{$post->title}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!--EDIT FORM  -->
                                    <form method="post" class="needs-validation" action="/posts/edit/{{$post->id}}" novalidate="" >
                                        @csrf
                                        @method('PATCH')
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label class="form-label" for="basic-default-fullname">Post Title</label>
                                                    <input type="text" name="title" value="{{$post->title}}" class="form-control" id="basic-default-fullname" placeholder="What is The title" required>


                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label class="form-label" for="basic-default-fullname">Post slug</label>
                                                    <input type="text" name="slug" value="{{$post->slug}}" class="form-control" id="basic-default-fullname" placeholder="What is The slug">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label class="form-label" for="basic-default-fullname">excerpt</label>
                                                    <input type="text" name="excerpt" value="{{$post->excerpt}}" class="form-control" id="basic-default-fullname" placeholder="What is The excerpt">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label class="form-label" for="basic-default-fullname">Select Category</label>

                                                    <select id="defaultSelect" name="category_id" class="form-select">
                                                        <option>Select</option>
                                                        @foreach(App\Models\category::all() as $category)
                                                            <option
                                                                value="{{$category->id}}"
                                                                {{old('category_id',$post->category_id) == $category->id ? 'selected' : ''}}
                                                            >{{$category->name}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label class="form-label" for="basic-default-message">Body</label>
                                                    <textarea id="basic-default-message" name="body" class="form-control" placeholder="Hi, What do you want to say ?">{{$post->body}}</textarea>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                    </form>
                                    <!--END EDIT FORM  -->
                                </div>
                            </div>

                        </div>
                        {{--          End      Edit post --}}

                        <!-- Show Posts -->
                        <div class="col-12">

                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class=" align-items-center mb-xxl-3 d-flex ">

                                        <div class="avatar avatar-sm me-2">
                                            <img
                                                src="{{isset($user->image) ? asset('/images/'.$user->image) : '../../assets/img/icons/brands/react-label.png'}}"
                                                alt="Avatar" class="rounded-circle">
                                        </div>
                                        <div class="h5 text-body me-2 mb-0"><strong>{{ucwords($user->name)}}</strong></div>

                                        @auth()
                                            @if(auth()->id()==$post->author->id)
                                                <div class="ms-auto">
                                                    <ul class="list-inline d-flex align-items-center mb-0">

                                                        <li class="list-inline-item">
                                                            <div class="dropdown">
                                                                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li>
                                                                        <button type="button" class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalCenter{{$post->id}}">
                                                                            Edit Post
                                                                        </button>

                                                                    </li>
                                                                    {{--   POST DELETE    --}}
                                                                    <li>
                                                                        <form method="post" id="confirm-text" action="posts/delete/{{$post->id}}">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="submit" class="dropdown-item" href="javascript:void(0);" id="confirm-text">Delete</button>

                                                                        </form>
                                                                    </li>
                                                                    {{--  END POST DELETE    --}}
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
                                            @endif
                                        @endauth
                                    </div>


                                    <div class="h6 d-flex text-body">
                                        <div class="user-status text-warning">

                                            <strong>Views</strong>   (<small>{{$post->views->count()}}</small>)
                                        </div>
                                    </div>



                                    <div class="h5 d-flex text-body me-2 mb-2">
                                        <strong>
                                            Category : &nbsp;
                                        </strong>
                                        <a href="/?category={{$post->category->slug}}" class="d-flex align-items-center">
                                            <div class="h5 text-body me-2 mb-0">

                                                {{ucwords($post->category->name)}}

                                            </div>
                                        </a>
                                    </div>




                                    <div class="h5 d-flex text-body me-2 mb-3">
                                        <strong>
                                            Title : &nbsp;
                                        </strong>
                                        <a href="/post/{{$post->slug}}" class="d-flex align-items-center">

                                            <div class="h5 text-body me-2 mb-0">
                                                {{ucwords($post->title)}}
                                            </div>


                                        </a>



                                    </div>
                                    <div class="border-top border-bottom border-l-slate-200" style="font-size: 19px;">
                                        <div class="mt-3 mb-3">{{$post->body }}</div>

                                    </div>
                                    <div class="gap-1 d-flex flex-wrap align-items-center mt-4 ">
                                        <div class="d-flex align-items-center">
                                            <ul class="list-unstyled avatar-group d-flex align-items-center mb-0">
                                                @foreach($post->likes as $like)
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="" class="avatar avatar-sm pull-up" data-bs-original-title="{{ucwords($like->author->name)}}">
                                                        <img class="rounded-circle" src="{{asset('/images/'.$like->author->image) }}" alt="Avatar">
                                                    </li>

                                                    @break($loop->iteration==4)

                                                @endforeach

                                                <li>
                                                    <small class="text-muted ms-1">{{$post->likes->count()}} {{Str::of('Like')->plural($post->likes->count())}}</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ms-auto d-flex ">
                                            {{--   Like And Follow  --}}

                                            @auth()
                                                <like-form
                                                    :post="{{$post}}"
                                                    @if(!$post->isLikedByUser())
                                                        :liked="'DoLike'"
                                                    @else
                                                        :liked="'DoUnLike'"
                                                    @endif
                                                >
                                                </like-form>

                                                {{--                                                @if(!$post->isLikedByUser())--}}
{{--                                                    <form action="/post/like/{{$post->id}}" method="post" class="border-0">--}}
{{--                                                        @csrf--}}

{{--                                                        <button href="javascript:;" class="me-2 btn btn-outline-success"  type="submit">Like</button>--}}
{{--                                                    </form>--}}
{{--                                                @else--}}
{{--                                                    <form action="/post/unlike/{{$post->id}}" method="post" class="border-0">--}}
{{--                                                        @csrf--}}
{{--                                                        @method('delete')--}}
{{--                                                        <button href="javascript:;" class="me-2 btn btn-outline-danger"  type="submit">UnLike</button>--}}
{{--                                                    </form>--}}
{{--                                                @endif--}}
                                            @endauth
                                            <p>
                                                <a class="me-2 btn btn-primary" data-bs-toggle="collapse" href="#collapseExample{{$post->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    Comments
                                                </a>
                                            </p>
                                        </div>
                                        {{-- End  Like And Follow  --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Show Comments--}}




                        <div class="collapse" id="collapseExample{{$post->id}}">
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
                                @if(count($post->comments)!= 0)
                                    @foreach($post->comments as $comment)
                                        <div class="demo-inline-spacing mb-3">
                                            <div class="list-group">

                                                <div class="list-group-item list-group-item-action d-flex align-items-center cursor-pointer">
                                                    <img src="../../assets/img/avatars/2.png" alt="User Image" class="w-px-50 rounded-circle me-3">
                                                    <div class="w-100">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="user-info">
                                                                <h4 class="mb-1">{{$comment->author->name}}</h4>
                                                                <small >{{$comment->created_at->diffForhumans()}}</small>
                                                                <h5 class="mb-5 mt-5">{{$comment->body}}</h5>
                                                                {{-- User status--}}

                                                                @if(Cache::has('user-is-online-' . $comment->author->id))
                                                                    <div class="user-status">
                                                                        <span class="badge badge-dot bg-success"></span>
                                                                        <small>Online</small>
                                                                    </div>
                                                                @else
                                                                    <div class="user-status">
                                                                        <span class="badge badge-dot bg-secondary"></span>
                                                                        <small>Offline</small>
                                                                        <small>{{ \Carbon\Carbon::parse($comment->author->last_seen)->diffForHumans() }}</small>
                                                                    </div>

                                                                @endif

                                                                {{-- End User status--}}
                                                            </div>
                                                            <div class="add-btn">
                                                                <button class="btn btn-primary btn-sm">Add</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    {{--                                                    <small class="text-light fw-semibold">No Comments Yet</small>--}}
                                    <p class="text-center h4">No Comments Yet .</p>
                                @endif
                            </div>
                        </div>



                        {{-- End Show Comments--}}

                        <!-- End Show Posts -->



                    @endforeach
                @else
                    <p class="text-center h4">No posts yet ,Please check back later .</p>
                @endif
                {{--            @dd(($))--}}

                {{$posts->links()}}
                <!--/ Activity Timeline -->

                <!-- Projects table -->

                <!--/ Projects table -->
            </div>
        </div>
        <!--/ User Profile Content -->
    </div>
@endsection
