<?php

require_once('./router.php');

get('/', 'public/index.php');

get('/login', 'view/login.php');

get('/logout/$id', 'view/logout.php');

get('/register', 'view/register.php');

get('/admin', 'view/admin/dashboard.php');

get('/admin/user', 'view/admin/user/userList.php');

get('/admin/user/create', 'view/admin/user/userCreate.php');

get('/admin/user/$id', 'view/admin/user/user.php');

any('/404','view/404.php');

?>
