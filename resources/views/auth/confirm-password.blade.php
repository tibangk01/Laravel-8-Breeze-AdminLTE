<x-guest-layout>

    <x-auth-card>

        <div class="card">

            <div class="text-justify pt-2 pl-2 pr-2">

                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}

            </div>

            <div class="card-body login-card-body">

                <form method="POST" action="{{ route('password.confirm') }}" method="POST">

                    @csrf

                    <div class="input-group mb-3">

                        <input class="form-control" type="password" name="password" placeholder="Password" required autocomplete="current-password" autofocus>

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-lock"></span>

                            </div>

                        </div>

                    </div>

                    <div class="d-flex align-items-end flex-column">

                        <div class="mt-auto p-2">

                            <button type="submit" class="btn btn-primary btn-block">

                                {{ __('Confirm') }}

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </x-auth-card>

</x-guest-layout>
