<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= 'alert alert-danger' . $params['class'];
}
?>
<div class="<?= h($class) ?>"><?= h($message) ?></div>
