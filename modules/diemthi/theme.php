<?php

/**
 * @Project NUKEVIET 4.x
 * @Author DACLOI.,JSC <saka.dacloi@gmail.com>
 * @Copyright (C) 2023 DACLOI.,JSC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Fri, 23 Jun 2023 14:05:16 GMT
 */

if (!defined('NV_IS_MOD_DIEMTHI'))
    die('Stop!!!');

/**
 * nv_theme_diemthi_main()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_diemthi_main($array_data, $phodiem, $error, $submit_link,$ajax_diem,$year,$tinhthanh )
{
    global $module_info, $lang_module, $lang_global, $op, $page_config, $global_config;

    $xtpl = new XTemplate($op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);
	$xtpl->assign('FORM_SUBMIT', $submit_link);
	

	
    //------------------
    // Viết code vào đây
    //------------------
	
	if(!empty($array_data)) {
	    
		$xtpl->assign('DATA', $array_data);
		
		if($array_data['Toan']) {
		    $xtpl->parse('main.result.toan');
		}
		if($array_data['NguVan']) {
		    $xtpl->parse('main.result.nguvan');
		}
		if($array_data['NgoaiNgu']) {
		    $xtpl->parse('main.result.ngoaingu');
		}
		if($array_data['VatLi']) {
		    $xtpl->parse('main.result.vatli');
		}
		if($array_data['HoaHoc']) {
		    $xtpl->parse('main.result.hoahoc');
		}
		if($array_data['SinhHoc']) {
		    $xtpl->parse('main.result.sinhhoc');
		}
		if($array_data['LichSu']) {
		    $xtpl->parse('main.result.lichsu');
		}
		if($array_data['DiaLi']) {
		    $xtpl->parse('main.result.diali');
		}
		if($array_data['GDCD']) {
		    $xtpl->parse('main.result.gdcd');
		}
		if($array_data['KHTN']) {
		    $xtpl->parse('main.result.khtn');
		}
		if($array_data['KHXH']) {
		    $xtpl->parse('main.result.khxh');
		}
		
	    $xtpl->assign('TINHTHANH', $tinhthanh);
		$xtpl->parse('main.result');
		$xtpl->assign('SBD', $array_data['Code']);
		$xtpl->assign('YEAR', $year);
		
	}

	if($ajax_diem > 0) {
		echo $phodiem;die;
	}else {
		foreach($phodiem as $val ) {
			$data = json_decode($val, true);
			foreach($data as $res) {
				$xtpl->assign('TOAN', $res['Toan']);
				$xtpl->assign('DULIEU', $res['Count']);
				$xtpl->parse('main.loop');
				$xtpl->parse('main.count');
			}	
		}
	}
	

	if($error) {
		$xtpl->assign('ERROR', $error);
		$xtpl->parse('main.error');
	}
	
	if (!empty($content_comment)) {
        $xtpl->assign('CONTENT_COMMENT', $content_comment);
        $xtpl->parse('main.comment');
    }
	
    $xtpl->parse('main');
    return $xtpl->text('main');
}
