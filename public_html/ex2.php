<html>
    <head>
        <script src="vue.js"></script>

        <style>
            .blue {
                background-color: lightblue;
                color: black;
                text-align: right;
            }

            .green {
                background-color: lightgray;
                color: green;
                text-align: left;
            }
        </style>

    </head>
    <body>

        <div id="app2" v-bind:title="my_title" v-bind:class="my_class">
            {{ my_text }}
        </div>

        <script>

            // http://local.labs.se/vue/ex2.php

            // This example show the v-bind: command that can bind any attribute in the tag.
            // Here we bind the title (tooltip) and the class (CSS class name)

            let app2 = new Vue({
                el: '#app2',
                data: {
                    my_text: 'My extra fine text - hover the mouse pointer a few seconds to see the title',
                    my_title: 'This is my extra fine tooltip text',
                    my_class: 'green'
                }
            });

            app2.my_class = 'blue';

        </script>

    </body>
</html>