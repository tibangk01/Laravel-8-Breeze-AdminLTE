<x-guest-layout>

    <x-auth-card>

        <div class="card">

            <div class="card-body login-card-body">

                <form action="{{ route('password.update') }}" method="POST">

                    @csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="input-group mb-3">

                        <input class="form-control" type="email" name="email" value="{{ old('email', $request->email) }}" placeholder="Email" required>

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-envelope"></span>

                            </div>

                        </div>

                    </div>

                    <div class="input-group mb-3">

                        <input class="form-control" type="password" name="password" placeholder="Password" required autofocus>

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-lock"></span>

                            </div>

                        </div>

                    </div>

                    <div class="input-group mb-3">

                        <input class="form-control" type="password" name="password_confirmation" placeholder="Password" required>

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-lock"></span>

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-12">

                            <button type="submit" class="btn btn-primary btn-block">

                                {{ __('Reset Password') }}

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </x-auth-card>

</x-guest-layout>
