@extends('layouts.small')

@section('content')
    <main role="main">
        <article>
            <div class="padding-t2">
                <div class="row">
                    <div class="large-6 medium-8 small-11 columns small-centered text-invert text-center">

                        <!-- logo -->
                        <div class="padding-4 opacity-3 text-center">
                            <div class="row">
                                <div class="small-4 columns small-centered">
                                    <img src="{{ elixir('img/atlas-mark-128.png') }}" />
                                </div>
                            </div>
                        </div>

                        <h1 class="margin-none text-white">404 Error</h1>
                        <p class="margin-none-t text-big">The page you're looking for can't be found</p>
                        <a class="full button-small color-bg-primary border-solid text-invert text-center text-decoration-none text-weight-700 rounded" href="#">Return home</a>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection