<?php

if ($template_area == 'top') {

    $this->js[] = '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js';
	$this->js[] = "http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js";
    
    /* Typekit
    $this->head[] = '
        <script type="text/javascript" src="//use.typekit.net/oeo7vgy.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    ';
	*/
    // needed by VF\Gallery > contextMenu
    $this->js[] = "http://code.jquery.com/jquery-migrate-1.0.0.js";

    $this->template('html5', 'top');
 
?>
<header>
  	<nav class="fixable">
        
        <div class="has-floats">
            <div class="logo"></div>
            <div class="float-left">
                <span class="thin">Zachary</span>
                <span class="bold">Rosenberg</span>
            </div>
            <ul class="float-right">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#clients">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>    
        </div>
    </nav>
    <div id="nav-placeholder" style="display:none;"></div>
</header>

<div id="main">

<?

} else if ($template_area == 'bottom') {
 
?>

</div>

<footer>
        
        <div>
            © 2013 Zachary Rosenberg. All rights reserved.
        </div>

        <div>
            Made in the USA! Philadelphia, PA
        </div>

        <div>
            <br>
            View the code for this website on <a href="https://github.com/zgr024/portfolio" target="_blank">github</a>.
        </div>

    </footer>
<?

    $this->template('html5', 'bottom');

}