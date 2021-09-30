<x-guest.layout>

    <x-guest.card>

        <x-guest.session-status :status="session('status')" />

        <x-guest.validation-errors :errors="$errors" />

        <div class="card">

            <div class="card-body login-card-body">

                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('login') }}" method="POST">

                    @csrf

                    <div class="input-group mb-3">

                        <input class="form-control" type="email" name="email" :value="old('email')" placeholder="Email"
                            required autofocus>

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-envelope"></span>

                            </div>

                        </div>

                    </div>

                    <div class="input-group mb-3">

                        <input class="form-control" type="password" name="password" placeholder="Password" required
                            autocomplete="current-password">

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-lock"></span>

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-8">

                            <div class="icheck-primary">

                                <input type="checkbox" name="remember">

                                <label for="remember">

                                    {{ __('Remember me') }}

                                </label>

                            </div>

                        </div>

                        <div class="col-4">

                            <button type="submit" class="btn btn-primary btn-block">{{ __('Log In') }}</button>

                        </div>

                    </div>

                </form>

                @if (Route::has('register'))

                    <p class="mb-1">

                        <a href="{{ route('register') }}">{{ __('Register') }}</a>

                    </p>

                @endif

                @if (Route::has('password.request'))

                    <p class="mb-1">

                        <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>

                    </p>

                @endif

            </div>

        </div>

    </x-guest.card>

</x-guest.layout>
