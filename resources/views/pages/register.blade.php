@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <div class="registration__wrapper">
        <div class="container">
            <div class="reg_content">
                <h1 class="title__forms">Регистрация</h1>
                <form class="form_registration">
                    <label>Логин</label><br>
                    <input type="text" class="input"><br><br>

                    <label>Email</label><br>
                    <input type="text" class="input"><br><br>

                    <label>Введите пароль</label><br>
                    <input type="password" class="input"><br><br>
                    
                    <label>Повторите пароль</label><br>
                    <input type="password" class="input"><br>
                    <p>Есть аккаунт? <a href="sign_in.html">Войдите</a></p>
                    <input type="submit" class="input btn_reg" value="Зарегистрироваться">
                </form>
            </div>
        </div>
    </div>
@endsection