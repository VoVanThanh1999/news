<?php 
require_once 'core/app.php';
require_once 'core/model_and_view_user.php';
require_once 'core/model_and_view_admin.php';
require_once 'models/user.php';
define('hostname','112.78.2.94');
define('username','vie65_dbwebsite');
define('password','qwerty123#!');
define('dbname','vie65506_dbwebsitenews');
$mysql = mysqli_connect(hostname,username,password,dbname);
require_once 'models/users.php';
require_once 'core/model_and_view_newscate.php';
require_once 'models/posts.php';
require_once 'models/contacts.php';
require_once 'models/configs.php';
require_once 'models/comments.php';
require_once 'models/categories.php';
require_once 'repository/categories_repository.php';
require_once 'controllers/categoires_controller.php';
