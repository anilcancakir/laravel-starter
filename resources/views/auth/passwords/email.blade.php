@extends('layouts.app')

@section('content')
    <section class="hero is-fullheight is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <h1 class="title">{{ trans('auth.recover_password') }}</h1>
                        <form action="{{ route('auth.password.email') }}" method="POST">
                            {!! csrf_field() !!}

                            @include('components.status-notification')

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

                                <p class="control">
                                    <button type="submit" class="button is-primary">
                                        {{ trans('auth.send_password_reset_link') }}
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
