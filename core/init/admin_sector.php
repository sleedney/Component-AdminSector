<?php

    require_once BASEPATH . 'core/init/db.php';

    // Проверяем вход в админку и авторизацию
    $isAdminSector = (stripos(strtolower(GetQuery()), 'admin/') === 0 || GetQuery() === 'admin');
    if ($isAdminSector)
    {
        // Меняем папку куда будут складироваться css/js админки
        $g_config['extrapacker']['dir'] = 'extrapacker_admin';
        $g_config['mainTpl']            = 'admin/main_tpl';

        $g_adminAuth = new AdminModel();
        $g_adminAuth->ChkLogin();
        define('IS_ADMIN_AUTH', $g_adminAuth->IsAuth());
    }
    else
    {
        define('IS_ADMIN_AUTH', false);
    }
?>