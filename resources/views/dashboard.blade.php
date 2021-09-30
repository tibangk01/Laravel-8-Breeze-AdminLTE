<x-app.layout pageTitle="Dashbord">

    <x-app.content-header pageName="Dashboard">

        <li class="breadcrumb-item "><a href="{{ route('dashboard') }}">Dashboard</a></li>

        <li class="breadcrumb-item active">Home</li>

    </x-app.content-header>

    <x-app.content>

        <x-app.stat-box />

        <x-app.demo>

            <a href="{{ route('verification.notice') }}" class="btn btn-primary">Verify Email</a>

            <a href="{{ route('password.confirm') }}" class="btn btn-primary">Confirm Password</a>

        </x-app.demo>



    </x-app.content>

</x-app.layout>
