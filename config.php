<?php

    /* Path constant */
	define('SITE_PATH', '/site/');
	define('SITE_URL', SITE_PATH.'index.php/');
	define('APPLICATION', 'application/');
	define('CONTROLLER', APPLICATION.'controller/');
    define('MODEL', APPLICATION.'model/');
    define('TEMPLATE', APPLICATION.'template/');
	define('CORE', APPLICATION.'core/');
	define('LIBRARY', APPLICATION.'library/');
	

	/* Data Base Params */
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('NAME_DB','');
    define('CHARSET','utf-8');


    /* Position element in URL */
    define('URI_CONTROLLER',3);
    define('URI_ACTION',4);


    /* Session Error constant */
    define('SESSION_ERROR_NOT_FOUND','message');

    /* Loader Error constant */
    define('LOADER_ERROR_CLASS_NOT_FOUND','message');
	
?>