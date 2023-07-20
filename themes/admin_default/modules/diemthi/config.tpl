<!-- BEGIN: main -->
<form action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<colgroup>
					<col style="width: 260px" />
					<col/>
				</colgroup>
				<tfoot>
					<tr>
						<td colspan="2"><input type="hidden" name="save" value="1">
                        <input type="submit" value="{LANG.config_save}" class="btn btn-primary" /></td>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<td>Tra cứu điểm thi theo năm</td>
						<td><input class="form-control w200" name="year_diemthi" value="{DATA.year_diemthi}" /></td>
					</tr>
				</tbody>
			</table>
		</div>
    
</form>
<!-- END: main -->