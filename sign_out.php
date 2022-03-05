<?php

setcookie('user', $login, time() - (3600 * 24 * 14));
header('Location: /');