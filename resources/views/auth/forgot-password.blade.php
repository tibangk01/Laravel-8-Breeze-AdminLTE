<x-guest-layout>

    <x-auth-card>

        <div class="card">

            <div class="text-justify pt-2 pl-2 pr-2">

                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}

            </div>

            <div class="card-body login-card-body">

                <form action="{{ route('password.email') }}" method="POST">

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

                    <div class="row">

                        <div class="col-12">

                            <button type="submit" class="btn btn-primary btn-block">

                                {{ __('Email Password Reset Link') }}

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </x-auth-card>

</x-guest-layout>
