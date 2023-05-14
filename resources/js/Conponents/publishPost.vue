<template>

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

                                    <option v-for="category in categories" :key="category.id" :value="category.id">{{category.name}}</option>

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

</template>

<script setup>
defineProps({

    categories:Array,
})
</script>
