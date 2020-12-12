<?php
// Spam su @StrangerBot

if (strpos($msg, ">spam") === 0 && in_array($userID, $admin) == true) {
    $mex = ""; //Inserisci il messaggio che vuoi spammare
    while (true) {
        sm(@StrangerBot, "/start");
        sleep(2);
        sm(@StrangerBot, $mex);
        sleep(2);
        sm(@StrangerBot, "/end");
        sleep(2);
    }
}
