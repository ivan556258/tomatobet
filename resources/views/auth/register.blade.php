@extends('app')
  @section('content')
  <x-jet-validation-errors class="mb-4" />
    <div class="register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Добро пожаловать</h3>
                        <p>Регистрация не занимает больше 30 секунд. Регистрация дает право, делать лайки, оставлять коментарии и даже писать посты.</p>
                        <a href="{{ route('login') }}" class="register-left-input">Войти</a>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <form method="POST" action="{{ route('register') }}">
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
                                            <x-jet-label for="password_confirmation" value="Повторите пароль" />
                                            <x-jet-input id="password_confirmation"  type="password" name="password_confirmation" class="form-control" required autocomplete="new-password" />
                                        </div>
        
                                        <x-jet-button class="btnRegister">
                                            @lang('words.Register')
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




    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
            <x-jet-label for="terms">
                <div class="flex items-center">
                    <x-jet-checkbox name="terms" id="terms"/>

                    <div class="ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                        ]) !!}
                    </div>
                </div>
            </x-jet-label>
        </div>
    @endif
</form>