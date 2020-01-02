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

            .yellow {
                background-color: yellow;
                color: #171dff;
                text-align: center;
            }

            .red {
                background-color: red;
                color: whitesmoke;
                text-align: right;
            }

            .border {
                border-radius: 10px;
                border-color: black;
                border-width: 3px;
                border-style: solid;
            }

        </style>

    </head>
    <body>

        <div id="app13">

            <div id="app12a" class="blue">
                <p>Static class. The plain HTML/CSS way.</p>
            </div>

            <div id="app12b" v-bind:class="my_class">
                <p>We have bound the class name(s) to a variable.</p>
            </div>

            <div id="app12c" v-bind:style="{ color: activeColor, fontSize: fontSize + 'px' }">
                <p>Here we use boolean for the css.</p>
            </div>

            <div id="app12d" v-bind:class="classObject">
                <p>Same as app12c but here we use a computed variable that do the same thing. Then we separate code and layout.</p>
            </div>

            <div id="app12e" v-bind:class="[className1, className2]">
                <p>In this example we will fetch class names from variables.</p>
            </div>

            <div id="app12f" class="green border">
                <p>In this example we use native javascript to remove green and add red while keeping border.</p>
            </div>

            <div id="app12g" class="">
                <p>In this example we use native javascript to set all css classes with one command.</p>
            </div>

        </div>

        <script>

            // http://local.labs.se/vue/ex13.php

            // This example show how to use set / get on a computed property
            // When you set the fullName with a new value then firstName and lastName are calculated
            // fullName is used like any property

            let app13 = new Vue({
                el: '#app13',
                data: {
                    my_class: 'blue',
                    border: true,
                    className1: 'red',
                    className2: 'border'
                },
                computed: {
                    classObject: function () {
                        return {
                            border: this.border,
                            yellow: true
                        }
                    }
                }
            });

            app12.my_class = 'green';

        </script>

    </body>
</html>