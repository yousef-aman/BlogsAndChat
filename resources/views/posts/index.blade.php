    @extends('Theme.Theme_master')
    @section('content')
        <div class="container-xxl flex-grow-1 container-p-y " >
            <h4 class="breadcrumb-wrapper py-3 mb-4">
                <span class="text-muted fw-light">User Profile /</span> Teams
            </h4>

            <div class="card-body">
    {{--            Search  AND DROPDOWN        --}}
                <div class="demo-inline-spacing d-flex">
                    <div class="btn-group" >
                        <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" >
                            {{isset($currentCategory) ? ucwords($currentCategory->name) :'Categories '}}
                        </button>


                        <ul class="dropdown-menu overflow-auto " style="width: 160px; height: 200px;" id="vertical-example">

                            <li ><a class="dropdown-item" href="/" >All</a></li>

                            @foreach($categories as $category)
                                <li><a class="dropdown-item {{isset($currentCategory)&&$currentCategory->is($category) ? 'active selected bx bx-check text-primary check-mark':''}}"
                                       href="/?category={{$category->slug}}&{{http_build_query(request()->except('category'))}}">{{$category->name}}</a></li>

                            @endforeach



                        </ul>
                    </div>
                    <div class=" col-lg-4 ">
                        <div class="input-group input-group-merge ">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <form action="/" method="get" class=" form-control">
                                @if(request('category'))
                                    <input type="hidden" name="category" value="{{request('category')}}">
                                @endif

                                <input type="text" class="border-0 form-control" name="search" placeholder="Search...">
                            </form>
                        </div>
                    </div>
                </div>
                {{--     END       Search  AND DROPDOWN       --}}

            </div>

            @auth()
                {{--        Post FORM--}}
            <div class="row ">
                <div class="card-body">

                    <div class="col-md-6 col-lg-4">
                        <small class="text-light fw-semibold" >
                            publish Post

                        </small>
                        <div class="mt-3" >
                            <!-- Button trigger modal -->
{{--                                <publish-post :categories="{{$categories}}">--}}

{{--                                </publish-post>--}}
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                Publish Post
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterTitle">Write a Post</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="/posts/create" class="needs-validation" novalidate="" >
                                            @csrf
                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label class="form-label" for="basic-default-fullname">Post Title</label>
                                                        <input type="text" name="title" class="form-control" id="basic-default-fullname" placeholder="What is The title" required>
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter a Title</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label class="form-label" for="basic-default-fullname">Post slug</label>
                                                        <input type="text" name="slug" class="form-control" id="basic-default-fullname" placeholder="What is The slug" required>
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter a Slug</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label class="form-label" for="basic-default-fullname">excerpt</label>
                                                        <input type="text" name="excerpt" class="form-control" id="basic-default-fullname" placeholder="What is The excerpt" required>
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter a Excerpt</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label class="form-label" for="basic-default-fullname">Select Category</label>

                                                        <select id="defaultSelect" name="category_id" class="form-select" required>
                                                            <option value="">Select</option>
                                                            @foreach(App\Models\category::all() as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please select your country</div>


                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label class="form-label" for="basic-default-message">Body</label>
                                                        <textarea id="basic-default-message" name="body" class="form-control" placeholder="Hi, What do you want to say ?" required></textarea>
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter your name.</div>
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
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
                {{--      END  Post FORM--}}
            @endauth


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
                                    <a href="/user/profile/show?author={{$post->author->id}}" class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-2">
                                            <img src="{{isset($post->author->image) ? asset('/images/'.$post->author->image) : '../../assets/img/icons/brands/react-label.png'}}"  alt="Avatar" class="rounded-circle">
                                        </div>
                                        <div class="h5 text-body me-2 mb-0"><strong>{{ucwords($post->author->name)}}</strong></div>
                                    </a>
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
{{--                                                                <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>--}}
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
{{--                                                                <li>--}}
{{--                                                                    <a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a>--}}
{{--                                                                </li>--}}
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    @endauth
                                </div>



                                <div class="h6 d-flex text-body">
                                    {{-- User status--}}

                                    @if(Cache::has('user-is-online-' . $post->author->id))
                                        <div class="user-status text-success">
                                            <span class="badge badge-dot bg-success"></span>
                                            <small>Online</small>
                                        </div>
                                    @else
                                        <div class="user-status text-danger">
                                            <span class="badge badge-dot bg-danger"></span>
                                            <small>Offline</small>
                                            <small>{{ \Carbon\Carbon::parse($post->author->last_seen)->diffForHumans() }}</small>
                                        </div>

                                    @endif

                                    {{-- End User status--}}
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="user-status text-warning">

                                      <strong>Views</strong> (<small>{{$post->views->count()}}</small>)
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
                                <div class="gap-1 d-flex flex-wrap align-items-center mt-4">
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
                                    <div class="ms-auto d-flex" >
                                        {{--   Like And Follow  --}}

                                        @auth()
{{--                                            @if(!$post->isLikedByUser())--}}
{{--                                                <like-form  :post="{{$post}}" csrf="{{csrf_token()}}" >--}}

                                                <like-form
                                                    :post="{{$post}}"
                                                    @if(!$post->isLikedByUser())
                                                    :liked="'DoLike'"
                                                    @else
                                                    :liked="'DoUnLike'"
                                                    @endif
                                                >
                                                </like-form>

{{--                                                <form action="/post/like/{{$post->id}}" method="post" class="border-0">--}}
{{--                                                    @csrf--}}

{{--                                                    <button href="javascript:;" class="me-2 btn btn-outline-success"  type="submit">Like</button>--}}
{{--                                                </form>--}}
{{--                                            @else--}}
{{--                                            @if($post->isLikedByUser())--}}
{{--                                                <form action="/post/unlike/{{$post->id}}" method="post" class="border-0">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('delete')--}}
{{--                                                    <button href="javascript:;" class="me-2 btn btn-outline-danger"  type="submit">UnLike</button>--}}
{{--                                                </form>--}}
{{--                                            @endif--}}
{{--                                            @endif--}}
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
        </div>

{{--        <div class="content-backdrop fade">--}}
{{--        </div>--}}



    @endsection



    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-6">--}}
    {{--                <div class="card mb-4 ">--}}
    {{--                    <div class="card-header d-flex justify-content-between align-items-center">--}}
    {{--                        <h5 class="mb-0">Write a Post</h5>--}}

    {{--                    </div>--}}
    {{--                  --}}
    {{--                    <div class="card-body">--}}

    {{--                        <form method="post" action="/posts/create" >--}}
    {{--                            @csrf--}}
    {{--                            <div class="mb-3">--}}
    {{--                                <label class="form-label" for="basic-default-fullname">Post Title</label>--}}
    {{--                                <input type="text" name="title" class="form-control" id="basic-default-fullname" placeholder="What is The title">--}}
    {{--                            </div>--}}

    {{--                            <div class="mb-3">--}}
    {{--                                <label class="form-label" for="basic-default-fullname">Post slug</label>--}}
    {{--                                <input type="text" name="slug" class="form-control" id="basic-default-fullname" placeholder="What is The slug">--}}
    {{--                            </div>--}}

    {{--                            <div class="mb-3">--}}
    {{--                                <label class="form-label" for="basic-default-fullname">excerpt</label>--}}
    {{--                                <input type="text" name="excerpt" class="form-control" id="basic-default-fullname" placeholder="What is The excerpt">--}}
    {{--                            </div>--}}

    {{--                            <div class="mb-3">--}}

    {{--                                <label class="form-label" for="basic-default-fullname">Select Category</label>--}}

    {{--                                <select id="defaultSelect" name="category_id" class="form-select">--}}
    {{--                                    <option>Select</option>--}}
    {{--                                    @foreach(App\Models\category::all() as $category)--}}
    {{--                                        <option value="{{$category->id}}">{{$category->name}}</option>--}}
    {{--                                    @endforeach--}}
    {{--                                </select>--}}
    {{--                            </div>--}}

    {{--                            <div class="mb-3">--}}
    {{--                                <label class="form-label" for="basic-default-message">Body</label>--}}
    {{--                                <textarea id="basic-default-message" name="body" class="form-control" placeholder="Hi, What do you want to say ?"></textarea>--}}
    {{--                            </div>--}}
    {{--                            <button type="submit" class="btn btn-primary">Send</button>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </div>--}}



    {{--@foreach($posts as $post)--}}
    {{--<article>--}}

    {{--        <h1>--}}
    {{--            <a href="post/{{$post->id}}">--}}
    {{--                {{$post->title}}--}}
    {{--            </a>--}}
    {{--        </h1>--}}
    {{--        <p>--}}
    {{--            {{$post->excerpt}}--}}
    {{--        </p>--}}
    {{--</article>--}}

    {{--@endforeach--}}

{{--@push('scripts')--}}
{{--    @vite('resources/js/views/about.js')--}}
{{--@endpush--}}



