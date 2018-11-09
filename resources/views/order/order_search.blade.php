@extends('layout.common')
@section('title', '発注検索画面')
@section('header_title', '発注検索画面')

@section('content')
<div class="content_wrapper">
	<table class="table-bordered">
		<tbody>
		<tr>
			<th colspan="2">発注情報</th>
		</tr>
	　<tr>
			<th>商品コード</th>
			<td class="row">
				<div class="col-xs-6"><input class="form-control" type="text" name="" size="20" maxlength="40" value="" placeholder="商品コード"></div>
				<div class="col-xs-3"><button class="btn">Search</button></div>
			</td>
		</tr>
		<tr>
			<th>商品名</th>
			<td>検索結果</td>
		</tr>
		<tr>
		<th class="left">発注日</th>
		<td></td>
		</tr>
		<tr>
			<th class="left">納期</th>
			<td></td>
		</tr>
	　<tr>
			<th class="left">仕入先</th>
			<td><input class="form-control" type="text" name="" size="60" maxlength="60" value="" placeholder="仕入先"></td>
		</tr>
	　<tr>
			<th class="left">支払先</th>
			<td><input class="form-control" type="text" name="" size="60" maxlength="60" value="" placeholder="支払先"></td></td>
		</tr>
	　<tr>
			<th class="left">発注担当者</th>
			<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="発注担当者"></td>
		</tr>
	　<tr>
			<th class="left">発注数</th>
			<td><input class="form-control" type="number" name="" size="10" maxlength="40" value="" ></td>
		</tr>
	　<tr>
			<th class="left">発注単価</th>
			<td><input class="form-control" type="number" name="" size="7" maxlength="7" value="" placeholder="発注単価"></td>
		</tr>
	　<tr>
			<th class="left">発注金額</th>
			<td></td>
		</tr>
		<tr>
			<th class="left">最終更新者</th>
			<td></td>
		</tr>
		<tr>
			<th class="left">最終更新日</th>
			<td></td>
		</tr>
		</tbody>
	</table>
	<div class="controll_buttons">
		<a href="#" class="square_btn btn">
			<i class="fa fa-caret-right"></i>登録</a>
		<a href="" class="reseto_btn btn">
			<i class="fa fa-caret-right"></i>リセット</a>
		<a href="#" class="update_btn btn">
			<i class="fa fa-caret-right"></i>更新</a>
		<a href="#" class="delete_btn btn">
			<i class="fa fa-caret-right"></i>削除</a>
	</div>
</div>
@endsection