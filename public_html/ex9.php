<html>
    <head>
        <script src="vue.js"></script>
    </head>
    <body>

        <div id="app9">
            <p>Original message: "{{ message }}"</p>
            <p>Computed reversed message: "{{ reversedMessage }}"</p>
            <p>Show the reversed variable: "{{ reversed }}"</p>
            <p>Trigger a method: "{{ doSomething() }}" - Here we use a method instead.</p>
            <p>Use a computed to call a method: "{{ callSomeMethod }}"</p>
        </div>

        <script>

            // http://local.labs.se/vue/ex9.php

            // This example show computed output
            //

            var app9 = new Vue({
                el: '#app9',
                data: {
                    message: 'Hello',
                    reversed: ''
                },
                computed: {
                    reversedMessage: function () {
                        const $reversedMessage = this.message.split('').reverse().join('');
                        this.reversed = $reversedMessage;
                        return $reversedMessage;
                    },
                    callSomeMethod: function () {
                        return this.doSomething();
                    }
                },
                methods: {
                    doSomething: function () {
                        return 'Testing';
                    }
                }
            });

        </script>

    </body>
</html>