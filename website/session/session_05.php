<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.php');

echo session_save_path() . "<br>";

echo session_status() . "<br>";

switch(session_status()) {
    case PHP_SESSION_DISABLED:
        echo "As sessões estão desabilitadas";
        break;
    
    case PHP_SESSION_NONE:
        echo "As sessões estão habilitadas, mas nenhuma existe";
        break;
    
    case PHP_SESSION_ACTIVE:
        echo "As sessões estão habilitadas, e uma existe";
        break;
}

?>