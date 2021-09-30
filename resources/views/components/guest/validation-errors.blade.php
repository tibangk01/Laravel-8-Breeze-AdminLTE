@props(['errors'])

<div class="row ">

    <div class="col-md-12">

        @if ($errors->any())

            <div>

                {{ __('Whoops! Something went wrong.') }}

            </div>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        @endif

    </div>

</div>
