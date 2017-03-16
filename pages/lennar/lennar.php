<?php

$this->title = 'Lennar Prequalify Test';

$this->template('html5', 'top');

?>

<iframe src="https://lasvegas.uamc.com/lennar/prequalify?<?=http_build_query($_GET)?>" style="width: 100%; height: 1000px;"></iframe>
