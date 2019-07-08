<template>
    <div>
        <h1>Chat Form</h1>
    </div>
<!--    <div class="input-group">-->
<!--        <input-->
<!--                id="btn-input"-->
<!--                type="text"-->
<!--                name="message"-->
<!--                class="form-control"-->
<!--                placeholder="Send a message"-->
<!--                v-model="newMessage"-->
<!--                @keyup.enter="sendMessage"-->
<!--                @keyup="sendTypingEvent"-->
<!--                style="border: 1px solid #ccc;">-->
<!--        <span class="input-group-btn">-->
<!--            <button class="btn btn-success" type="button" id="btn-chat" @click="sendMessage">Send</button>-->
<!--        </span>-->
<!--    </div>-->
</template>

<script>
    export default {
        name: "ChatForm",
        mounted() {
            console.log("Component Mounted");
        }
    }
    // export default {
    //     props: ['user'],
    //
    //     data() {
    //         return {
    //             newMessage: ''
    //         }
    //     },
    //
    //     methods: {
    //         sendTypingEvent() {
    //             Echo.join('chat')
    //                 .whisper('typing', this.user);
    //         },
    //
    //         sendMessage() {
    //             this.$emit('messagesent', {
    //                 user: this.user,
    //                 message: this.newMessage
    //             });
    //
    //             this.newMessage = ''
    //         }
    //     }
    // }
</script>