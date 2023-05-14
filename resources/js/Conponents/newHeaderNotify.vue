<template>
    <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2" @click="makeAsRead()">
        <a
            class="nav-link dropdown-toggle hide-arrow"
            href="javascript:void(0);"
            data-bs-toggle="dropdown"
            data-bs-auto-close="outside"
            aria-expanded="false"
        >
            <i class="bx bx-bell bx-sm"></i>

            <span class="badge rounded-pill badge-notifications bg-danger" v-if="vUnreadNotifications.length > 0">{{vUnreadNotifications.length}}</span>

        </a>
        <ul class="dropdown-menu dropdown-menu-end py-0">
            <li class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                    <h5 class="text-body me-auto mb-0">Notifications</h5>
                    <a
                        href="javascript:void(0)"
                        class="dropdown-notifications-all text-body"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Mark all as read"
                    ><i class="bx fs-4 bx-envelope-open"></i
                    ></a>
                </div>
            </li>
            <li class="dropdown-notifications-list scrollable-container">
                <ul class="list-group list-group-flush">
<!--                    , notify.read_at !== 'undefind' ? '' : 'marked-as-read'-->
                        <li  v-for="notify in vAllNotifications" :key="notify.id" :class="'list-group-item list-group-item-action dropdown-notifications-item '  " >

                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar">
                                        <a href=""> <img :src="'images/'+notify.data.image" alt class="w-px-40 h-auto rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="flex-grow-1">

                                    <p class="mb-1">{{notify.data.name}} {{notify.data.message}} {{notify.data.title}}</p>
                                    <small class="text-muted"></small>
                                </div>
                                <div class="dropdown-notifications-actions flex-shrink-0">
                                    <a href="javascript:void(0)" class="dropdown-notifications-read"
                                    ><span class="badge badge-dot"></span
                                    ></a>
                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                    ><span class="bx bx-x"></span
                                    ></a>
                                </div>
                            </div>

                        </li>

                </ul>
             </li>
            <li class="dropdown-menu-footer border-top">
                <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                    View all notifications
                </a>
            </li>
        </ul>
    </li>
</template>

<script setup>
import {ref,onMounted} from "vue";
import axios from "axios";


const props = defineProps({
    user:Object,
    allnotifications:Array,
    unreadnotifications:Array,
    readnotifications:Array,

})
let vUnreadNotifications=ref([])
let vAllNotifications=ref([])

onMounted(()=>{
    vAllNotifications.value = props.allnotifications
    vUnreadNotifications.value=props.unreadnotifications
})

const makeAsRead=async ()=>{
     await axios.post('makeRead/notify').then(response=>{
         vUnreadNotifications.value= response.data;
     });
}

Echo.private('post_like_notify.'+props.user.id)
    .notification((notification)=>{
        axios.post('get/allNotify').then(response=>{
            vAllNotifications.value= response.data

        })
        vUnreadNotifications.value.push(notification.notification)

    })


</script>
