<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error hn_error white-text center-align" onclick="this.classList.add('hidden');"><?= $message ?></div>