<?php
require_once('topbar.php');
?>

<html>
<body>
</body>
    <?php render_topbar($_GET['color']); ?>
    <h1> Home Page </h1>
    <p>
        The top bar is set to <?php echo $color; ?>.
    </p>
</html>