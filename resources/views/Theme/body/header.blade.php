
<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="container-fluid">
        <div class="layout-menu-toggle navbar-nav d-xl-none align-items-xl-center me-3 me-xl-0">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->

            <!-- /Search -->
    @auth()
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Language -->

                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item me-2 me-xl-0">
                    <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                        <i class="bx bx-sm"></i>
                    </a>
                </li>
                <!--/ Style Switcher -->

                <!-- Quick links  -->

                <!-- Quick links -->

                <!-- Notification -->
                <new-header-notify
                    :user="{{auth()->user()}}"
                    :allnotifications="{{auth()->user()->notifications}}"
                    :unreadnotifications="{{auth()->user()->unreadNotifications}}"
                    :readnotifications="{{auth()->user()->readNotifications}}">


                </new-header-notify>

{{--                                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">--}}
{{--                    <a--}}
{{--                        class="nav-link dropdown-toggle hide-arrow"--}}
{{--                        href="javascript:void(0);"--}}
{{--                        data-bs-toggle="dropdown"--}}
{{--                        data-bs-auto-close="outside"--}}
{{--                        aria-expanded="false"--}}
{{--                    >--}}
{{--                        <i class="bx bx-bell bx-sm"></i>--}}
{{--                        @if(auth()->user()->unreadnotifications->count()>0)--}}
{{--                        <span class="badge rounded-pill badge-notifications bg-danger">{{auth()->user()->unreadnotifications->count()}}</span>--}}
{{--                        @endif--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu dropdown-menu-end py-0">--}}
{{--                        <li class="dropdown-menu-header border-bottom">--}}
{{--                            <div class="dropdown-header d-flex align-items-center py-3">--}}
{{--                                <h5 class="text-body me-auto mb-0">Notification</h5>--}}
{{--                                <a--}}
{{--                                    href="javascript:void(0)"--}}
{{--                                    class="dropdown-notifications-all text-body"--}}
{{--                                    data-bs-toggle="tooltip"--}}
{{--                                    data-bs-placement="top"--}}
{{--                                    title="Mark all as read"--}}
{{--                                ><i class="bx fs-4 bx-envelope-open"></i--}}
{{--                                    ></a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="dropdown-notifications-list scrollable-container ">--}}
{{--                            <ul class="list-group list-group-flush">--}}
{{--                                @foreach(auth()->user()->notifications as $notification)--}}
{{--                                <li class="list-group-item list-group-item-action dropdown-notifications-item  {{isset($notification->read_at) ? 'marked-as-read' : ''}}">--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <div class="flex-shrink-0 me-3">--}}
{{--                                            <div class="avatar">--}}
{{--                                                <a href="/user/profile/show?author={{($notification->data['user_id'])}}"> <img src="{{asset('/images/'.$notification->data['image'])}}" alt class="w-px-40 h-auto rounded-circle" /></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1">--}}
{{--                                          <h6 class="mb-1">{{ucwords($notification->data['name'])}} {{$notification->data['message']}} @if(isset($notification->data['title'])) {{$notification->data['title']}} @endif</h6>--}}

{{--                                           <form method="post" action="/makeRead/notify/{{$notification->id}}">--}}
{{--                                               @csrf--}}

{{--                                               <button class="mb-0" type="submit"> Won the monthly best seller gold badge</button>--}}
{{--                                           </form>--}}

{{--                                            <small class="text-muted">{{$notification->created_at->diffForHumans()}}</small>--}}
{{--                                            <small class="text-muted"></small>--}}
{{--                                        </div>--}}
{{--                                        <div class="dropdown-notifications-actions flex-shrink-0">--}}
{{--                                            <a href="javascript:void(0)" class="dropdown-notifications-read"--}}
{{--                                            ><span class="badge badge-dot"></span--}}
{{--                                                ></a>--}}
{{--                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"--}}
{{--                                            ><span class="bx bx-x"></span--}}
{{--                                                ></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                @endforeach--}}

{{--                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <div class="flex-shrink-0 me-3">--}}
{{--                                            <div class="avatar">--}}
{{--                                                <img src="../../assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle" />--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1">--}}
{{--                                            <h6 class="mb-1">New Message ✉️</h6>--}}
{{--                                            <p class="mb-0">You have new message from Natalie</p>--}}
{{--                                            <small class="text-muted">1h ago</small>--}}
{{--                                        </div>--}}
{{--                                        <div class="dropdown-notifications-actions flex-shrink-0">--}}
{{--                                            <a href="javascript:void(0)" class="dropdown-notifications-read"--}}
{{--                                            ><span class="badge badge-dot"></span--}}
{{--                                                ></a>--}}
{{--                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"--}}
{{--                                            ><span class="bx bx-x"></span--}}
{{--                                                ></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}

{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="dropdown-menu-footer border-top">--}}
{{--                            <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">--}}
{{--                                View all notifications--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="lh-1 d-block fw-semibold">John Doe</span>
                                        <small>Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item"  href="/user/profile/show?author={{auth()->id()}}">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-billing.html">
                          <span class="d-flex align-items-center align-middle">
                            <i class="bx bx-credit-card flex-shrink-0 me-2"></i>
                            <span class="flex-grow-1 align-middle">Billing</span>
                            <span class="badge badge-center rounded-pill w-px-20 h-px-20 flex-shrink-0 bg-danger"
                            >4</span
                            >
                          </span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-help-center-landing.html">
                                <i class="bx bx-support me-2"></i>
                                <span class="align-middle">Help</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-faq.html">
                                <i class="bx bx-help-circle me-2"></i>
                                <span class="align-middle">FAQ</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-pricing.html">
                                <i class="bx bx-dollar me-2"></i>
                                <span class="align-middle">Pricing</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="bx bx-power-off me-2"></i>
                                    Log out
                                </button>

                            </form>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        @else
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item me-2 me-xl-0">

                        <a href="{{ route('login') }}" type="button" class="btn rounded-pill btn-google-plus">Log in</a>
                        <a href="{{ route('register') }}" type="button" class="btn rounded-pill btn-success">Register</a>
                    </li>
                </ul>
    @endauth
        </div>

        <!-- Search Small Screens -->
        <div class="navbar-search-wrapper search-input-wrapper d-none">
            <input
                type="text"
                class="form-control search-input container-fluid border-0"
                placeholder="Search..."
                aria-label="Search..."
            />
            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
        </div>

    </div>

</nav>
