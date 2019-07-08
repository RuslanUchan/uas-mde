@extends('layouts.front.app')

@section('content')
    <div class="container">
        <div class="container chats">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">User</div>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info">1</li>
                            <li class="list-group-item list-group-item-info">1</li>
                            <li class="list-group-item">2</li>
                        </ul>
                        {{--                        <div class="card-body">--}}
                        {{--                            <chat-messages :messages="messages"></chat-messages>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="card-footer">--}}
                        {{--                            <chat-form--}}
                        {{--                                    @messagesent="addMessage"--}}
                        {{--                                    :user="{{ auth()->user() }}"--}}
                        {{--                            ></chat-form>--}}
                        {{--                        </div>--}}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Send a message"
                               style="border: 1px solid #ccc;">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="button">Send</button>
                        </span>
                    </div><!-- /input-group -->
                    {{--                    <ul class="list-group">--}}
                    {{--                        <li class="list-group-item" v-for="user in users">--}}
                    {{--                            @{{ user.name }} <span v-if="user.typing" class="badge badge-primary">typing...</span>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    // import ChatMessages from "../js/components/ChatMessages";
    // export default {
    //     components: {ChatMessages}
    // }
</script>