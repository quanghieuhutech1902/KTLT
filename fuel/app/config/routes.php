<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'index'   => 'welcome/index', 
	'_404_'   => 'welcome/404',    // The main 404 route
	'about'   => 'welcome/about',
	'post'    => 'post/add',
	'(:any)-(:id)'       => 'welcome/categogy/$id',
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
