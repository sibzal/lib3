@extends('layouts.app')

@section('title', 'Вход')

@section('content')
    <div class="registration__wrapper">
        <div class="container">
            <div class="reg_content">
                <h1 class="title__forms">Авторизация</h1>
                <form class="form_registration">
                    <label>Email</label><br>
                    <input type="text" class="input"><br><br>

                    <label>Введите пароль</label><br>
                    <input type="password" class="input"><br>

                    <p>Нет аккаунта? <a href="registration.html">Зарегистрируйтесь</a></p>
                    <input type="submit" class="input btn_reg" value="Вход">
                </form>
            </div>
        </div>
    </div>
@endsection