<script setup>

</script>

<template>

        <div>hellow im helloVue</div>

</template>
<!--<script setup>-->
<!--import Base from "../Conponents/layouts/base.vue"-->
<!--import {onMounted ,ref} from "vue";-->
<!--import axios from 'axios';-->


<!--let posts= ref([])-->

<!--onMounted(async ()=>{-->
<!--    await getPosts()-->
<!--})-->

<!--const getPosts = async () => {-->
<!--    let url = '/api/post';-->
<!--    await axios.get(url)-->
<!--        .then(response => {-->
<!--            posts.value = response.data["posts"];-->
<!--            console.log(posts.value);-->
<!--        }).catch(error => {-->
<!--            console.log(error);-->

<!--        })-->
<!--}-->
<!--</script>-->

<!--<template>-->
<!--    <Base>-->
<!--        <div class="container-xxl flex-grow-1 container-p-y">-->
<!--            <h4 class="breadcrumb-wrapper py-3 mb-4">-->
<!--                <span class="text-muted fw-light">User Profile /</span> Teams-->
<!--            </h4>-->

<!--            <div class="card-body">-->

<!--                <div class="demo-inline-spacing d-flex">-->
<!--                    <div class="btn-group" >-->
<!--                        <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" >-->

<!--                        </button>-->


<!--                        <ul class="dropdown-menu overflow-auto " style="width: 160px; height: 200px;" id="vertical-example">-->

<!--                            <li ><a class="dropdown-item" href="/" >All</a></li>-->


<!--                            <li><a class="dropdown-item "-->
<!--                                   href=""></a></li>-->





<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class=" col-lg-4 ">-->
<!--                        <div class="input-group input-group-merge ">-->
<!--                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>-->
<!--                            <form action="/" method="get" class=" form-control">-->

<!--                                <input type="hidden" name="category" value="">-->


<!--                                <input type="text" class="border-0 form-control" name="search" placeholder="Search...">-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


<!--            </div>-->

<!--            <div class="row ">-->
<!--                <div class="card-body">-->

<!--                    <div class="col-md-6 col-lg-4">-->
<!--                        <small class="text-light fw-semibold">Publish Post </small>-->
<!--                        <div class="mt-3">-->
<!--                            &lt;!&ndash; Button trigger modal &ndash;&gt;-->
<!--                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">-->
<!--                                Publish Post-->
<!--                            </button>-->

<!--                            &lt;!&ndash; Modal &ndash;&gt;-->
<!--                            <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">-->
<!--                                <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--                                    <div class="modal-content">-->
<!--                                        <div class="modal-header">-->
<!--                                            <h5 class="modal-title" id="modalCenterTitle">Write a Post</h5>-->
<!--                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                                        </div>-->
<!--                                        <form method="post" action="" class="needs-validation" novalidate="" >-->

<!--                                            <div class="modal-body">-->

<!--                                                <div class="row">-->
<!--                                                    <div class="col mb-3">-->
<!--                                                        <label class="form-label" for="basic-default-fullname">Post Title</label>-->
<!--                                                        <input type="text" name="title" class="form-control" id="basic-default-fullname" placeholder="What is The title" required>-->
<!--                                                        <div class="valid-feedback">Looks good!</div>-->
<!--                                                        <div class="invalid-feedback">Please enter a Title</div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col mb-3">-->
<!--                                                        <label class="form-label" for="basic-default-fullname">Post slug</label>-->
<!--                                                        <input type="text" name="slug" class="form-control" id="basic-default-fullname" placeholder="What is The slug" required>-->
<!--                                                        <div class="valid-feedback">Looks good!</div>-->
<!--                                                        <div class="invalid-feedback">Please enter a Slug</div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col mb-3">-->
<!--                                                        <label class="form-label" for="basic-default-fullname">excerpt</label>-->
<!--                                                        <input type="text" name="excerpt" class="form-control" id="basic-default-fullname" placeholder="What is The excerpt" required>-->
<!--                                                        <div class="valid-feedback">Looks good!</div>-->
<!--                                                        <div class="invalid-feedback">Please enter a Excerpt</div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col mb-3">-->
<!--                                                        <label class="form-label" for="basic-default-fullname">Select Category</label>-->

<!--                                                        <select id="defaultSelect" name="category_id" class="form-select" required>-->
<!--                                                            <option value="">Select</option>-->

<!--                                                            <option value=""></option>@endforeach-->
<!--                                                        </select>-->
<!--                                                        <div class="valid-feedback">Looks good!</div>-->
<!--                                                        <div class="invalid-feedback">Please select your country</div>-->


<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col mb-3">-->
<!--                                                        <label class="form-label" for="basic-default-message">Body</label>-->
<!--                                                        <textarea id="basic-default-message" name="body" class="form-control" placeholder="Hi, What do you want to say ?" required></textarea>-->
<!--                                                        <div class="valid-feedback">Looks good!</div>-->
<!--                                                        <div class="invalid-feedback">Please enter your name.</div>-->
<!--                                                    </div>-->
<!--                                                </div>-->

<!--                                            </div>-->
<!--                                            <div class="modal-footer">-->
<!--                                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">-->
<!--                                                    Close-->
<!--                                                </button>-->
<!--                                                <button type="submit" class="btn btn-primary">Send</button>-->
<!--                                            </div>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </div>-->

<!--            </div>-->




<!--            <div class="modal fade" id="" tabindex="-1" style="display: none;" aria-hidden="true" >-->
<!--                <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--                    <div class="modal-content">-->
<!--                        <div class="modal-header">-->
<!--                            <h5 class="modal-title" id="modalCenterTitle"></h5>-->
<!--                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                        </div>-->
<!--                        &lt;!&ndash;EDIT FORM  &ndash;&gt;-->
<!--                        <form method="post" class="needs-validation" action="" novalidate="" >-->

<!--                            <div class="modal-body">-->

<!--                                <div class="row">-->
<!--                                    <div class="col mb-3">-->
<!--                                        <label class="form-label" for="basic-default-fullname">Post Title</label>-->
<!--                                        <input type="text" name="title" value="" class="form-control" id="basic-default-fullname" placeholder="What is The title" required>-->


<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="row">-->
<!--                                    <div class="col mb-3">-->
<!--                                        <label class="form-label" for="basic-default-fullname">Post slug</label>-->
<!--                                        <input type="text" name="slug" value="" class="form-control" id="basic-default-fullname" placeholder="What is The slug">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="row">-->
<!--                                    <div class="col mb-3">-->
<!--                                        <label class="form-label" for="basic-default-fullname">excerpt</label>-->
<!--                                        <input type="text" name="excerpt" value="" class="form-control" id="basic-default-fullname" placeholder="What is The excerpt">-->

<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="row">-->
<!--                                    <div class="col mb-3">-->
<!--                                        <label class="form-label" for="basic-default-fullname">Select Category</label>-->

<!--                                        <select id="defaultSelect" name="category_id" class="form-select">-->
<!--                                            <option>Select</option>-->

<!--                                            <option-->
<!--                                                value=""-->

<!--                                            ></option>-->

<!--                                        </select>-->

<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="row">-->
<!--                                    <div class="col mb-3">-->
<!--                                        <label class="form-label" for="basic-default-message">Body</label>-->
<!--                                        <textarea id="basic-default-message" name="body" class="form-control" placeholder="Hi, What do you want to say ?"></textarea>-->
<!--                                    </div>-->

<!--                                </div>-->

<!--                            </div>-->
<!--                            <div class="modal-footer">-->
<!--                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">-->
<!--                                    Close-->
<!--                                </button>-->
<!--                                <button type="submit" class="btn btn-primary">Send</button>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                        &lt;!&ndash;END EDIT FORM  &ndash;&gt;-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->


<!--            &lt;!&ndash; Show Posts &ndash;&gt;-->
<!--            <div class="col-12" v-for="post in posts" :key="post.id">-->

<!--                <div class="card mb-4">-->
<!--                    <div class="card-body">-->
<!--                        <div class=" align-items-center mb-xxl-3 d-flex ">-->
<!--                            <a href="" class="d-flex align-items-center">-->
<!--                                <div class="avatar avatar-sm me-2">-->
<!--                                    <img src=""  alt="Avatar" class="rounded-circle">-->
<!--                                </div>-->
<!--                                <div class="h5 text-body me-2 mb-0"><strong></strong></div>-->
<!--                            </a>-->

<!--                            <div class="ms-auto">-->
<!--                                <ul class="list-inline d-flex align-items-center mb-0">-->

<!--                                    <li class="list-inline-item">-->
<!--                                        <div class="dropdown">-->
<!--                                            <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                                                <i class="bx bx-dots-vertical-rounded"></i>-->
<!--                                            </button>-->
<!--                                            <ul class="dropdown-menu dropdown-menu-end">-->
<!--                                                <li>-->
<!--                                                    <button type="button" class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalCenter{{$post->id}}">-->
<!--                                                        Edit Post-->
<!--                                                    </button>-->

<!--                                                </li>-->

<!--                                                <li>-->
<!--                                                    <form method="post" id="confirm-text" action="">-->

<!--                                                        <button type="submit" class="dropdown-item" href="javascript:void(0);" id="confirm-text">Delete</button>-->

<!--                                                    </form>-->
<!--                                                </li>-->

<!--                                                <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>-->
<!--                                                <li>-->
<!--                                                    <hr class="dropdown-divider">-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a>-->
<!--                                                </li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->

<!--                        </div>-->



<!--                        <div class="h6 d-flex text-body">-->

<!--                            <div class="user-status text-success">-->
<!--                                <span class="badge badge-dot bg-success"></span>-->
<!--                                <small>Online</small>-->
<!--                            </div>-->

<!--                            <div class="user-status text-danger">-->
<!--                                <span class="badge badge-dot bg-danger"></span>-->
<!--                                <small>Offline</small>-->
<!--                                <small></small>-->
<!--                            </div>-->


<!--                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
<!--                            <div class="user-status text-warning">-->

<!--                                <strong>Views</strong> (<small></small>)-->
<!--                            </div>-->
<!--                        </div>-->


<!--                        <div class="h5 d-flex text-body me-2 mb-2">-->
<!--                            <strong>-->
<!--                                Category : &nbsp;-->
<!--                            </strong>-->
<!--                            <a href="" class="d-flex align-items-center">-->
<!--                                <div class="h5 text-body me-2 mb-0">-->
<!--                                    {{post.category.name}}-->



<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->

<!--                        <div class="h5 d-flex text-body me-2 mb-3">-->
<!--                            <strong>-->
<!--                                Title : &nbsp;-->
<!--                            </strong>-->
<!--                            <a href="" class="d-flex align-items-center">-->

<!--                                <div class="h5 text-body me-2 mb-0">-->

<!--                                </div>-->

<!--                            </a>-->

<!--                        </div>-->

<!--                        <div class="border-top border-bottom border-l-slate-200" style="font-size: 19px;">-->
<!--                            <div class="mt-3 mb-3">{{post.body}}</div>-->

<!--                        </div>-->
<!--                        <div class="gap-1 d-flex flex-wrap align-items-center mt-4">-->
<!--                            <div class="d-flex align-items-center">-->
<!--                                <ul class="list-unstyled avatar-group d-flex align-items-center mb-0">-->
<!--                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="" class="avatar avatar-sm pull-up" data-bs-original-title="Vinnie Mostowy">-->
<!--                                        <img class="rounded-circle" src="../../assets/img/avatars/5.png" alt="Avatar">-->
<!--                                    </li>-->
<!--                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="" class="avatar avatar-sm pull-up" data-bs-original-title="Allen Rieske">-->
<!--                                        <img class="rounded-circle" src="../../assets/img/avatars/12.png" alt="Avatar">-->
<!--                                    </li>-->
<!--                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="" class="avatar avatar-sm pull-up" data-bs-original-title="Julee Rossignol">-->
<!--                                        <img class="rounded-circle" src="../../assets/img/avatars/6.png" alt="Avatar">-->
<!--                                    </li>-->
<!--                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="" class="avatar avatar-sm pull-up" data-bs-original-title="George Burrill">-->
<!--                                        <img class="rounded-circle" src="../../assets/img/avatars/7.png" alt="Avatar">-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <small class="text-muted ms-1"></small>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="ms-auto d-flex ">-->

<!--                                <form action="" method="post" class="border-0">-->

<!--                                    <button href="javascript:;" class="me-2 btn btn-outline-success"  type="submit">Like</button>-->
<!--                                </form>-->

<!--                                <form action="" method="post" class="border-0">-->

<!--                                    <button href="javascript:;" class="me-2 btn btn-outline-danger"  type="submit">UnLike</button>-->
<!--                                </form>-->

<!--                                <p>-->
<!--                                    <a class="me-2 btn btn-primary" data-bs-toggle="collapse" href="" role="button" aria-expanded="false" aria-controls="collapseExample">-->

<!--                                    </a>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->





<!--            <div class="collapse" id="collapseExample">-->

<!--                <form method="post" action="" class="border-0 d-grid d-sm-flex border p-3">-->

<!--                    <div class="input-group">-->
<!--                                        <span >-->
<!--                                             <img src="../../assets/img/avatars/2.png" alt="User Image" class="w-px-50 rounded-circle me-3">-->
<!--                                        </span>-->
<!--                        <span class="input-group-text">-->

<!--                                        </span>-->

<!--                        <textarea id="autosize-demo"  name="body" rows="3" class="form-control" required style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 80px;"></textarea>-->
<!--                        <button type="submit" class="btn btn-label-primary">Send</button>-->
<!--                    </div>-->

<!--                </form>-->

<!--                <div class="col-12 ">-->
<!--                    <small class="text-light fw-semibold">Comments</small>-->

<!--                    <div class="demo-inline-spacing mb-3">-->
<!--                        <div class="list-group">-->

<!--                            <div class="list-group-item list-group-item-action d-flex align-items-center cursor-pointer">-->
<!--                                <img src="../../assets/img/avatars/2.png" alt="User Image" class="w-px-50 rounded-circle me-3">-->
<!--                                <div class="w-100">-->
<!--                                    <div class="d-flex justify-content-between">-->
<!--                                        <div class="user-info">-->
<!--                                            <h4 class="mb-1"></h4>-->
<!--                                            <small ></small>-->
<!--                                            <h5 class="mb-5 mt-5"></h5>-->

<!--                                            <div class="user-status">-->
<!--                                                <span class="badge badge-dot bg-success"></span>-->
<!--                                                <small>Online</small>-->
<!--                                            </div>-->
<!--                                            @else-->
<!--                                            <div class="user-status">-->
<!--                                                <span class="badge badge-dot bg-secondary"></span>-->
<!--                                                <small>Offline</small>-->
<!--                                                <small></small>-->
<!--                                            </div>-->


<!--                                        </div>-->
<!--                                        <div class="add-btn">-->
<!--                                            <button class="btn btn-primary btn-sm">Add</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->

<!--                        </div>-->
<!--                    </div>-->
<!--                                                                <small class="text-light fw-semibold">No Comments Yet</small>-->
<!--                    <p class="text-center h4">No Comments Yet .</p>-->

<!--                </div>-->
<!--            </div>-->




<!--            &lt;!&ndash; End Show Posts &ndash;&gt;-->




<!--            <p class="text-center h4">No posts yet ,Please check back later .</p>-->

<!--        </div>-->

<!--    </Base>-->
<!--</template>-->
