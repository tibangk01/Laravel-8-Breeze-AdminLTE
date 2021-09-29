<x-guest-layout>

    <x-auth-card>

        <div class="card">

            <div class="text-justify pt-2 pl-2 pr-2">

                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}

            </div>

            @if (session('status') == 'verification-link-sent')

                <div class="text-justify pt-2 pl-2 pr-2">

                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}

                </div>

            @endif

            <div class="card-body login-card-body">

                <div class="d-flex">

                    <div class="p-2">

                        <form action="{{ route('verification.send') }}" method="POST">

                            @csrf

                            <div>

                                <button type="submit" type="submit" class="btn btn-primary btn-block">

                                    {{ __('Resend Verification Email') }}

                                </button>

                            </div>

                        </form>

                    </div>

                    <div class="ml-auto p-2">

                        <form action="{{ route('logout') }}" method="POST">

                            @csrf

                            <button type="submit" class="btn btn-primary btn-block">

                                {{ __('Log Out') }}

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </x-auth-card>

</x-guest-layout>
