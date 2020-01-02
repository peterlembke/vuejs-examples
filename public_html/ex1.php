<html>
    <head>
        <script src="vue.js"></script>
    </head>
    <body>

        <div id="app">
            {{ title }}<br>
            {{ message   }}<br>
            {{foobar}}
        </div>

        <div id="app2" v-bind:title="my_title">
            {{ my_text }}
        </div>

        <script>

            // http://local.labs.se/vue/ex1.php

            // How to assign values
            let app = new Vue({
                el: '#app',
                data: {
                    title: 'My title',
                    message: 'My descriptive text',
                    foobar: '--==<<||XX||>>==--'
                }
            });

            // How to change values
            app.title = 'A new title';
            app.message = 'A new message';

            // This example show the v-bind: command that can bind any attribute in the tag.
            let app2 = new Vue({
                el: '#app2',
                data: {
                    my_text: 'My extra fine text - hover the mouse pointer a few seconds to see the title',
                    my_title: 'This is my extra fine tooltip text'
                }
            });

        </script>

    </body>
</html>