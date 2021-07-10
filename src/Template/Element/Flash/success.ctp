<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message success hn_succes white-text center-align" onclick="this.classList.add('hidden')"><?= $message ?></div>
