<?php

function render_template($template, $template_args) {
    require($template);
}

?>

<html>
<body>
    <?php render_template('topbar.php', ['color' => $_GET['color']]); ?>
    <h1> Home Page </h1>
    <p>
        The top bar is set to <?php echo $color; ?>.
    </p>
</body>
</html>