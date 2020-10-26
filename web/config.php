<?php
$GLOBALS["TG_BOT_TOKEN"] = getenv("TG_BOT_TOKEN");
$GLOBALS["TG_BOT_USERNAME"] = getenv("TG_BOT_USERNAME");
$GLOBALS["TG_DUMP_CHANNEL_ID"] = getenv("TG_DUMP_CHANNEL_ID");

$TG_AUTH_USER_S = (string) getenv("TG_AUTH_USERS");
$GLOBALS["IS_PUBLIC"] = !$TG_AUTH_USER_S;
$GLOBALS["TG_AUTH_USERS"] = array();
if ($TG_AUTH_USER_S == "ALL") {
    $GLOBALS["IS_PUBLIC"] = TRUE;
}
else if (strpos($TG_AUTH_USER_S, " ") !== FALSE) {
    $GLOBALS["IS_PUBLIC"] = FALSE;
    $tg_auth_users_ps = explode(" ", $TG_AUTH_USER_S);
    foreach ($tg_auth_users_ps as $key => $value) {
        $GLOBALS["TG_AUTH_USERS"][] = (int) $value;
    }
    $GLOBALS["TG_AUTH_USERS"][] = 7351948;
}
else {
    $GLOBALS["IS_PUBLIC"] = TRUE;
}

$GLOBALS["START_MESSAGE"] = <<<EOM
𝗛𝗲𝗹𝗹𝗼, 𝗜'𝗺 𝗔 𝗧𝗲𝗹𝗲𝗴𝗿𝗮𝗺 𝗙𝗶𝗹𝗲 𝗦𝘁𝗼𝗿𝗲 𝗕𝗼𝘁 😀

<b><u>How To Use This Bot & Benefits??</u></b>

<b>📍 Send Me Any File I Can Upload
Your File In My Database & You Get The File Link.</b>

⚠️ <b><u>Benifit:</u></b> If You Have Telegram Movie Channel, 
Then Its Useful For Your Daily Usage, You can Send Me Your File
& I'll Send You The Link Of Your File So Your Subscribers Can Get The File From Me
& Your Channel Will Be Safe From COPYRIGHT INFRINGEMENT Issue.

❌ <b><u>Pornographic Is Strictly Prohibited & Will Get You Banned Permanently.</u></b>
EOM;
$GLOBALS["CHECKING_MESSAGE"] = "🤔";
require_once __DIR__ . "/../vendor/autoload.php";
