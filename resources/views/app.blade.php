<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body{
                padding: 2em 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="col-md-6 col-md-push-3">
                <h1>Users</h1>
                <hr>
                <ul class="list-group" v-if="users.length > 0">
                    <li class="list-group-item" v-repeat="users" class="user-@{{ $index }}">
                        <span class="badge">@{{ age }} years old</span>
                        @{{ name }}
                    </li>
                </ul>
                <pre>@{{ $data | json}}</pre>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.1/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.3.5/socket.io.min.js"></script>
        <script>
            var vm = new Vue({

                el: 'body',

                ready: function(){

                    self = this;

                    var socket = io('http://sockets.dev:3000');

                    socket.on("registration-channel:App\\Events\\UserRegistered", function(data) {

                        console.log(data);
                        self.users.push(data.user);

                    });
                },

                data: {
                    users: [ ]
                }

            });
        </script>
    </body>
</html>
