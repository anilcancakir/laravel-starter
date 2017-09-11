<nav class="navbar has-shadow">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('common.home') }}">
                {{ config('app.name') }}
            </a>

            <!--suppress XmlUnboundNsPrefix -->
            <div class="navbar-burger burger" v-on:click="navToggle = !navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!--suppress XmlUnboundNsPrefix -->
        <div class="navbar-menu" v-bind:class="{ 'is-active': navToggle }">
            <div class="navbar-end">
                @if (Auth::check())
                    <a class="navbar-item" href="{{ route('auth.logout') }}">
                        {{ trans('auth.logout') }}
                    </a>
                @else
                    <a class="navbar-item {{ isRoute('auth.register') }}" href="{{ route('auth.register') }}">
                        {{ trans('routes.auth.register.title') }}
                    </a>
                    <a class="navbar-item {{ isRoute('auth.login') }}" href="{{ route('auth.login') }}">
                        {{ trans('routes.auth.login.title') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>
