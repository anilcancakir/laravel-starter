@extends('layouts.app')

@section('content')
    <section class="hero is-fullheight is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <h1 class="title">{{ trans('auth.register_now') }}</h1>
                        <form action="{{ route('auth.register') }}" method="POST">
                            {!! csrf_field() !!}

                            <div class="box">
                                <div class="field">
                                    <label class="label" for="name">{{ trans('validation.attributes.name') }}</label>
                                    <div class="control {{ $errors->has('name') ? 'has-icons-right' : '' }}">
                                        <input
                                                class="input {{ $errors->has('name') ? 'is-danger' : '' }}"
                                                type="text"
                                                name="name"
                                                id="name"
                                                value="{{ old('name') ?: '' }}"
                                                autofocus />

                                        @if($errors->has('name'))
                                            <span class="icon is-small is-right"><i class="fa fa-warning"></i></span>
                                        @endif
                                    </div>

                                    @if ($errors->has('name'))
                                        <p class="help is-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <label class="label" for="email">{{ trans('validation.attributes.email') }}</label>
                                    <div class="control {{ $errors->has('email') ? 'has-icons-right' : '' }}">
                                        <input
                                                class="input {{ $errors->has('email') ? 'is-danger' : '' }}"
                                                type="email"
                                                name="email"
                                                id="email"
                                                value="{{ old('email') ?: '' }}" />

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
                                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <label class="label" for="password_confirmation">{{ trans('validation.attributes.password_confirmation') }}</label>
                                    <div class="control {{ $errors->has('password_confirmation') ? 'has-icons-right' : '' }}">
                                        <input
                                                class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}"
                                                type="password"
                                                name="password_confirmation"
                                                id="password_confirmation" />

                                        @if($errors->has('password_confirmation'))
                                            <span class="icon is-small is-right"><i class="fa fa-warning"></i></span>
                                        @endif
                                    </div>

                                    @if ($errors->has('password_confirmation'))
                                        <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox">
                                            <input type="checkbox" name="tos" value="1" {{ old('tos') ? 'checked' : '' }}>
                                            {!! trans('validation.placeholders.tos') !!}
                                        </label>
                                    </div>

                                    @if ($errors->has('tos'))
                                        <p class="help is-danger">{{ $errors->first('tos') }}</p>
                                    @endif
                                </div>

                                <p class="control">
                                    <button type="submit" class="button is-primary">{{ trans('routes.auth.register.title') }}</button>
                                </p>
                            </div>

                            <p class="has-text-centered">
                                <a href="{{ route('auth.login') }}">{{ trans('routes.auth.login.title') }}</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
