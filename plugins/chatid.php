<?php
// prendi il chatid

if (0 === strpos($msg, '>chatid') && in_array($userID, $admin)) {
    sm($chatID, $chatID);
}
