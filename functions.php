<?php
// Generates a welcome message based on the current hour
function getWelcomeMessage() {
    $hour = date('H');
    if ($hour < 12) {
        return "Bonne matinée et bienvenue chez Netlabs!";
    } elseif ($hour < 18) {
        return "Bonne après-midi et bienvenue chez Netlabs!";
    } else {
        return "Bonne soirée et bienvenue chez Netlabs!";
    }
}