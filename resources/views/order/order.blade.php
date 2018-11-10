@extends('layout.common')
@section('title', '発注管理')

@section('content')
	<div class="main_content">
	<h1 id="title">発注管理画面</h1>

	<table>
		<tbody>
		<tr>
			<th colspan="2">発注情報</th>
		</tr>
	<tr>
			<th class="left">商品コード</th>
			<td><input type="text" name="" size="20" maxlength="40" value="" placeholder="商品コード"><button>Search</button></td>
		</tr>
		<tr>
			<th class="left">商品名</th>
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
			<td><input type="text" name="" size="60" maxlength="60" value="" placeholder="仕入先"></td>
		</tr>
	<tr>
			<th class="left">支払先</th>
			<td><input type="text" name="" size="60" maxlength="60" value="" placeholder="支払先"></td></td>
		</tr>
	<tr>
			<th class="left">発注担当者</th>
			<td><input type="text" name="" size="40" maxlength="40" value="" placeholder="発注担当者"></td>
		</tr>
	<tr>
			<th class="left">発注数</th>
			<td><input type="number" name="" size="10" maxlength="40" value="" ></td>
		</tr>
	<tr>
			<th class="left">発注単価</th>
			<td><input type="number" name="" size="7" maxlength="7" value="" placeholder="発注単価"></td>
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
	<div align="right">
	<a href="#" class="square_btn">
		<i class="fa fa-caret-right"></i>登録</a>
	<a href="#" class="reseto_btn">
		<i class="fa fa-caret-right"></i>リセット</a> 
	<a href="#" class="update_btn">
		<i class="fa fa-caret-right"></i>更新</a>
	<a href="#" class="delete_btn">
		<i class="fa fa-caret-right"></i>削除</a>
	</div>
</div>
@endsection