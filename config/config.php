<?php

Config::set('site_name','ReEstate');

Config::set('languages', array('en', 'fr'));

// Routes, Route name => method prefix
Config::set('routes', array(

	'default' => '',
	'admin' => 'admin_',

	)
);

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

// Database settings
Config::set('db.host','localhost');
Config::set('db.user','root');
Config::set('db.password','');
Config::set('db.db_name','mvc');

Config::set('salt','jd7sj3sdkd96he7e');

?>