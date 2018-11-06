@extends('layout.common')
@section('title', '色管理画面')
@section('header_title', '色管理画面')

@section('content')
	<div class="content_wrapper">
	<table class="table-bordered">
		<tbody>
			<tr>
				<th colspan="2">色情報</th>
			</tr>
			<tr>
				<th class="left">色コード</th>
				<td></td>
			</tr>
			<tr>
				<th class="left">色名</th>
				<td><input class="form-control" type="text" name="color_name" size="15" maxlength="415" value="" placeholder="色名"></td>
			</tr>
			<tr>
				<th class="left">更新者</th>
				<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
			</tr>
			<tr>
				<th class="left">更新日</th>
				<td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
			</tr>
		</tbody>
	</table>
	<div class="controll_buttons">
	<a href="#" class="square_btn btn">
		<i class="fa fa-caret-right"></i>登録</a>
	<a href="#" class="reseto_btn btn">
		<i class="fa fa-caret-right "></i>リセット</a>
	<a href="#" class="update_btn btn">
		<i class="fa fa-caret-right"></i>更新</a>
	<a href="#" class="delete_btn btn">
		<i class="fa fa-caret-right"></i>削除</a>
	</div>
</div>
@endsection