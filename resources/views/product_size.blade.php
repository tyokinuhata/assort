@extends('layout.common')
@section('title', '商品管理')

@section('content')
<div class="main_content">
	<h1 id="title">商品サイズ管理画面</h1>

	<table>
		<tbody>
		<tr>
			<th colspan="2">商品情報</th>
		</tr>
		<tr>
		<th class="left">商品コード</th>
		<td></td>
		</tr>
		<tr>
			<th class="left">商品名</th>
			<td><input type="text" name="" size="40" maxlength="40" value="" placeholder="商品名"></td>
		</tr>
		<tr>
			<th class="left">商品名（カナ）</th>
			<td><input type="text" name="" size="40" maxlength="40" value="" placeholder="商品名（カナ）"></td>
		</tr>
		<tr>
		　<th class="left">カテゴリ</th>
		　<td><input type="text" name="" size="40" maxlength="40" value="" placeholder="カテゴリー"></td>
		</tr>
		<tr>
		　<th class="left">ブランド</th>
		　<td><input type="text" name="" size="40" maxlength="40" value="" placeholder="仕入先コード">
			<input type="text" name="" size="40" maxlength="40" value="" placeholder="ブランド名"></td>
		</tr>
		<tr>
			<th class="left">サイズ</th>
				<td>
					<select name="gender">
							<option value="">メンズ</option>
							<option value="">レディース</option>
							<option value="">ユニセックス</option>
					</select>
					<select name="size">
							<option value="">S</option>
							<option value="">M</option>
							<option value="">L</option>
					</select>
			</td>
		</tr>
				
		<tr>
			<th class="left">カラー</th>
				<td>
					<select name="size">
							<option value="">赤</option>
							<option value="">青</option>
							<option value="">黄</option>
					</select>
			</td>
		</tr>
				
		<tr>
			<th class="left">在庫数</th>
			<td>3</td>
		</tr>
		<tr>
			<th class="left">最終更新者</th>
			<td><input type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
		</tr>
		<tr>
			<th class="left">最終更新日</th>
			<td><input type="date" name="date" value="2018-01-01"></td>
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