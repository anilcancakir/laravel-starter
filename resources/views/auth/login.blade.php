@extends('layouts.app')

@section('content')
    <section class="hero is-fullheight is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <h1 class="title">{{ trans('auth.login_your_account') }}</h1>
                        <form action="{{ route('auth.login') }}" method="POST">
                            {!! csrf_field() !!}

                            <div class="box">
                                <div class="field">
                                    <label class="label" for="email">{{ trans('validation.attributes.email') }}</label>
                                    <div class="control {{ $errors->has('email') ? 'has-icons-right' : '' }}">
                                        <input
                                                class="input {{ $errors->has('email') ? 'is-danger' : '' }}"
                                                type="email"
                                                name="email"
                                                id="email"
                                                value="{{ old('email') ?: '' }}"
                                                autofocus />

                                        @if($errors->has('email'))
                                            <span class="icon is-small is-right"><i class="fa fa-warning"></i></span>
                                        @endif
                                    </div>

                                    @if ($errors->has('email'))
                                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <label class="label" for="password">{{ trans('validation.attributes.password') }}</label>
                                    <div class="control {{ $errors->has('password') ? 'has-icons-right' : '' }}">
                                        <input
                                                class="input {{ $errors->has('password') ? 'is-danger' : '' }}"
                                                type="password"
                                                name="password"
                                                id="password" />

                                        @if($errors->has('password'))
                                            <span class="icon is-small is-right"><i class="fa fa-warning"></i></span>
                                        @endif
                                    </div>

                                    @if ($errors->has('password'))
                                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox">
                                            <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                                            {{ trans('validation.attributes.remember') }}
                                        </label>
                                    </div>

                                    @if ($errors->has('remember'))
                                        <p class="help is-danger">{{ $errors->first('remember') }}</p>
                                    @endif
                                </div>

                                <p class="control">
                                    <button type="submit" class="button is-primary">
                                        {{ trans('routes.auth.login.title') }}
                                    </button>

                                    <a href="{{ route('auth.password.request') }}" class="button is-link">
                                        {{ trans('routes.auth.password.request.title') }}
                                    </a>
                                </p>
                            </div>

                            <p class="has-text-centered">
                                <a href="{{ route('auth.register') }}">{{ trans('routes.auth.register.title') }}</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
