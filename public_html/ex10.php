<html>
    <head>
        <script src="vue.js"></script>
    </head>
    <body>

        <div id="app10a">
            {{ fullName }}
        </div>

        <div id="app10b">
            {{ fullName }}
        </div>

        <script>

            // http://local.labs.se/vue/ex10.php

            // This example show watches.
            // When firstName is changed then fullName is updated
            // When lastName is changed then fullName is updated

            var app10a = new Vue({
                el: '#app10a',
                data: {
                    firstName: 'Foo',
                    lastName: 'Bar',
                    fullName: 'Foo Bar'
                },
                watch: {
                    firstName: function (val) {
                        this.fullName = val + ' ' + this.lastName
                    },
                    lastName: function (val) {
                        this.fullName = this.firstName + ' ' + val
                    }
                }
            });

            // This example show computed property. This is cached.
            // The code is only ruin again if firstName or lastName is updated.
            // That makes this code more effective and also shorter
            // Note that you can only __get__ a value from the below definition. See ex11 for a full get/set

            var app10b = new Vue({
                el: '#app10b',
                data: {
                    firstName: 'Foo',
                    lastName: 'Bar',
                },
                computed: {
                    fullName: function () {
                        return this.firstName + ' ' + this.lastName
                    }
                }
            });

        </script>

    </body>
</html>