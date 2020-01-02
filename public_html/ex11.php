<html>
    <head>
        <script src="vue.js"></script>
    </head>
    <body>

        <div id="app11a">
            {{ fullName }} is build from first name "{{ firstName }}" and last name "{{ lastName }}":
        </div>

        <div id="app11b">
            {{ fullName }} is build from first name "{{ firstName }}" and last name "{{ lastName }}":
        </div>

        <div id="app11c">
            {{ fullName }} is build from first name "{{ firstName }}" and last name "{{ lastName }}":
        </div>

        <script>

            // http://local.labs.se/vue/ex11.php

            // This example show how to use set / get on a computed property
            // When you set the fullName with a new value then firstName and lastName are calculated
            // fullName is used like any property

            let app11a = new Vue({
                el: '#app11a',
                data: {
                    firstName: 'Foo',
                    lastName: 'Bar'
                },
                computed: {
                    fullName: {
                        get: function () {
                            return this.firstName + ' ' + this.lastName;
                        },
                        set: function (newValue) {
                            let names = newValue.split(' ');
                            this.firstName = names[0];
                            this.lastName = names[names.length - 1];
                        }
                    }
                }
            });

            app11a.fullName = 'Bo Ek';

            // Here is another solution that uses methods to calculate the fullName

            let app11b = new Vue({
                el: '#app11b',
                data: {
                    firstName: 'Foo',
                    lastName: 'Bar',
                    fullName: 'Foo Bar'
                },
                methods: {
                    getFullName: function () {
                        this.fullName = this.firstName + ' ' + this.lastName;
                        return this.fullName;
                    },
                    setFullName: function (newValue) {
                        let names = newValue.split(' ');
                        this.firstName = names[0];
                        this.lastName = names[names.length - 1];
                        this.fullName = this.firstName + ' ' + this.lastName;
                    }
                }
            });

            app11b.setFullName('Bo Ek');

            // Here is a solution with watched properties
            // You might think that we have a circle reference here when fullName sets firstName that sets fullName
            // and so on but it seems like the watch only triggers when there is a different value than we already have.
            // In this example fullName are triggered and then firstName and then lastName. That is the end of it.

            let app11c = new Vue({
                el: '#app11c',
                data: {
                    firstName: 'Foo',
                    lastName: 'Bar',
                    fullName: 'Foo Bar'
                },
                watch: {
                    firstName: function (newValue) {
                        this.fullName = newValue + ' ' + this.lastName;
                    },
                    lastName: function (newValue) {
                        this.fullName = this.firstName + ' ' + newValue;
                    },
                    fullName: function (newValue) {
                        let names = newValue.split(' ');
                        this.firstName = names[0];
                        this.lastName = names[names.length - 1];
                        this.fullName = this.firstName + ' ' + this.lastName;
                    }
                }
            });

            app11c.fullName = 'Bo Ek';

        </script>

    </body>
</html>