<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    session_regenerate_id(true);
    setcookie(session_name(), session_id(), time() + 3600, '/');
}
