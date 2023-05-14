<style scoped>
#chat3 .form-control {
    border-color: transparent;
}

#chat3 .form-control:focus {
    border-color: transparent;
    box-shadow: inset 0px 0px 0px 1px transparent;
}

.badge-dot {
    border-radius: 50%;
    height: 10px;
    width: 10px;
    margin-left: 2.9rem;
    margin-top: -.75rem;
}
</style>

<template>
    <section>
        <div class="container py-5">

            <div class="row">
                <div class="col-md-12">

                    <div class="card" id="chat3" style="border-radius: 15px;">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0 overflow-auto">

                                    <div class="p-3">

                                        <div class="input-group rounded mb-3">
                                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                                   aria-describedby="search-addon" />
                                            <span class="input-group-text border-0" id="search-addon">
                      <i class="fas fa-search"></i>
                    </span>
                                        </div>

                                        <div data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
                                            <ul class="list-unstyled mb-0">
                                                <li class="p-2 border-bottom" v-for="friend in friends" :key="friend.id">
                                                    <a href="#!" class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <img
                                                                    :src="'images/'+friend.image"
                                                                    alt="avatar" class="d-flex align-self-center me-3" width="60">
                                                                <span class="badge bg-success badge-dot"></span>
<!--                                                                <span class="badge bg-danger badge-dot"></span>-->
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0">{{friend.name}}</p>
                                                                <p class="small text-muted">Hello, Are you there?</p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Just now</p>
                                                            <span class="badge bg-danger rounded-pill float-end">3</span>
                                                        </div>
                                                    </a>
                                                </li>
<!--                                                <li class="p-2 border-bottom">-->
<!--                                                    <a href="#!" class="d-flex justify-content-between">-->
<!--                                                        <div class="d-flex flex-row">-->
<!--                                                            <div>-->
<!--                                                                <img-->
<!--                                                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"-->
<!--                                                                    alt="avatar" class="d-flex align-self-center me-3" width="60">-->
<!--                                                                <span class="badge bg-warning badge-dot"></span>-->
<!--                                                            </div>-->
<!--                                                            <div class="pt-1">-->
<!--                                                                <p class="fw-bold mb-0">Alexa Chung</p>-->
<!--                                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="pt-1">-->
<!--                                                            <p class="small text-muted mb-1">5 mins ago</p>-->
<!--                                                            <span class="badge bg-danger rounded-pill float-end">2</span>-->
<!--                                                        </div>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li class="p-2 border-bottom">-->
<!--                                                    <a href="#!" class="d-flex justify-content-between">-->
<!--                                                        <div class="d-flex flex-row">-->
<!--                                                            <div>-->
<!--                                                                <img-->
<!--                                                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"-->
<!--                                                                    alt="avatar" class="d-flex align-self-center me-3" width="60">-->
<!--                                                                <span class="badge bg-success badge-dot"></span>-->
<!--                                                            </div>-->
<!--                                                            <div class="pt-1">-->
<!--                                                                <p class="fw-bold mb-0">Danny McChain</p>-->
<!--                                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="pt-1">-->
<!--                                                            <p class="small text-muted mb-1">Yesterday</p>-->
<!--                                                        </div>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li class="p-2 border-bottom">-->
<!--                                                    <a href="#!" class="d-flex justify-content-between">-->
<!--                                                        <div class="d-flex flex-row">-->
<!--                                                            <div>-->
<!--                                                                <img-->
<!--                                                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava4-bg.webp"-->
<!--                                                                    alt="avatar" class="d-flex align-self-center me-3" width="60">-->
<!--                                                                <span class="badge bg-danger badge-dot"></span>-->
<!--                                                            </div>-->
<!--                                                            <div class="pt-1">-->
<!--                                                                <p class="fw-bold mb-0">Ashley Olsen</p>-->
<!--                                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="pt-1">-->
<!--                                                            <p class="small text-muted mb-1">Yesterday</p>-->
<!--                                                        </div>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li class="p-2 border-bottom">-->
<!--                                                    <a href="#!" class="d-flex justify-content-between">-->
<!--                                                        <div class="d-flex flex-row">-->
<!--                                                            <div>-->
<!--                                                                <img-->
<!--                                                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp"-->
<!--                                                                    alt="avatar" class="d-flex align-self-center me-3" width="60">-->
<!--                                                                <span class="badge bg-warning badge-dot"></span>-->
<!--                                                            </div>-->
<!--                                                            <div class="pt-1">-->
<!--                                                                <p class="fw-bold mb-0">Kate Moss</p>-->
<!--                                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="pt-1">-->
<!--                                                            <p class="small text-muted mb-1">Yesterday</p>-->
<!--                                                        </div>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li class="p-2">-->
<!--                                                    <a href="#!" class="d-flex justify-content-between">-->
<!--                                                        <div class="d-flex flex-row">-->
<!--                                                            <div>-->
<!--                                                                <img-->
<!--                                                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"-->
<!--                                                                    alt="avatar" class="d-flex align-self-center me-3" width="60">-->
<!--                                                                <span class="badge bg-success badge-dot"></span>-->
<!--                                                            </div>-->
<!--                                                            <div class="pt-1">-->
<!--                                                                <p class="fw-bold mb-0">Ben Smith</p>-->
<!--                                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="pt-1">-->
<!--                                                            <p class="small text-muted mb-1">Yesterday</p>-->
<!--                                                        </div>-->
<!--                                                    </a>-->
<!--                                                </li>-->
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-7 col-xl-8">

                                    <div class="pt-3 pe-3 overflow-auto" data-mdb-perfect-scrollbar="true"
                                         style="position: relative; height: 400px" >
                                        <template v-for="message in messages">
                                        <div class="d-flex flex-row justify-content-start" v-if="user.id !== message.user.id" y>
                                            <img :src="'images/'+message.user.image"
                                                 alt="avatar 1" style="width: 45px; height: 100%;">
                                            <div>
                                                <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">{{message.message}}</p>
                                                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row justify-content-end" v-else>
                                            <div>
                                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">{{message.message}}</p>
                                                <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                                            </div>
                                            <img :src="'images/'+message.user.image"
                                                 alt="avatar 1" style="width: 45px; height: 100%;">
                                        </div>

                                        </template>

                                    </div>

                                    <div class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                             alt="avatar 3" style="width: 40px; height: 100%;">
                                        <input type="text" class="form-control form-control-lg" id="exampleFormControlInput2"
                                               placeholder="Type message" v-model="newMessage" @keyup.enter="addMessage" name="message">
                                        <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                                        <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                                        <a class="ms-3"  @click="addMessage"><i class="fas fa-paper-plane"></i></a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
<!--    <div class="chat card">-->
<!--        <div class="scrollable card-body" ref="hasScrolledToBottom">-->
<!--            <template v-for="message in messages">-->
<!--                <div class="message message-receive" v-if="user.id !== message.user.id">-->
<!--                    <p>-->
<!--                        <strong class="primary-font">-->
<!--                            {{message.user.name}} :-->

<!--                        </strong>-->
<!--                        {{message.message}}-->
<!--                    </p>-->

<!--                </div>-->

<!--                <div class="message message-send" v-else>-->
<!--                    <p>-->
<!--                        <strong class="primary-font">-->
<!--                            {{message.user.name}} :-->

<!--                        </strong>-->
<!--                        {{message.message}}-->
<!--                    </p>-->
<!--                </div>-->
<!--            </template>-->
<!--        </div>-->

<!--        <div class="chat-form input-group">-->
<!--            <input type="text" name="message" class="form-control input-sm message-" placeholder="Type your message here" v-model="newMessage" @keyup.enter="addMessage" id="btn-input">-->
<!--            <span class="input-group-button">-->
<!--                <button class="btn btn-primary" id="btn-chat" @click="addMessage">-->
<!--                        Send-->
<!--                </button>-->
<!--            </span>-->
<!--        </div>-->
<!--    </div>-->
</template>
<script setup>
import {reactive ,inject,ref,onMounted,onUpdated} from "vue";
import axios from "axios";

let props =defineProps({
    user:Object,
    friends:Array
})
let messages=ref([])
let newMessage=ref('')
let hasScrolledToBottom=ref('')
onMounted(()=>{
    fetchMessages()
})


Echo.private('chat-channel')
    .listen('SendMessage',(e)=>{
       messages.value.push({
           message:e.message.message,
           user:e.user
       })
    });


    const fetchMessages=async ()=>{
        axios.get('/chats/messages/show').then(response=>{
            messages.value=response.data
        })
    }

    const addMessage =async() =>{
        let user_message= {
            user:props.user,
            message: newMessage.value
        };
        messages.value.push(user_message);
        axios.post('/chats/messages/store',user_message).then(response=>{
            console.log(response.data);
        });
        newMessage.value=''
    }
    const scrollBottom=()=>{
        if (messages.value.length > 1){
            let el = hasScrolledToBottom.value;
            el.scrollTop = el.scrollHeight;
        }
    }
</script>

