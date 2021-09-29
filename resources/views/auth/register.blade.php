<x-guest-layout>

    <x-auth-card>

        <div class="card">

            <div class="card-body login-card-body">

                <form action="{{ route('register') }}" method="POST">

                    @csrf

                    <div class="input-group mb-3">

                        <input class="form-control" type="text" name="name" value="{{ old('name') }}"
                            placeholder="Name" required autofocus>

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-user"></span>

                            </div>

                        </div>

                    </div>

                    <div class="input-group mb-3">

                        <input class="form-control" type="email" name="email" value="{{ old('email') }}"
                            placeholder="Email" required>

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-envelope"></span>

                            </div>

                        </div>

                    </div>

                    <div class="input-group mb-3">

                        <input class="form-control" type="password" name="password" placeholder="Password" required
                            autocomplete="new-password">

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-lock"></span>

                            </div>

                        </div>

                    </div>

                    <div class="input-group mb-3">

                        <input class="form-control" type="password" placeholder="Password confirmation"
                            name="password_confirmation" required>

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-lock"></span>

                            </div>

                        </div>

                    </div>

                    <div class="d-flex">

                        <div class="mr-auto p-2"></div>

                        <div class="p-2">

                            <a href="{{ route('login') }}" class="btn btn-primary btn-block">

                                {{ __('Already registered?') }}

                            </a>

                        </div>

                        <div class="p-2">

                            <button type="submit" class="btn btn-primary btn-block">

                                {{ __('Register') }}

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </x-auth-card>

</x-guest-layout>
