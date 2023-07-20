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

$page_title = $module_info['site_title'];
$key_words = $module_info['keywords'];

$array_data = array();
$phodiem = array();
$error = '';

$tra_cuu = $nv_Request->get_int('tra_cuu', 'post', 0); 

$submit_link = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name;
$sbd = $nv_Request->get_title('sbd', 'post', ''); 
//$year = $nv_Request->get_title('year', 'post', ''); 
$ajax_diem = $nv_Request->get_title('ajax', 'get,post', 0); 
$year = $page_config["year_diemthi"];
$tinhthanh = '';
if($tra_cuu > 0) {
    
   // var_dump(date($year) === date('Y'));die;
    if(date($year) === date('Y')) {
        $content = file_get_contents("https://diemthi.vnanet.vn/Home/SearchBySobaodanh?code=".$sbd."&nam=".date($year));
	    $data = json_decode($content, true);
    
    }else {
        $content = file_get_contents("https://diemthi.vnanet.vn/Home/SearchBySobaodanhFile?code=".$sbd."&nam=".date($year));
        $data = json_decode($content, true);
    }
    //https://diemthi.vnanet.vn/Home/SearchBySobaodanh?code=01002356&nam=2023

	//32002095
	
    $ma_thi_sinh = substr($sbd,0,2);
    $ma_tinh_thanh = [
        '01' => 'Thành Phố Hà Nội',
        '02' => 'Thành Phố Hồ Chí Minh',
        '03' => 'Tỉnh Hải Phòng',
        '04' => 'Thành Phố Đà Nẵng',
        '05' => 'Tỉnh Hà Giang',
        '06' => 'Tỉnh Cao Bằng',
        '07' => 'Tỉnh Lai Châu',
        '08' => 'Tỉnh Lào Cai',
        '09' => 'Tỉnh Tuyên Quang',
        '10' => 'Tỉnh Lạng Sơn',
        '11' => 'Tỉnh Bắc Kạn',
        '12' => 'Tỉnh Thái Nguyên',
        '13' => 'Tỉnh Yên Bái',
        '14' => 'Tỉnh Sơn La',
        '15' => 'Tỉnh Phú Thọ',
        '16' => 'Tỉnh Vĩnh Phúc',
        '17' => 'Tỉnh Quảng Ninh',
        '18' => 'Tỉnh Bắc Giang',
        '19' => 'Tỉnh Bắc Ninh',
        '21' => 'Tỉnh Hải Dương',
        '22' => 'Tỉnh Hưng Yên',
        '23' => 'Tỉnh Hòa Bình',
        '24' => 'Tỉnh Hà Nam',
        '25' => 'Tỉnh Nam Định',
        '26' => 'Tỉnh Thái Bình',
        '27' => 'Tỉnh Ninh Bình',
        '28' => 'Tỉnh Thanh Hóa',
        '29' => 'Tỉnh Nghệ An',
        '30' => 'Tỉnh Hà Tĩnh',
        '31' => 'Tỉnh Quảng Bình',
        '32' => 'Tỉnh Quảng Trị',
        '33' => 'Tỉnh Thừa Thiên-Huế',
        '34' => 'Tỉnh Quảng Nam',
        '35' => 'Tỉnh Quảng Ngãi',
        '36' => 'Tỉnh Kom Tum',
        '37' => 'Tỉnh Bình Định',
        '38' => 'Tỉnh Gia Lai',
        '39' => 'Tỉnh Phú Yên',
        '40' => 'Tỉnh Đắk Lắk',
        '41' => 'Tỉnh Khánh Hòa',
        '42' => 'Tỉnh Lâm Đồng',
        '43' => 'Tỉnh Bình Phước',
        '44' => 'Tỉnh Bình Dương',
        '45' => 'Tỉnh Ninh Thuận',
        '46' => 'Tỉnh Tây Ninh',
        '47' => 'Tỉnh Bình Thuận',
        '48' => 'Tỉnh Đồng Nai',
        '49' => 'Tỉnh Long An',
        '50' => 'Tỉnh Đồng Tháp',
        '51' => 'Tỉnh An Giang',
        '52' => 'Tỉnh Bà Rịa-Vũng Tàu',
        '53' => 'Tỉnh Tiền Giang',
        '54' => 'Tỉnh Kiên Giang',
        '55' => 'Tỉnh Cần Thơ',
        '56' => 'Tỉnh Bến Tre',
        '57' => 'Tỉnh Vĩnh Long',
        '58' => 'Tỉnh Trà Vinh',
        '59' => 'Tỉnh Sóc Trăng',
        '60' => 'Tỉnh Bạc Liêu',
        '61' => 'Tỉnh Cà Mau',
        '62' => 'Tỉnh Điện Biên',
        '63' => 'Tỉnh Đăk Nông',
        '64' => 'Tỉnh Hậu Giang',
    ];
    
    
    foreach($ma_tinh_thanh as $key => $value) {
       if( $key == 	$ma_thi_sinh) {
           
           $tinhthanh = $ma_tinh_thanh[$ma_thi_sinh];
       }
    }
	
	if(empty($data['result'])){
		$error = 'SBD chưa đúng, em vui lòng kiểm tra lại';

	}else{
		$array_data = $data['result'][0];
		
	}

}	


if($ajax_diem > 0) {
	$city = $nv_Request->get_title('city', 'get,post', ''); 
	$subject = $nv_Request->get_title('subject', 'get,post', ''); 
	$phodiem = file_get_contents("https://diemthi.vnanet.vn/Home/ShowChartPhoDiem_THPT?id=".$sbd."&city=".$city."&score=".$subject."&nam=".date($year));

}else if($sbd) {
	$phodiem = file_get_contents("https://diemthi.vnanet.vn/Home/ShowChartPhoDiem_THPT?id=".$sbd."&city=00&score=Toan&nam=".date($year));
	$data_phodiem = json_decode($phodiem, true);
	$phodiem = $data_phodiem['result'][0];
}else {
	$phodiem = file_get_contents("https://diemthi.vnanet.vn/Home/ShowChartPhoDiem_THPT?id=&city=00&score=Toan&nam=".date($year));
	$data_phodiem = json_decode($phodiem, true);
	$phodiem = $data_phodiem['result'][0];
}

 // Bình luận
 if (isset($site_mods['comment']) and isset($module_config[$module_name]['activecomm'])) {
    define('NV_COMM_ID', 1); //ID bài viết
    define('NV_COMM_AREA', $module_info['funcs'][$op]['func_id']);
    //check allow comemnt
    $allowed = $module_config[$module_name]['allowed_comm']; //tuy vào module để lấy cấu hình. Nếu là module news thì có cấu hình theo bài viết
    if ($allowed == '-1') {
        $allowed = 1;
    }
    require_once NV_ROOTDIR . '/modules/comment/comment.php';
    $area = (defined('NV_COMM_AREA')) ? NV_COMM_AREA : 0;
    $checkss = md5($module_name . '-' . $area . '-' . NV_COMM_ID . '-' . $allowed . '-' . NV_CACHE_PREFIX);

    $content_comment = nv_comment_module($module_name, $checkss, $area, NV_COMM_ID, $allowed, 1);
} else {
    $content_comment = '';
}

//------------------
// Viết code vào đây
//------------------
$contents = nv_theme_diemthi_main($array_data,$phodiem, $error, $submit_link,$ajax_diem,$year,$tinhthanh, $content_comment );

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
