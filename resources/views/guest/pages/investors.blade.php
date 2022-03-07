@extends('guest.layouts.app')

@section('meta_keywords', )
@section('meta_description', 'Auto Mata 3D believes that the future is decentralized and games will become a source of income. Join our powerful mission and learn more about investment opportunities.')
@section('page_title', 'Auto Mata 3D - Investor | Digital Entertainment | Gamification')
@section('canonical_url', 'https://www.automata3d.com/investors')

@section('content')
    <div id="investors">
        <div class="content">
            <div class="hero-section">
                @include('guest.snippets.hero-shapes')
                @include('guest.layouts.header')
                <div class="text-content c-h1">
                    <p>INVESTORS</p>
                    <h1 class="mb5">Automating digital entertainment,
                        blockchain, and gamification.
                    </h1>
                    <p>Established in 2021 and headquartered in Jacksonville, FL.
                        We believe that future is decentralized and games will become a source of income for anyone,
                        anywhere. Join our powerful mission and learn more about investment opportunities we have to offer
                        at Automata.</p>
                    <div class="btn-container mt5">
                        <a href="{{ url('/contact') }}">
                            <img class="button_svg" src="{{ url('images/button_svg.svg') }}" alt="button"/>
                            <p class="button_text">INVEST TODAY</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="second-section">
                <div class="shape-box-1"></div>
                <div class="shape-box-2"></div>
                <img id="img_2" src="{{ url('images/automata_2.png') }}" alt="">
                <img id="img_3" src="{{ url('images/Polygon.png') }}" alt="">
                <div class="text-content c-h2">
                    <h2 class="mb5">Blockchain gaming to<br>
                        $39.7 billion by 2025</h2>
                    <p>Blockchain gaming has grown from a zero value market size to a $3 billion figure in 2021. It will
                        rise to a $39.7 billion sector by 2025, taking a huge chunk of the legacy $151.1 billion revenue
                        video game market.</p>
                    <p>Aside from gaming sector, blockchain is revolutionizing finance market where the total amount of
                        money deposited at DeFi services has spiked from just $500 million to $247 billion in 2021.</p>
                    <img class="img_1" src="{{ url('images/layer_4.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagejs')
    {{-- <script src="{{ asset('js/pages/guests/buynow/index.js') }}"></script> --}}
@stop
