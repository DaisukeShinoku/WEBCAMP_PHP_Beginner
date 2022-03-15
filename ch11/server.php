<?php
//
function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}

//
echo "ブラウザ(User Agent)は " , h($_SERVER['HTTP_USER_AGENT'])  , "です。<br>\n";
echo "接続元IPは " , h($_SERVER['REMOTE_ADDR']) , "です。<br>\n";
echo "本当の接続元IPは " , h($_SERVER['HTTP_X_FORWARDED_FOR']) , "です。<br>\n";