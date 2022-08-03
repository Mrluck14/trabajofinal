<?php
// DATABASE connection script
date_default_timezone_set("America/Argentina/Buenos_Aires");
// database Connection variables
//Centos
define('HOST', '192.168.1.10'); // Database host name ex. localhost
define('USER', 'diego'); // Database user. ex. root ( if your on local server)
define('PASSWORD', '1234'); // Database user password  (if password is not set for user then keep it empty )
define('DATABASE', 'baseprueba'); // Database name
define('CHARSET', 'utf8');


/*
//notebook
define('HOST', 'localhost'); // Database host name ex. localhost
define('USER', 'root'); // Database user. ex. root ( if your on local server)
define('PASSWORD', 'password'); // Database user password  (if password is not set for user then keep it empty )
define('DATABASE', 'seam'); // Database name
define('CHARSET', 'utf8');

*/
/*
define('HOST', '192.168.1.50'); // Database host name ex. localhost
define('USER', 'locos_seam'); // Database user. ex. root ( if your on local server)
define('PASSWORD', 'srl9559Seam'); // Database user password  (if password is not set for user then keep it empty )
define('DATABASE', 'locos_seam'); // Database name
define('CHARSET', 'utf8');



define('HOST', '192.168.1.50'); // Database host name ex. localhost
define('USER', 'root'); // Database user. ex. root ( if your on local server)
define('PASSWORD', '1234'); // Database user password  (if password is not set for user then keep it empty )
define('DATABASE', 'locos_seam'); // Database name
define('CHARSET', 'utf8');
*/


function DB()
{
    static $instance;
    if ($instance === null) {

        $opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => FALSE,
        );
        $dsn = 'mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=' . CHARSET;
        $instance = new PDO($dsn, USER, PASSWORD, $opt);
    }

    return $instance;
}

?>
