# VUE js
Vue js is a Javascript library that help you to handle the DOM - The graphical user interface. You still write HTML, CSS and Javascript but now you have a much clearer separation between the HTML and the javascript that reference that HTML.

You also get a system for creating reusable components with a proper interface.

In this series of examples I show what the vue js library can do. The examples follow the introduction from [vuejs.org](https://vuejs.org/v2/guide/) but with my changes to show variations.

You find the vue source code [here](https://github.com/vuejs/vue). Have a look at the dist folder.

# Basic examples
These examples show some basic feature in vue.
I have followed the manual that you can find [here](https://vuejs.org/v2/guide/installation.html)

## Ex1
This example show the binding `{{ my_variable }}`.

This example also show the `v-bind:` command that can bind any attribute in the tag.

Read more here [Syntax](https://vuejs.org/v2/guide/syntax.html) 

## Ex2
This example show the `v-bind:` command that can bind any attribute in the tag.

Read more here [Syntax](https://vuejs.org/v2/guide/syntax.html) 

## Ex3
The `v-if` command is shown here. It allows you to set a condition if the tag should show (true) or not (false).

Read more here [Conditional Rendering](https://vuejs.org/v2/guide/conditional.html) 

## Ex4
This example show the `v-if` command boolean again but this time with the button in the div and it is using the `v-on:click` to run the javascript.

Read more here [Conditional Rendering](https://vuejs.org/v2/guide/conditional.html) 
and [Event Handling](https://vuejs.org/v2/guide/events.html)

## Ex5
This example show the `v-for` loop command.
You can loop any tag. First we create li tags and the p tags.
Here you also see how we add `methods` to the definition and use them in the buttons.

Read more here [List Rendering](https://vuejs.org/v2/guide/list.html) 

## Ex6
This example show the `v-model` command that ties a variable to an input element.
Try to edit the text. The my_message variable will be updated and can be used.

Read more here [Form Input Bindings](https://vuejs.org/v2/guide/forms.html) 

## Ex7
How to display `rawHtml` and use of `v-once`. 

Read more here [Raw HTML](https://vuejs.org/v2/guide/syntax.html#Raw-HTML) 
and here [v-once](https://vuejs.org/v2/guide/syntax.html#Text)

## Ex8
Example with rendering a link in four different flavours.

Read more here [Arguments](https://vuejs.org/v2/guide/syntax.html#Arguments) 
and [Dynamic arguments](https://vuejs.org/v2/guide/syntax.html#Dynamic-Arguments) 
and [Short hands](https://vuejs.org/v2/guide/syntax.html#Shorthands) 

## Ex9
Here we use [Computed Properties](https://vuejs.org/v2/guide/computed.html). The result from a computed property are cached as long as the properties used to calculate is not updated. A method on the other hand is not cached.

Read more here [Computed Properties](https://vuejs.org/v2/guide/computed.html) 

## Ex10
How to use watches compared to computed properties.

Read more here [Computed Properties](https://vuejs.org/v2/guide/computed.html).

## Ex11
This example uses set/get on a computed property.  
I also show how you can use methods instead.  
And a third example how you can use watches instead.
   
Read more here [Computed set/get](https://vuejs.org/v2/guide/computed.html#Computed-Setter).

## Ex12
CSS classes are used to style html elements. You put a class name on a html element and have the css class definition separate.

Vue.js will help you manage what css class names you want to add to a html element.   

I also added a native javascript method to add/remove/swap classes to show that there is another way to do this.

Also added the one line javascript that sets classes. Then you see what is required to use it.

Read more here [Class and style](https://vuejs.org/v2/guide/class-and-style.html) 

## Ex13


Read more here [Binding Inline Styles](https://vuejs.org/v2/guide/class-and-style.html#Binding-Inline-Styles) 

# Component examples
Here are some examples how to build components from the examples above.

## Comp1
Components are described [here](https://vuejs.org/v2/guide/#Composing-with-Components).
This is the example that are in the link.

# Comp2
