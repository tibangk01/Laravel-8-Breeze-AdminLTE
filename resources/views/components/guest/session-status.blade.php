@props(['status'])

<div class="row text-center pb-3">

    <div class="col-md-12">

        @if ($status)

            {{ $status }}

        @endif

    </div>

</div>
