<html>
    <head>
        <script src="vue.js"></script>
    </head>
    <body>

        <div id="app2">
            <ol>
                <li v-for="item in my_list">
                    {{ item.my_text }}
                </li>
            </ol>
        </div>

        <div id="app3">
            <p v-for="item in my_list">
                {{ item.my_text }}
            </p>
            <button v-on:click="addItemFirst">Add item first</button>
            <button v-on:click="addItemLast">Add item last</button>
        </div>

        <script>

            // http://local.labs.se/vue/ex5.php

            // This example show the v-for loop command.
            // You can loop any tag. First we create li tags and the p tags.
            // Here you also see how we add methods to the definition and use them in the buttons.

            let app2 = new Vue({
                el: '#app2',
                data: {
                    my_list: [
                        { my_text: 'Option 1' },
                        { my_text: 'Option 2' },
                        { my_text: 'Option 3' },
                        { my_text: 'Option 4' }
                    ]
                }
            });

            let app3 = new Vue({
                el: '#app3',
                data: {
                    my_list: [
                        { my_text: 'Option 1' },
                        { my_text: 'Option 2' },
                        { my_text: 'Option 3' },
                        { my_text: 'Option 4' }
                    ]
                },
                methods: {
                    addItemFirst: function () {
                        this.my_list.unshift({ my_text: 'New item first' });
                    },
                    addItemLast: function () {
                        this.my_list.push({ my_text: 'New item last' });
                    }
                }
            });

        </script>

    </body>
</html>