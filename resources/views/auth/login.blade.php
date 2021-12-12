

@extends('app')
  @section('content')
  <x-jet-validation-errors class="mb-4" />
  @if (session('status'))
  <div class="mb-4 font-medium text-sm text-green-600">
      {{ session('status') }}
  </div>
@endif
    <div class="register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Добро пожаловать</h3>
                        <p>Регистрация не занимает больше 30 секунд. Регистрация дает право, делать лайки, оставлять коментарии и даже писать посты.</p>
                        <a href="{{ route('register') }}" class="register-left-input">Войти</a>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h3  class="register-heading">Регистрация нового пользователя</h3>
                                <div class="row register-form ">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <x-jet-label for="email" value="{{ __('Email') }}" />
                                            <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                        </div>
                                        
                                        <div class="form-group">
                                            <x-jet-label for="password" value="Пароль" />
                                            <x-jet-input id="password" type="password" name="password" required autocomplete="new-password" class="form-control"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="remember_me" class="flex items-center">
                                                <x-jet-checkbox id="remember_me" name="remember" />
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>
            
        
                                        <x-jet-button class="btnRegister">
                                            Войти
                                        </x-jet-button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

            </div>
@endsection