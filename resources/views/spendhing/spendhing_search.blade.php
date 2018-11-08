@extends('layout.common')
@section('title', '入金管理')

@section('content')
<div class="content_wrapper">
    <table class="table-bordered">
        <tbody>
            <tr>
                <th colspan="2">入金情報</th>
            </tr>
            <tr>
                <th class="left">注文番号</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">入金方法</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">入金状態</th>
                <td>
                    <label><input class="form-control" type="radio" name="d">未入金</label>
                    <label><input class="form-control" type="radio" name="d">入金済み</label>
                </td>
            </tr>
            <tr>
                <th class="left">入金日時</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">着金予定日</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">入金額</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">入金先金融機関</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">口座番号</th>
                <td></td>
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
		<a href="" class="reseto_btn btn">
			<i class="fa fa-caret-right"></i>リセット</a>
		<a href="#" class="update_btn btn">
			<i class="fa fa-caret-right"></i>更新</a>
		<a href="#" class="delete_btn btn">
			<i class="fa fa-caret-right"></i>削除</a>
	 </div>
</div>
@endsection