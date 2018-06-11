<?php include "includes/header.php"?>
    <h2>Flexbox</h2>
        <p>Flexbox, also known as flexible box model,  is a CSS layout module which makes it easier to design flexible responsive layouts. It is a good alternative to floats since you are given complete control over size, direction, order and alignment. Floats still work well in legacy situations, but flexbox is less limiting so it’s preferred. Flexbox allows you to layout items in one direction or another then control the dimensions and spacing of those items. Flexbox works well for the following items and situations:</p>
    <ul>
        <li>Navigation</li>
        <li>Split Navigation</li>
        <li>Centering Content</li>
        <li>Form Controls</li>
        <li>Image Galleries</li>
    </ul>
        <p>Flexbox is a one-dimensional layout since it deals with only one item at a time, either a row or a column. When dealing with flexbox there are two axis, the main axis and the cross axis. The main axis is defined by the flex-direction property and the cross axis runs perpendicular to it. Flex-direction has four possible values:</p>
    <ul>
        <li>row</li>
        <li>row-reverse</li>
        <li>rolumn</li>
        <li>column-reverse</li>
    </ul>
        <p>Rows run along the axis in the inline direction and columns run in the block direction. The cross axis runs perpendicular to the main axis so if the main is set to row the cross runs up and down and vice versa. </p>
        <p>The area laid out using flexbox is called the flex container. To create a flex container the display property is set to flex or inline-flex. The flex container has five property values:</p>
    <ul>
        <li>fliex-direction</li>
        <li>flex-wrap</li>
        <li>flex-flow</li>
        <li>justify-content</li>
        <li>align-items</li>
        <li>align-content</li>
    </ul>
    </section>
    <!-- END LEFT COL -->

    <!-- START RIGHT COL -->
    <aside>
     <h3>Citations</h3>
        <p>Brundage, Matt. “Typical Use Cases of Flexbox”. MDN Web Docs, Mozilla, 7 February 2018, <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Typical_Use_Cases_of_Flexbox">Typical Use Cases of Flexbox</a></p>
        <p>Boltimora. “Basic Concepts of Flexbox”. MDN Web Docs, Mozilla, 12 April 2018, <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">Basic Concepts of Flexbox</a></p>
        <p>“CSS Flexbox”. W3Schools,<a href="https://www.w3schools.com/css/css3_flexbox.asp">CSS Flexbox</a></p>
        <p>“Flexbox”. Interneting is Hard,<a href="https://internetingishard.com/html-and-css/flexbox/"> Flexbox</a></p>
        
    </aside>
    <!-- END RIGHT COL -->
    

    <?php include "includes/footer.php"?>