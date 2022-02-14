@extends('guest.layouts.app')

@section('content')
    <div id="careers">
        <div class="content">
            <div class="first-section">
                @include('guest.layouts.header')
                <div class="text-content">
                    <p>CAREERS</p>
                    <h3 class="mb5">The future is here!
                        <br>Future where work is fun.
                    </h3>
                    <p>We're looking for front-end, back-end, blockchain developers. Game engineers, designers or 3D artist, and
                        adventurers, builders, thinkers, and missionaries to join our team and our powerful mission to bring the
                        decentralized gaming and metaverse to the entire planet.</p>
                        <div class="btn-container mt5">
                            <a href="#">
                                <img class="button_svg" style="margin:0" src="{{ url('images/button_svg.svg') }}" alt="button"/>
                                <p class="button_text" style="left: 25%; transform: translate(-36%, -50%);">APPLY TODAY</p>
                            </a>
                        </div>
                </div>
            </div>
            <div class="second-section">
                <img id="controller-container" src="{{ url('images/Shape_21.png') }}" alt="">
                <img id="img_1" src="{{ url('images/layer_4.png') }}" alt="">
                <div class="text-content">
                    <h3 class="mb5">Perks and Benefits<br>
                        Development</h3>
                    <p>Automata offers a wider range of outstanding benefits that allow each employee to tailor a benefits package that meets his or her specific needs.</p>
                    <p>We work in a dynamic environment and all of our employees our guaranteed to acquire new skills and improve their personal development. We offer competitive salary and lot of time off.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagejs')
    {{-- <script src="{{ asset('js/pages/guests/buynow/index.js') }}"></script> --}}
@stop
