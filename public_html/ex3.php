<html>
    <head>
        <script src="vue.js"></script>
    </head>
    <body>

        <div id="app2" v-if="my_master_switch" v-bind:title="my_title">
            {{ my_text }}
        </div>

        <script>

            // http://local.labs.se/vue/ex3.php

            // This example show the v-if command boolean

            let app2 = new Vue({
                el: '#app2',
                data: {
                    my_text: 'My extra fine text - hover the mouse pointer a few seconds to see the title',
                    my_title: 'This is my extra fine tooltip text',
                    my_master_switch: false
                }
            });

            function showMyText(theVariable) {
                theVariable.my_master_switch = true;
            }

        </script>

        <div>The two buttons do the same thing</div>

        <button onclick="showMyText(app2)">Show my text with a function</button>
        <button onclick="app2.my_master_switch=true">Show my text with direct reference</button>

    </body>
</html>