<?php
    use Naucon\HtmlBuilder\HtmlBuilder;
    $htmlBuilder = new HtmlBuilder();

    use Naucon\HtmlBuilder\HtmlElement;
    $htmlElement = new HtmlElement('h2', 'My Headline');
    echo $htmlBuilder->render($htmlElement);

    // Output:
    // <h2>My Headline</h2>


    use Naucon\HtmlBuilder\HtmlHeadline;
	$headline = new HtmlHeadline('My Headline', 2);
	echo $htmlBuilder->render($headline);

    // Output:
    // <h2>My Headline</h2>



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