<?php

function render_topbar($color) {
  echo <<<EOF

<div style='color: $color'>
  <h1> Top Bar </h1>
</div>

EOF;
}