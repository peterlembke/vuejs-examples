<html>
    <head>
        <script src="vue.js"></script>
    </head>
    <body>

        <div id="app2">
            <p>{{ my_message }}</p>
            <input v-model="my_message">
            <button v-on:click="showAlert">Show alert</button>
        </div>

        <script>

            // http://local.labs.se/vue/ex6.php

            // This example show the v-model command that ties a variable to an input element.
            // Try to edit the text. The my_message variable will be updated and can be used.

            let app2 = new Vue({
                el: '#app2',
                data: {
                    my_message: 'This is my message'
                },
                methods: {
                    showAlert: function () {
                        window.alert(this.my_message);
                    }
                }
            });

        </script>

    </body>
</html>