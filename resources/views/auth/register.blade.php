@extends('layouts.small')

@section('content')
    <main role="main">
        <article>

            <div class="padding-t2" id="slide-up">

                <div class="row">
                    <div class="large-6 medium-8 small-11 columns small-centered">

                        <div class="padding-4 opacity-3 text-center">
                            <div class="row">
                                <div class="small-4 columns small-centered">
                                    <img src="{{ elixir('img/atlas-mark-128.png') }}" />
                                </div>
                            </div>
                        </div>

                        <form role="form" method="POST" action="{{ url('/register') }}">
                            {!! csrf_field() !!}

                            <div class="margin-b2 rounded overflow-hidden transparent-card">
                                <p class="margin-none padding-1 color-bg-midnight text-white text-center text-big">Create an Account</p>

                                <table>
                                    <colgroup>
                                        <col span="1" style="width: 25%;">
                                        <col span="1" style="width: 75%;">
                                    </colgroup>

                                    <tr class="table-nohover">
                                        <td class="padding-none border-none">
                                            <label for="email" class="padding-1 text-small">Email</label>
                                        </td>
                                        <td class="padding-none border-none">
                                            <input autofocus id="email" name="email" type="text" class="full border-none unround" placeholder="info@atlas.com" value="{{ old('email') }}" />
                                        </td>
                                    </tr>

                                    <tr class="table-nohover transparent-row">
                                        <td class="padding-none border-none">
                                            <label for="password" class="padding-1 text-small">Password</label>
                                        </td>
                                        <td class="padding-none border-none">
                                            <input id="password" name="password" type="password" class="full border-none unround" placeholder="•••••••••••••" />
                                        </td>
                                    </tr>

                                    <tr class="table-nohover transparent-row">
                                        <td class="padding-none border-none">
                                            <label for="password-confirm" class="padding-1 text-small">Confirm</label>
                                        </td>
                                        <td class="padding-none border-none">
                                            <input id="password-confirm" name="password_confirmation" type="password" class="full border-none unround" placeholder="•••••••••••••" />
                                        </td>
                                    </tr>
                                </table>

                                <p class="margin-none padding-1 text-center text-small border-solid-top border-color-dark">Already have an account? <a href="#">Sign In</a>.</p>

                            </div>

                            <!-- submit -->
                            <input type="submit" value="Sign Up" class="button-small full color-bg-primary border-color-primary text-light text-weight-700" />
                        </form>

                    </div>
                </div>

            </div>

        </article>
    </main>




@endsection
