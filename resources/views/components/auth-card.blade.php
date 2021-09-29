<div class="row ">

    <div class="col-md-12">

        <x-auth-session-status :status="session('status')" />

    </div>

</div>

<div class="row ">

    <div class="col-md-12">

        <x-auth-validation-errors :errors="$errors" />

    </div>

</div>

<div class="login-box">

    <x-application-logo />

    {{ $slot }}

</div>
