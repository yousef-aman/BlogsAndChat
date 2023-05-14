<script setup>
import {computed, onMounted, reactive, ref} from "vue";
import axios from "axios";
import {property} from "lodash/util";
const props = defineProps({
    post:Object,
    csrf:String,
    href:String,
    liked:String
})
let isLiked = ref(props.liked)
const postLike= async  (id) => {

    await axios.post(`/post/like/${id}`)
        .then(response=>{

            if (response.data === 'Liked'){
                isLiked.value = 'DoUnLike'
            }
        })
}

const postUnLike= async  (id) => {

    await axios.delete(`/post/unlike/${id}`)
        .then(response=>{

            if (response.data === 'UnLiked'){
                isLiked.value = 'DoLike'

            }
        })
}



</script>

<template>


        <div class="border-0">
            <button v-show="isLiked==='DoLike'" @click.prevent="postLike(post.id)" class="me-2 btn btn-outline-success" >Like</button>
            <button v-show="isLiked==='DoUnLike'" @click.prevent="postUnLike(post.id)" class="me-2 btn btn-outline-danger"  >UnLike</button>
        </div>


</template>
