@extends('layouts.app')

@section('content')
    <section class="hero is-fullheight is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <h1 class="title">{{ trans('auth.reset_password') }}</h1>
                        <form action="{{ route('auth.password.request') }}" method="POST">
                            {!! csrf_field() !!}

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="box">
                                <div class="field">
                                    <label class="label" for="email">{{ trans('validation.attributes.email') }}</label>
                                    <div class="control {{ $errors->has('email') ? 'has-icons-right' : '' }}">
                                        <input
                                                class="input {{ $errors->has('email') ? 'is-danger' : '' }}"
                                                type="email"
                                                name="email"
                                                id="email"
                                                value="{{ $email or old('email') }}"
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

                                <p class="control">
                                    <button type="submit" class="button is-primary">
                                        {{ trans('common.reset') }}
                                    </button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
