<?php

require_once('config/config_ambiente_localhost.php');
require_once('router.php');

get('/', 'public/index.php');

get('/login', '/view/login.php');

get('/forgot-password', 'view/forgot-password.php');

post('/login/cadastro', 'controller/api.php');

get('/admin/logout/$id', 'view/logout.php');

get('/register', 'view/register.php');

get('/admin', 'view/dashboard.php');

get('/admin/user', 'view/user/userList.php');

get('/admin/user/create', 'view/user/userCreate.php');

get('/admin/user/$id', 'view/user/user.php');

any('/404','view/404.php');

