<html>
    <head>
        <script src="vue.js"></script>
    </head>
    <body>

        <div id="app2">
            <button v-on:click="show_text1 = !show_text1; show_text2 = !show_text2;">Toggle the text visibility</button>
            <p v-if="show_text1" >{{ my_text1 }}</p>
            <p v-if="show_text2" >{{ my_text2 }}</p>
        </div>

        <script>

            // http://local.labs.se/vue/ex4.php

            // This example show the v-if command boolean again but this time with the button in the div
            // v-on:click run the javascript.

            let app2 = new Vue({
                el: '#app2',
                data: {
                    my_text1: 'My text',
                    my_text2: 'My extra fine text',
                    show_text1: false,
                    show_text2: true
                }
            });

        </script>

    </body>
</html>