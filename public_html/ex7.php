<html>
    <head>
        <script src="vue.js"></script>
    </head>
    <body>

        <div id="app2">
            <p>Using mustaches: {{ rawHtml }} to display plain text</p>
            <p>Using v-html directive: <span v-html="rawHtml"></span> to display html</p>
            <p>Using v-once directive: <span v-once>{{ rawHtml }}</span> then the value never change</p>
            <p>Using v-once and v-html: <span v-html="rawHtml" v-once></span> then the HTML value never change. The HTML directive always have precedence over the mustaches</p>
        </div>

        <script>

            /**
             * This example show the v-model command that ties a variable to an input element.
             * Try to edit the text. The my_message variable will be updated and can be used.
             * http://local.labs.se/vue/ex7.php
             * Read more here https://vuejs.org/v2/guide/syntax.html#Text
             * @type {Vue}
             */
            let app2 = new Vue({
                el: '#app2',
                data: {
                    rawHtml: '<b>My message</b>'
                }
            });

            app2.rawHtml = '<i>My new message</i>';

        </script>

    </body>
</html>