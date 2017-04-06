# Web Development Notes 

## Overview
These notes cover the basics of building websites and web applications using HTML, CSS, and JavaScript. 

## Table of Contents
1. HTML
    - Basics
    - Elements
    - Attributes
2. CSS
    - Basics
    - Selectors
    - Box Model
3. JavaScript
    - Basics
    - DOM Manipulation
    - Events

---

## HTML

### Basics
- **HTML** (HyperText Markup Language) is the backbone of the web. Every website you visit is built with HTML.
- It's a markup language that defines the structure of your content.
- HTML consists of a series of **elements**, which you use to enclose, wrap, or mark up different parts of the content to make it appear or act a certain way.

### Elements
- HTML elements are the building blocks of HTML pages.
- An element is defined by a start tag, some content, and an end tag: `<tagname>Content goes here...</tagname>`
- **Example**: `<h1>This is a heading</h1>`

### Attributes
- Attributes provide additional information about elements.
- Placed within the element's opening tag and are made up of a name and a value: `<tagname attributename="value">`
- **Example**: `<p style="color:red;">This is a red paragraph.</p>`

---

## CSS

### Basics
- **CSS** (Cascading Style Sheets) is used to style and layout web pages — for example, to alter the font, color, size, and spacing of your content.
- CSS is applied to HTML elements and can be added to HTML through an external stylesheet, internal stylesheet, or inline styles.

### Selectors
- CSS selectors are used to select the HTML element you want to style.
- Can be based on element name, ID, class, attribute, and more.
- **Example**: 
  - `.myClass { }` (selects all elements with class="myClass")
  - `#myID { }` (selects the element with id="myID")

### Box Model
- All HTML elements can be considered as boxes. The CSS box model has the following components: content, padding, border, and margin.
- This model allows us to place a border around elements and space elements in relation to other elements.

---

## JavaScript

### Basics
- **JavaScript** is the programming language of the web.
- It's used to make web pages dynamic and interactive, since it can update and change both HTML and CSS.

### DOM Manipulation
- The **DOM** (Document Object Model) is a programming interface for web documents. It represents the page so that programs can change the document structure, style, and content.
- JavaScript can manipulate the DOM, allowing programmers to change the document content, structure, and style.
- **Example**: 
  ```javascript
  document.getElementById('demo').innerHTML = 'Hello, World!';


### Events
- JavaScript's interaction with HTML is handled through events that occur when the user or the browser manipulates a page.
- When the page loads, when a form is submitted, or when the user clicks a button, it triggers a certain event.
- **Example**: 
```
document.getElementById('myButton').addEventListener('click', function() {
    alert('Button was clicked!');
```
