@extends('layout.common')
@section('title', '出金管理')

@section('content')
<div class="content_wrapper">
    <table class="table-bordered">
        <tbody>
            <tr>
                <th colspan="2">出金情報</th>
            </tr>
            <tr>
                <th class="left">出金方法</th>
                <td></td>
            </tr>
            　<tr>
                <th class="left">入出金状態</th>
                <td></td>
            </tr>
            　<tr>
                <th class="left">出金日時</th>
                <td></td>
            </tr>
            　<tr>
                <th class="left">着金予定日</th>
                <td></td>
            </tr>
            　<tr>
                <th class="left">出金額</th>
                <td></td>
            </tr>
            　<tr>
                <th class="left">出金先金融機関</th>
                <td></td>
            </tr>
            　<tr>
                <th class="left">口座番号</th>
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