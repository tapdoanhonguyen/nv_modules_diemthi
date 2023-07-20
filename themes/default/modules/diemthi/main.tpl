<!-- BEGIN: main -->
<meta name="description" content="Tra cứu điểm thi trung học phổ thông dễ dàng và nhanh chóng. Tìm hiểu cách xem điểm, lịch công bố kết quả và các thông tin quan trọng khác.">
<meta property="og:description" content="Tra cứu điểm thi trung học phổ thông dễ dàng và nhanh chóng. Tìm hiểu cách xem điểm, lịch công bố kết quả và các thông tin quan trọng khác.">
<div class="bg-secondary widget-search py-4 rounded-3">
	<h4 class="text-primary-cz py-2 text-center">Tra cứu</h4>
	<h1 class="text-center">ĐIỂM THI TỐT NGHIỆP THPT {YEAR}</h1>
	<div class="col-lg-24 col-sm-24 m-auto my-5" style=" position: relative; ">
        <p class="text" style="color:red;padding-top: 20px">* Số báo danh như trong giấy báo dự thi của thí sinh.</p>
        <form action="{FORM_SUBMIT}" method="post" class="form-search">
            <input type="text" placeholder="Nhập số báo danh..."  name="sbd" value="{SBD}" class="input-search">
            <input type="hidden" name="tra_cuu" value="1">
            <input type="hidden" name="year" value="{YEAR}">
            <button class="btn-submit" id="submit-search"><i class="fa fa-magnifying-glass"></i> Tìm kiếm</button>
        </form>

        <div class="resultSearch" id="resultSearch"></div>
    </div>
</div>

<!-- BEGIN: result -->
<div class="resultSearch">
    <div class="resultSearch__left">
        <div class="resultSearch__left-sbd">
            <p>Số báo danh</p>
            <p class="font-bold">{DATA.Code}</p>
        </div>
        <div class="resultSearch__left-info">
            <p class="edu-institution">Sở GD&amp;ĐT {TINHTHANH}</p>
        </div>
    </div>
    <div class="resultSearch__right">
        <table>
            <thead>
                <tr>
                    <th>Môn</th>
                    <th>Điểm</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Toán</td>
                    <td>{DATA.Toan}</td>
                </tr>
                <tr>
                    <td>Văn</td>
                    <td>{DATA.NguVan}</td>
                </tr>
                <!-- BEGIN: ngoaingu -->
                <tr>
                    <td>Ngoại ngữ</td>
                    <td>{DATA.NgoaiNgu}</td>
                </tr>
                <!-- END: ngoaingu -->
                 <!-- BEGIN: vatli -->
                <tr>
                    <td>Lý</td>
                    <td>{DATA.VatLi}</td>
                </tr>
                <!-- END: vatli -->
                 <!-- BEGIN: hoahoc -->
                <tr>
                    <td>Hóa</td>
                    <td>{DATA.HoaHoc}</td>
                </tr>
                <!-- END: hoahoc -->
                <!-- BEGIN: sinhhoc -->
                <tr>
                    <td>Sinh</td>
                    <td>{DATA.SinhHoc}</td>
                </tr>
                <!-- END: sinhhoc -->
                <!-- BEGIN: khtn -->
                <tr>
                    <td>Điểm KHTN</td>
                    <td>{DATA.KHTN}</td>
                </tr>
                <!-- END: khtn -->
                <!-- BEGIN: lichsu -->
                <tr>
                    <td>Sử</td>
                    <td>{DATA.LichSu}</td>
                </tr>
                 <!-- END: lichsu -->
                 <!-- BEGIN: diali -->
                <tr>
                    <td>Địa</td>
                    <td>{DATA.DiaLi}</td>
                </tr>
                <!-- END: diali -->
                <!-- BEGIN: gdcd -->
                <tr>
                    <td>GDCD</td>
                    <td>{DATA.GDCD}</td>
                </tr>
                <!-- END: gdcd -->
                <!-- BEGIN: khxh -->
                <tr>
                    <td>Điểm KHXH</td>
                    <td>{DATA.KHXH}</td>
                </tr>
                <!-- END: khxh -->
            </tbody>
        </table>
    </div>
</div>
<!-- END: result -->
<div class="row">
	<div class="col-md-24">
		<div >
			<div class="col-md-24 col-xs-24 m-auto">
				<div class="nav  py-2 px-3 d-flex justify-content-evenly rounded">
					<div class="nav-item form-check bg-warning" >
						<input class="form-check-input" type="radio" name="optradio" value="PhoDiem" checked=""
							id="PhoDiemRadio">
						<label class="form-check-label">
							Phổ điểm
						</label>
					</div>
				</div>
				<!--<div class="mt-4 border-bottom border-warning">months-select</div>-->
			</div>
			<div class="col-md-24 col-xs-24 m-auto my-4">
				<div class="d-md-flex justify-content-between phodiem">
					<div class="months-select  me-2 ">
						<label for="inputGroupSelect01">Cụm thi</label>
						<select name="city" id="list-city">
							<option value="00">Toàn quốc</option>
							<option value="01">01 Sở GDĐT Hà Nội</option>
							<option value="02">02 Sở GDĐT TP. Hồ Chí Minh</option>
							<option value="03">03 Sở GDĐT Hải Phòng</option>
							<option value="04">04 Sở GDĐT Đà Nẵng</option>
							<option value="05">05 Sở GDĐT Hà Giang</option>
							<option value="06">06 Sở GDĐT Cao Bằng</option>
							<option value="07">07 Sở GDĐT Lai Châu</option>
							<option value="08">08 Sở GDĐT Lào Cai</option>
							<option value="09">09 Sở GDĐT Tuyên Quang</option>
							<option value="10">10 Sở GDĐT Lạng Sơn</option>
							<option value="11">11 Sở GDĐT Bắc Kạn</option>
							<option value="12">12 Sở GDĐT Thái Nguyên</option>
							<option value="13">13 Sở GDĐT Yên Bái</option>
							<option value="14">14 Sở GDĐT Sơn La</option>
							<option value="15">15 Sở GDĐT Phú Thọ </option>
							<option value="16">16 Sở GDĐT Vĩnh Phúc</option>
							<option value="17">17 Sở GDĐT Quảng Ninh</option>
							<option value="18">18 Sở GDĐT Bắc Giang</option>
							<option value="19">19 Sở GDĐT Bắc Ninh</option>
							<option value="21">21 Sở GDĐT Hải Dương</option>
							<option value="22">22 Sở GDĐT Hưng Yên</option>
							<option value="23">23 Sở GDĐT Hoà Bình</option>
							<option value="24">24 Sở GDĐT Hà Nam</option>
							<option value="25">25 Sở GDĐT Nam Định</option>
							<option value="26">26 Sở GDĐT Thái Bình</option>
							<option value="27">27 Sở GDĐT Ninh Bình</option>
							<option value="28">28 Sở GDĐT Thanh Hoá</option>
							<option value="29">29 Sở GDĐT Nghệ An</option>
							<option value="30">30 Sở GDĐT Hà Tĩnh</option>
							<option value="31">31 Sở GDĐT Quảng Bình</option>
							<option value="32">32 Sở GDĐT Quảng Trị</option>
							<option value="33">33 Sở GDĐT Thừa Thiên -Huế</option>
							<option value="34">34 Sở GDĐT Quảng Nam</option>
							<option value="35">35 Sở GDĐT Quảng Ngãi</option>
							<option value="36">36 Sở GDĐT Kon Tum</option>
							<option value="37">37 Sở GDĐT Bình Định</option>
							<option value="38">38 Sở GDĐT Gia Lai</option>
							<option value="39">39 Sở GDĐT Phú Yên</option>
							<option value="40">40 Sở GDĐT Đắk Lắk</option>
							<option value="41">41 Sở GDĐT Khánh Hoà</option>
							<option value="42">42 Sở GDĐT Lâm Đồng</option>
							<option value="43">43 Sở GDĐT Bình Phước</option>
							<option value="44">44 Sở GDĐT Bình Dương</option>
							<option value="45">45 Sở GDĐT Ninh Thuận</option>
							<option value="46">46 Sở GDĐT Tây Ninh</option>
							<option value="47">47 Sở GDĐT Bình Thuận</option>
							<option value="48">48 Sở GDĐT Đồng Nai</option>
							<option value="49">49 Sở GDĐT Long An</option>
							<option value="50">50 Sở GDĐT Đồng Tháp</option>
							<option value="51">51 Sở GDĐT An Giang</option>
							<option value="52">52 Sở GDĐT Bà Rịa-Vũng Tàu</option>
							<option value="53">53 Sở GDĐT Tiền Giang</option>
							<option value="54">54 Sở GDĐT Kiên Giang</option>
							<option value="55">55 Sở GDĐT Cần Thơ</option>
							<option value="56">56 Sở GDĐT Bến Tre</option>
							<option value="57">57 Sở GDĐT Vĩnh Long</option>
							<option value="58">58 Sở GDĐT Trà Vinh</option>
							<option value="59">59 Sở GDĐT Sóc Trăng</option>
							<option value="60">60 Sở GD KHCN Bạc Liêu</option>
							<option value="61">61 Sở GDĐT Cà Mau</option>
							<option value="62">62 Sở GDĐT Điện Biên</option>
							<option value="63">63 Sở GDĐT Đăk Nông</option>
							<option value="64">64 Sở GDĐT Hậu Giang</option>
							<option value="65">65 Cục Nhà trường - Bộ Quốc phòng</option>
						</select>
					</div>
					<div class="months-select">
						<label for="inputGroupSelect02">Môn</label>
						<select id="list-subject" name="score">
							<option value="Toan"> Toán</option>
							<option value="VatLi"> Vật lí</option>
							<option value="HoaHoc"> Hóa</option>
							<option value="SinhHoc"> Sinh học</option>
							<option value="KHTN"> KHTN</option>
							<option value="NguVan"> Ngữ văn</option>
							<option value="LichSu"> Lịch sử</option>
							<option value="DiaLi"> Địa lí</option>
							<option value="GDCD"> GDCD</option>
							<option value="KHXH"> KHXH</option>
							<option value="NgoaiNgu"> Ngoại Ngữ</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- BEGIN: comment -->
<div class="page panel panel-default">
    <div class="panel-body">
    {CONTENT_COMMENT}
    </div>
</div>
<!-- END: comment -->
<div id="chart-diem">
    <canvas id="phodiem-chart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
$(document).ready(function() {
	var city = $('#list-city').val();
	var subject = $('#list-subject').val();
	
	var ctx = document.getElementById('phodiem-chart').getContext("2d");
	var myChart =	new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [<!-- BEGIN: loop -->{TOAN},<!-- END: loop -->],
			datasets: [{
			label: 'Phổ điểm toàn quốc năm {YEAR}',
			data: [<!-- BEGIN: count -->{DULIEU},<!-- END: count -->],
			borderWidth: 1
			}]
		},
		options: {
			scales: {
			y: {
				beginAtZero: true
			}
			}
		}
	});

	$('#list-city').change(function(){
		city = $(this).val();
		$.ajax({
			type: "POST",
			url: nv_base_siteurl + "index.php?" + nv_lang_variable + "=" + nv_lang_data + "&" + nv_name_variable + "=diemthi&" + nv_fc_variable + "=main&city=" + city + "&subject=" + subject + "&ajax=1",
			success: function(data) { 
				console.log()
				const parsedData = JSON.parse(data);
				const scriptElement = document.createElement('script');
				var res = parsedData.result;
				var contmon = [];
				var monhoc = [];
				//console.log(res[0])
				res.forEach( (value,index) => {
					const dataArray = JSON.parse(value.Result);
					// Tạo một mảng mới chỉ chứa giá trị "Hoahoc"
					const dulieu = dataArray.map((item, key) => {
						monhoc.push(item[Object.keys(item)[0]]);
						contmon.push(item.Count)
						//monhoc.push(item.Count)
					});
				});
				console.log(monhoc);
				console.log(contmon);
				myChart.data.labels.pop();
				myChart.data.labels = monhoc;
				myChart.data.datasets[0].data = contmon;
				// re-render the chart
				myChart.update();
		
			}
		});
	});
	
	$('#list-subject').change(function(){
		subject = $(this).val();
		$.ajax({
			type: "POST",
			url: nv_base_siteurl + "index.php?" + nv_lang_variable + "=" + nv_lang_data + "&" + nv_name_variable + "=diemthi&" + nv_fc_variable + "=main&city=" + city + "&subject=" + subject + "&ajax=1",
			success: function(data) { 
				console.log()
				const parsedData = JSON.parse(data);
				const scriptElement = document.createElement('script');
				var res = parsedData.result;
				var contmon = [];
				var monhoc = [];
				//console.log(res[0])
				res.forEach( (value,index) => {
					const dataArray = JSON.parse(value.Result);
					// Tạo một mảng mới chỉ chứa giá trị "Hoahoc"
					const dulieu = dataArray.map((item, key) => {
						monhoc.push(item[Object.keys(item)[0]]);
						contmon.push(item.Count)
						//monhoc.push(item.Count)
					});
				});
				console.log(monhoc);
				console.log(contmon);
				myChart.data.labels.pop();
				myChart.data.labels = monhoc;
				myChart.data.datasets[0].data = contmon;
				// re-render the chart
				myChart.update();
		
			}
		});
	});
})
</script>
<!-- END: main -->