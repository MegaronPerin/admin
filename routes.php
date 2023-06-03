<?php

require_once('./config/config_ambiente_localhost.php');

require_once('./router.php');

get('/admin', 'public/index.php');

get('/admin/login', 'view/login.php');

get('/admin/forgot-password', 'view/forgot-password.php');

post('/admin/login/cadastro', 'controller/api.php');

post('/admin/login/all', 'controller/api.php');

post('/admin/login/$id', 'controller/api.php');

get('/admin/logout/$id', 'view/logout.php');

get('/admin/register', 'view/register.php');

get('/admin/inicio', 'view/admin/dashboard.php');

get('/admin/user', 'view/admin/user/userList.php');

get('/admin/user/create', 'view/admin/user/userCreate.php');

get('/admin/user/$id', 'view/admin/user/user.php');

any('/admin/404','view/404.php');

?>
