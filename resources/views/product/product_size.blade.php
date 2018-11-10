@extends('layout.common')
@section('title', '色・サイズ編集画面')
@section('header_title', '色・サイズ編集画面')

@section('content')
<<<<<<< aea195422a13ac5b0b4eefabec3d00b39ef013d2
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
=======
<div class="content_wrapper">
	<form action='' method=''>
		{{ csrf_field() }}
		<table class="table-bordered">
			<tbody>
				<tr>
					<th colspan="2">商品情報</th>
				</tr>
				<tr>
					<th>商品コード</th>
					<td>PD001</td>
				</tr>
				<tr>
					<th>商品名</th>
					<td>かなりいい感じのTシャツ</td>
				</tr>
				<tr>
					<th>商品名（カナ）</th>
					<td>カナリイイカンジノTシャツ</td>
				</tr>
				<tr>
					<th>親カテゴリ / カテゴリ</th>
					<td>アレ / ソレ</td>
				</tr>
				<tr>
					<th>ブランド</th>
					<td>やばくないTシャツ屋さん</td>
				</tr>
				<tr>
					<th>サイズ</th>
						<td class="row">
							<div class="col-xs-6"><select class="form-control select2" name="gender">
								<option value="">メンズ</option>
								<option value="">レディース</option>
								<option value="">ユニセックス</option>
							</select></div>
							<div class="col-xs-6"><select class="form-control select2" name="size">
								<option value="">S</option>
								<option value="">M</option>
								<option value="">L</option>
							</select></div>
					</td>
				</tr>
						
				<tr>
					<th>カラー</th>
					<td>
						<select class="form-control select2" name="size">
>>>>>>> 軽く商品サイズ画面設計
							<option value="">赤</option>
							<option value="">青</option>
							<option value="">黄</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>在庫数</th>
					<td><input class="form-control" type="number"></td>
				</tr>
				<tr>
					<th>最終更新者</th>
					<td>村上透</td>
			</tr>
			<tr>
				<th>最終更新日</th>
				<td>2018/11/11</td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons">
			<!-- {{ method_field('delete') }}
			<input type='hidden' name='id' value='1'><br> -->
			<input class="btn btn-success" type='submit' value='更新'>
		</div>
	</form>
</div>
@endsection