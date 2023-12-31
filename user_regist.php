<?php
    session_start();
    require_once('./model.php');

    loginCheck();

    if(!isSystemAdministrator() && !isUserAdministrator()) {
        exit('PERMISSION ERROR');
    }
    
    $flash = getFlashMessage();
    $original = getOriginalMessage();

    $pdo = db_conn();
    $roleSelectView = get_role_list_at_user_regist($pdo);
    $tenantSelectView = get_tenant_list_at_user_regist($pdo);

    $userName = $_SESSION['userName'];
    $roleName = $_SESSION['roleName'];
    $navView = getNavigationMenu('UserManagement', 'UserRegist');

    require_once('./templates/user_regist.php');
