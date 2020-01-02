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

        <div id="app12">

            <div id="app12a" class="blue">
                <p>Static class. The plain HTML/CSS way.</p>
            </div>

            <div id="app12b" v-bind:class="my_class">
                <p>We have bound the class name(s) to a variable.</p>
            </div>

            <div id="app12c" v-bind:class="{'yellow':true, 'border':border}">
                <p>Here we use boolean for the classes. Class "yellow" is set to true so it is displayed. Class name "border" depend on the variable: border.</p>
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

            // http://local.labs.se/vue/ex12.php

            // This example show how to use set / get on a computed property
            // When you set the fullName with a new value then firstName and lastName are calculated
            // fullName is used like any property

            let app12 = new Vue({
                el: '#app12',
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

            // Example app12f

            /**
             * Add or remove or switch one class name from one DOM object
             * @version 2013-12-13
             * @since 2013-12-13
             * @author Peter Lembke
             * @param $in
             */
            var _ModifyClass = function ($in)
            {
                "use strict";

                const $default = {
                    'id': '', // ID of the object to modify
                    'class': 'yes', // The class name
                    'cmd': 'add' // 'add' or 'remove' or 'switch'
                };
                // $in = _Default($default, $in);

                let $answer = 'false',
                    $message = '';

                leave: {
                    let $boxNode = document.getElementById($in.id);
                    if ($boxNode === false) {
                        $message = 'Box id:"' + $in.id + '" was not found';
                        break leave;
                    }

                    let $names = $boxNode.className.split(' ');
                    let $index = $names.indexOf($in.class);
                    if ($in.cmd === 'add') {
                        $message = 'added';
                        if ($index > -1) {
                            $answer = 'true';
                            $message = 'Class "' + $in.class + '" was already ' + $message;
                            break leave;
                        }
                        $names.push($in.class);
                    }

                    if ($in.cmd === 'remove') {
                        $message = 'removed';
                        if ($index === -1) {
                            $answer = 'true';
                            $message = 'Class "' + $in.class + '" was already ' + $message;
                            break leave;
                        }
                        $names.splice($index, 1);
                    }

                    if ($in.cmd === 'switch') {
                        if ($index > -1) {
                            $names.splice($index, 1); // Remove class
                            $message = 'switched to removed';
                        } else {
                            $names.push($in.class); // Add class
                            $message = 'switched to added';
                        }
                    }

                    $boxNode.className = $names.join(' ');
                    $answer = 'true';
                    $message = 'Class "' + $in.class + '" was ' + $message;
                }

                return {
                    'answer': $answer,
                    'message': $message,
                    'id': $in.id,
                    'class': $in.class,
                    'cmd': $in.cmd
                };
            };

            _ModifyClass({
                'id': 'app12f', // ID of the object to modify
                'class': 'green', // The class name
                'cmd': 'remove' // 'add' or 'remove' or 'switch'
            });

            _ModifyClass({
                'id': 'app12f', // ID of the object to modify
                'class': 'red', // The class name
                'cmd': 'add' // 'add' or 'remove' or 'switch'
            });

            // Example app12g - Native Javascript. One line.
            document.getElementById('app12g').className = 'green border';

        </script>

    </body>
</html>