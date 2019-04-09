<?php

function isLoggedIn()
{
    $_session = new Josantonius\Session\Session();
    echo $_session->id();
}