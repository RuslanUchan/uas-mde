<template>
    <div>
        <h1>Chat Messages</h1>
    </div>
<!--    <ul class="chat">-->
<!--        <li class="left clearfix" v-for="message in messages">-->
<!--            <div class="chat-body clearfix">-->
<!--                <div class="header">-->
<!--                    <strong class="primary-font">-->
<!--                        {{ message.user.name }}-->
<!--                    </strong>-->
<!--                </div>-->
<!--                <p>-->
<!--                    {{ message.message }}-->
<!--                </p>-->
<!--            </div>-->
<!--        </li>-->
<!--    </ul>-->
</template>

<script>
    export default {
        name: "ChatMessages",
        // props: ['messages']
        mounted() {
            console.log("Component Mounted");
        }
    };
</script>