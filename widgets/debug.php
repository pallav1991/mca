<div id="console-debug">

    <?php $all_var=get_defined_vars(); ?>


<h1>Path Array</h1>            
    <pre>
<?php print_r($path); ?>
    </pre>

<h1>ALL GET</h1>            
    <pre>
<?php print_r($_GET); ?>
    </pre>
<h1>ALL POST</h1>            
    <pre>
<?php print_r($_POST); ?>
    </pre>
<h1>ALL Pages</h1>
    <pre>
<?php print_r($page); ?>
    </pre>
    
    <h1>view Pages</h1>
    <pre>
<?php print_r($view); ?>
    </pre>
</div>
