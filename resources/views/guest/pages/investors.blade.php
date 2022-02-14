@extends('guest.layouts.app')

@section('content')
    <div id="investors">
        <div class="content">
            <div class="first-section">
                @include('guest.layouts.header')
                <div class="text-content">
                    <p>INVESTORS</p>
                    <h3 class="mb5">Automating digital entertainment,
                        blockchain, and gamification.
                    </h3>
                    <p>Established in 2021 and headquartered in Jacksonville, FL.
                        We believe that future is decentralized and games will become a source of income for anyone,
                        anywhere. Join our powerful mission and learn more about investment opportunities we have to offer
                        at Automata.</p>
                        <div class="btn-container mt5">
                            <a href="#">
                                <img class="button_svg" style="margin:0" src="{{ url('images/button_svg.svg') }}" alt="button"/>
                                <p class="button_text" style="left: 25%; transform: translate(-36%, -50%);">INVEST TODAY</p>
                            </a>
                        </div>
                </div>
            </div>
            <div class="second-section">
                <img id="controller-container" src="{{ url('images/Shape_21.png') }}" alt="">
                <img id="img_1" src="{{ url('images/layer_4.png') }}" alt="">
                <div class="text-content">
                    <h3 class="mb5">Blockchain gaming to<br>
                        $39.7 billion by 2025</h3>
                    <p>Blockchain gaming has grown from a zero value market size to a $3 billion figure in 2021. It will
                        rise to a $39.7 billion sector by 2025, taking a huge chunk of the legacy $151.1 billion revenue
                        video game market.</p>
                    <p>Aside from gaming sector, blockchain is revolutionizing finance market where the total amount of
                        money deposited at DeFi services has spiked from just $500 million to $247 billion in 2021.</p>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('pagejs')
    {{-- <script src="{{ asset('js/pages/guests/buynow/index.js') }}"></script> --}}
@stop
