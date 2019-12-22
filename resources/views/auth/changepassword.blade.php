@extends('layout2')

@section('content')

<div class="main-contents">

    <div class="container">
        <div class="pass-header">パスワード変更</div>
        @if (session('change_password_error'))
            {{session('change_password_error')}}
        @endif

        @if (session('change_password_success'))
            {{session('change_password_success')}}
        @endif

        <div class="pass-body">
            <form method="POST" action="{{route('changepass')}}">
                @csrf
                <p><label for="current">
                    現在のパスワード
                </label></p>
                <input type="password" name="current-password" required autofocus>
            
                <p><label for="password">
                    新しいパスワード
                </label></p>
                <input type="password" name="new-password" required>

                @if ($errors->has('new-password'))
                    <strong>{{$errors->first('new-password')}}</strong>
                @endif

                <p><label for="confirm">
                    新しいパスワード（確認用）
                </label></p>
                <input type="password" name="new-password_confirmation" required>
                <button type="submit">変更</button>
            </form>
        </div>

    </div>

</div>
@endsection