<?php 
//connect with sql
define('hostname','112.78.2.36');
define('username','vie65_dbwebsite');
define('password','qwerty123#!');
define('dbname','vie65506_dbwebsitenews');

// config
require_once 'core/app.php';
require_once 'core/model_and_view_user.php';
require_once 'core/model_and_view_admin.php';
require_once 'core/model_and_view_login.php';
require_once 'core/model_and_view_post.php';
require_once 'core/model_and_view_newscate.php';
require_once 'core/model_and_view_categories.php';
require_once 'core/model_and_view_chitiet.php';
require_once 'core/Abtract.php';

//model
require_once 'models/users.php';
require_once 'models/posts.php';
require_once 'models/contacts.php';
require_once 'models/configs.php';
require_once 'models/comments.php';
require_once 'models/categories.php';

//controller
require_once 'controllers/categories_controller.php';
require_once 'controllers/contacts_controller.php';
require_once 'controllers/categories_controller.php';
require_once 'controllers/comment_admin.php';
require_once 'controllers/comment_user.php';
require_once 'controllers/post_controller.php';

//service
require_once 'service/comment_service.php';
require_once 'service/post_service.php';
// DAO
require_once 'repository/post_repository.php';
require_once 'repository/categories_repository.php';
require_once 'repository/configs_repository.php';
require_once 'repository/comments_repository.php';
require_once 'repository/user_repository.php';
require_once 'repository/contacts_repository.php';

