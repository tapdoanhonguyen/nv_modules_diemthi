<?php

/**
 * @Project NUKEVIET 4.x
 * @Author DACLOI.,JSC <saka.dacloi@gmail.com>
 * @Copyright (C) 2023 DACLOI.,JSC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Fri, 23 Jun 2023 14:05:16 GMT
 */

if (!defined('NV_SYSTEM'))
    die('Stop!!!');

define('NV_IS_MOD_DIEMTHI', true);


// Get Config Module
$sql = 'SELECT config_name, config_value FROM ' . NV_PREFIXLANG . '_' . $module_data . '_config';
$list = $nv_Cache->db($sql, '', $module_name);
$page_config = [];
foreach ($list as $values) {
    $page_config[$values['config_name']] = $values['config_value'];
}
