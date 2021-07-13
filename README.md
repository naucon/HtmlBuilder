naucon HTML Builder Package
===========================

About
-----
A package for php to generate html markup with object representation but without the overhead of domXML or SimpelXML. The main purpose is to render html in view helpers.

### Features

* achor
* break
* button
* div
* fieldset
* fieldset legend
* form
* headline
* image
* input
    * button
    * checkbox
    * file
    * hdden
    * image
    * password
    * radio
    * submit
    * text
* label
* list
    * list item
    * unordered list
    * ordered list
* meta
    * author
    * description
    * keywords
    * robots
* paragraph
* preformated text
* select
    * options
* span
* table
    * thead
    * tbody
    * tfoot
    * tr
        * td
        * th
* textarea
* title


### Limitations

At the moment the library do not consider different html standards like html4.01, xhtml, html5 etc. Also some html markup notations are missing.


### Compatibility

* PHP5.3


Installation
------------

install the latest version via composer

    composer require naucon/htmlbuilder


Usage
--------

### Basics

First create a class instance of `HtmlBuilder`. Than create a class intance of `HtmlElement` or `HtmlElementInterface`. The Instance is given the tag `h2` as first parameter and the content of the element as second parameter.

    use Naucon\HtmlBuilder\HtmlBuilder;
    $htmlBuilder = new HtmlBuilder();

    use Naucon\HtmlBuilder\HtmlElement;
    $htmlElement = new HtmlElement('h2', 'My Headline');
    echo $htmlBuilder->render($htmlElement);

    // Output:
    // <h2>My Headline</h2>


You can use concrete html elements like headlines, forms, tables and more. In this example we create a instance of `HtmlHeadline` to render a `<h2>` html element.


    use Naucon\HtmlBuilder\HtmlHeadline;
	$headline = new HtmlHeadline('My Headline', 2);
	echo $htmlBuilder->render($headline);

    // Output:
    // <h2>My Headline</h2>

### Content

A content of the html elements contain can either be set over the constructor or the method `setContent()`.

    $htmlElementObject = new HtmlDiv('foo');
    echo $htmlBuilder->render($htmlElementObject);

    // Output:
    // <div>foo</div>

    $htmlElementObject = new HtmlDiv();
    $htmlElementObject->setContent('foo');
    echo $htmlBuilder->render($htmlElementObject);

    // Output:
    // <div>foo</div>

A html element instance can also be set as content.

    $htmlElementObject = new HtmlDiv();
    $htmlElementObject->setContent(new HtmlHeadline('Main headline', 1));
    echo $htmlBuilder->render($htmlElementObject);

    // Output:
    // <div><h1>Main headline</h1></div>

To append a content use the method `addContent()`.

    $htmlElementObject = new HtmlDiv('foo');
    $htmlElementObject->addContent(new HtmlHeadline('Main headline', 1));
    echo $htmlBuilder->render($htmlElementObject);

    // Output:
    // <div>foo<h1>Main headline</h1></div>

### Attributes

Every instance of html element have the following methods access and modify attributes:

`getAttributes()` html element attributes with key-value-pairs
`hasAttributes()` html element has attributes
`setAttributes()` html element attributes with key-value-pairs
`getAttribute($key)` return html element attribute value of a given key
`hasAttribute($key)` has html element attribute of a given key
`setAttribute($key, $value=null)` set a html element attribute value of a given key
`appendAttribute($key, $value=null, $seperater=null)` append a html element attribute value of a given key

Example:

    $htmlElementObject = new HtmlDiv('foo');
    $htmlElementObject->setAttribute('id', 'bar');
    echo $htmlBuilder->render($htmlElementObject);

    // Output:
    // <div id="bar">foo</div>

    $htmlElementObject = new HtmlDiv('foo');
    $htmlElementObject->setAttribute('class', 'btn');
    $htmlElementObject->appendAttribute('class', 'primary', ' ');
    echo $htmlBuilder->render($htmlElementObject);

    // Output:
    // <div class="btn primary">foo</div>

Instances of `HtmlElementUniversalAbstract`, such as achor, break, button, div, fieldset, fieldset legend, form, headline, image, input, label, list, paragraph, preformated text, select, span, textarea have the following getter-/setter-methodes to access and modify attributes:

`getId()`, `setId($id)`, `getClass()`, `setClass($class)`, `getStyle()`, `setStyle($style)`, `getTitle()`, `setTitle($title)`, `getOnClick()`, `setOnClick($event)`, `getOnDoubleClick()`, `setOnDoubleClick($event)`, `getOnMouseDown()`, `setOnMouseDown($event)`, `getOnMouseUp()`, `setOnMouseUp($event)`, `getOnMouseOver()`, `setOnMouseOver($event)`, `getOnMouseMove()`, `setOnMouseMove($event)`, `getOnMouseOut()`, `setOnMouseOut($event)`, `getOnKeyPress()`, `setOnKeyPress($event)`, `getOnKeyDown()`, `setOnKeyDown($event)`, `getOnKeyUp()`, `setOnKeyUp($event)`

Some html elements also have special getter-/setter-methodes to access and modify attributes. For Example anchor (href, target, name, onblur, onfocus), button (type, name, value, tabindex, disabled, onblur, onfocus), image (src, alt, width, height, loading), meta (name), label (for), form (action, method, target, enctype, autocomplete, onreset, onsubmit), input (type, name, disabled, readonly, onblur, onchange, onfocus).


### Nested elements

Nasted html elements can set with the `addChildElement()` method.

    use Naucon\HtmlBuilder\HtmlDiv;
    $htmlElementObject = new HtmlDiv();
    $htmlElementObject->setClass('level1');

    $htmlElementChildObject = new HtmlDiv();
    $htmlElementChildObject->setClass('level11');
    $htmlElementObject->addChildElement($htmlElementChildObject);

    $htmlElementChild2Object = new HtmlDiv('Home');
    $htmlElementChild2Object->setClass('level111');

    $htmlElementChildObject->addChildElement($htmlElementChild2Object);
    echo $htmlBuilder->render($htmlElementObject);

    // Output:
    // <div class="level1">
    // <div class="level11">
    // <div class="level111">Home</div>
    // </div>
    // </div>

Some Html Element with nasted elements by design have a particular method to set options oder item.

Like the select element with options...

    $htmlElementObject = new HtmlSelect('foo');
    $htmlElementObject->addOption('Ms.', 'MS');
    $htmlElementObject->addOption('Mr.', 'MR', true);
    echo $htmlBuilder->render($htmlElementObject);
    
    // Output:
    // <select name="foo">
    // <option value="MS">Ms.</option>
    // <option value="MR" selected="selected">Mr.</option>
    // </select>';
    
... or ordered Lists (ol) with list items (li) ...

    $htmlElementObject = new HtmlListOrdered();
    $htmlElementObject->addItem('foo');
    $htmlElementObject->addItem('Bar', 'bar');
    echo $htmlBuilder->render($htmlElementObject);
    
    // Output:
    // <ol>
    // <li>foo</li>
    // <li value="bar">Bar</li>
    // </ol>

... or unordered Lists (ul) with list items (li) ...

    $htmlElementObject = new HtmlListUnordered();
    $htmlElementObject->addItem('foo');
    $htmlElementObject->addItem('Bar', 'bar');
    echo $htmlBuilder->render($htmlElementObject);
    
    // Output:
    // <ul>
    // <li>foo</li>
    // <li value="bar">Bar</li>
    // </ul>

... or tables.

    use Naucon\HtmlBuilder\HtmlTable;

    $htmlTable = new HtmlTable();
    $htmlTableHeader = $htmlTable->addHeader();
    $htmlTableRow = $htmlTableHeader->addRow();
    $htmlTableRow->addHeader('fruit')
        ->addHeader('quantity');

    $htmlTableBody = $htmlTable->addBody();
    $htmlTableRow = $htmlTableBody->addRow();
    $htmlTableRow->addData('apple')
        ->addData('3');

    $htmlTableRow = $htmlTableBody->addRow();
    $htmlTableRow->addData('banana')
        ->addData('4');

    $htmlTableRow = $htmlTableBody->addRow();
    $htmlTableRow->addData('orange')
        ->addData('2');

    $htmlTableFooter = $htmlTable->addFooter();
    $htmlTableRow = $htmlTableFooter->addRow();
    $htmlTableRow->addData('total')
        ->addData('9');

    echo $htmlBuilder->render($htmlTable);

    // Output:
    // <table>
    //   <thead>
    //     <tr>
    //       <th>fruit</th>
    //       <th>quantity</th>
    //     </tr>
    //   </thead>
    //   <tbody>
    //     <tr>
    //       <td>apple</td>
    //       <td>3</td>
    //     </tr>
    //     <tr>
    //       <td>banana</td>
    //       <td>4</td>
    //     </tr>
    //     <tr>
    //       <td>orange</td>
    //       <td>2</td>
    //     </tr>
    //   </tbody>
    //   <tfoot>
    //     <tr>
    //       <td>total</td>
    //       <td>9</td>
    //     </tr>
    //   </tfoot>
    // </table>

### Render

Html elements can be rendered in the following ways:

With `render()` the complete html element with his content will be rendered.

    $htmlElementObject = new HtmlDiv(new HtmlHeadline('Main headline', 1));
    echo $htmlBuilder->render($htmlElementObject);

    // Output:
    // <div><h1>Main headline</h1></div>

With `renderContent()` only the content will be rendered.

    $htmlElementObject = new HtmlDiv(new HtmlHeadline('Main headline', 1));
    echo $htmlBuilder->renderContent($htmlElementObject);

    // Output:
    // <h1>Main headline</h1>

With `renderStartTag()` only the start tag of the html element will be rendered.

    $htmlElementObject = new HtmlDiv(new HtmlHeadline('Main headline', 1));
    echo $htmlBuilder->renderStartTag($htmlElementObject);

    // Output:
    // <div>

With `renderEndTag()` only the end tag of the html element will be rendered.

    $htmlElementObject = new HtmlDiv(new HtmlHeadline('Main headline', 1));
    echo $htmlBuilder->renderEndTag($htmlElementObject);

    // Output:
    // </div>



Roadmap
-------

* constant to define HTML standard












