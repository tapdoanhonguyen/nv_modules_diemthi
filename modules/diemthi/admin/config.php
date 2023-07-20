<?php

/**
 * @Project NUKEVIET 4.x
 * @Author DACLOI.,JSC <saka.dacloi@gmail.com>
 * @Copyright (C) 2023 DACLOI.,JSC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Fri, 23 Jun 2023 14:05:16 GMT
 */

if (!defined('NV_IS_FILE_ADMIN'))
    die('Stop!!!');

$page_title = $lang_module['config'];
$array_config = [];

if ($nv_Request->isset_request('save', 'post')) {

    $array_config['year_diemthi'] = $nv_Request->get_string('year_diemthi', 'post', '');

    $sth = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_config SET config_value = :config_value WHERE config_name = :config_name');
    foreach ($array_config as $config_name => $config_value) {
        $sth->bindParam(':config_name', $config_name, PDO::PARAM_STR);
        $sth->bindParam(':config_value', $config_value, PDO::PARAM_STR);
        $sth->execute();
    }

    $nv_Cache->delMod($module_name);
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);

}
//------------------------------
// Viết code xử lý chung vào đây
//------------------------------
$array_config['year_diemthi'] = "";

$sql = 'SELECT config_name, config_value FROM ' . NV_PREFIXLANG . '_' . $module_data . '_config';
$result = $db->query($sql);
while (list($c_config_name, $c_config_value) = $result->fetch(3)) {
    $array_config[$c_config_name] = $c_config_value;
}


$xtpl = new XTemplate('config.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
$xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
$xtpl->assign('NV_BASE_ADMINURL', NV_BASE_ADMINURL);
$xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
$xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('OP', $op);
$xtpl->assign('DATA', $array_config);
//-------------------------------
// Viết code xuất ra site vào đây
//-------------------------------

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
