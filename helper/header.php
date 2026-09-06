<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    session_regenerate_id(true);
    setcookie(session_name(), session_id(), time() + 3600, '/');
    const COOKIE_LIFETIME = 3600; // 1 hour
    define('COOKIE_LIFETIME', 3600); // 1 hour
    gettimeofday($now);
    setcookie(session_name(), session_id(), $now['sec'] + COOKIE_LIFETIME, '/');
}
