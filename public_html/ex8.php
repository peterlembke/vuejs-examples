<html>
    <head>
        <script src="vue.js"></script>
    </head>
    <body>

        <div id="app8">
            {{description}}<br>
            <a v-bind:href="url">{{title}}</a> - {{ex1}}<br>
            <a :href="url">{{title}}</a> - {{ex3}}<br>
            <a v-bind:[my_command]="url">{{title}}</a> - {{ex2}}<br>
            <a :[my_command]="url">{{title}}</a> - {{ex3}}<br>
            <a v-on:click="doSomething" href="#">{{title}}</a> - {{ex4}}<br>
            <a @click="doSomething" href="#">{{title}}</a> - {{ex3}}<br>
            <a v-on:[event_type]="doSomething" href="#">{{title}}</a> - {{ex4}}<br>
            <a @[event_type]="doSomething" href="#">{{title}}</a> - {{ex3}}<br>
        </div>

        <script>

            // http://local.labs.se/vue/ex8.php

            // This example show the v-model command that ties a variable to an input element.
            // Try to edit the text. The my_message variable will be updated and can be used.

            let app8 = new Vue({
                el: '#app8',
                data: {
                    my_command: 'href',
                    url: 'https://www.infohub.se',
                    title: 'Infohub',
                    description: 'All links render the same end result',
                    ex1: 'The href command is bound to variable "url"',
                    ex2: 'The [my_command] will render the value in my_command. Variable "url" is also bound.',
                    ex3: 'This is the short version',
                    ex4: 'Using an event to trigger a method that reroute to a url',
                    method_name: 'doSomething',
                    event_type: 'click'
                },
                methods: {
                    doSomething: function () {
                        window.alert('Hello');
                        window.location.href = this.url;
                    }
                }
            });

        </script>

    </body>
</html>