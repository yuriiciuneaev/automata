@extends('guest.layouts.app')

@section('meta_keywords', )
@section('meta_description', 'Web 3 development website with a programming language and other latest technologies, we develop scalable, intelligent, stand-alone, and technologically advanced applications.')
@section('page_title', 'Auto Mata 3D - Web 3 Development Website for Advanced Technology | Blockchain Development')
@section('canonical_url', 'https://www.automata3d.com/')

@section('content')
    <div id="home">
        <div class="content">
            <div class="hero-section">
                @include('guest.snippets.hero-shapes')
                @include('guest.layouts.header')
                <div class="center-vertically-horizontally c-h1">
                    <h1 class="white-text text-center font-bold mb5 pb5">Powerful Web3 Development<br>
                        for advanced technology</h1>
                    <div class="btn-container mt5 get-in-touch">
                        <img class="bg-2" src="{{ url('images/layer_2.png') }}" alt="">
                        <a href="{{ url('/contact') }}">
                            <img class="button_svg" src="{{ url('images/button_svg.svg') }}" alt="button"/>
                            <p class="button_text">GET IN TOUCH</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="second-section">
                <div class="shape-box-1"></div>
                <div class="shape-box-2"></div>
                <img class="img_1" src="{{ url('images/controller_1.png') }}" alt="">
                <img id="img_2" src="{{ url('images/automata_2.png') }}" alt="">
                <img id="img_3" src="{{ url('images/Polygon.png') }}" alt="">
                <div class="text-content">                    
                    <h3 class="mb5 font-bold">Blockchain GameFi Development</h3>
                    <p>Automata develops games that combine video games with blockchain technology, cryptocurrencies and
                        decentralized finance also known as GameFi.</p>
                    <p>With focus on play-to-earn (P2E), we are developing in-game economies using cryptocurrencies,
                        non-fungible tokens (NFTs), in-game assets, and elements of decentralized finance (DeFi).</p>
                </div>
            </div>
            <div class="third-section">
                <div class="text-content">
                    <h3 class="mb3 font-bold">Sophisticated Smart Contracts for Defi and GameDefi</h3>
                    <p class="font-bold mb5">Digital innovation for a changing world</p>
                    <p class="mb5">Using Solidity programming language and other latest technologies, we develop
                        scalable, intelligent, stand-alone,<br> technologically advanced applications for Decentralized
                        Finance (DeFi) and GameFi.</p>
                    <p class="mb5">
                        Our experienced team delivers solutions to innovate crypto currency lending platforms, decentralized
                        exchanges (DEX)<br> powered by automated market makers (AMM) or NFT marketplaces using a variety of
                        Blockchain Development<br> Platforms like Ethereum, Tezos, XDC Network, Corda, Stellar, Hyperledger
                        and others.
                    </p>
                </div>
                <div class="btn-container mt5">
                    <a href="{{ url('/contact') }}">
                        <img class="button_svg" src="{{ url('images/button_svg.svg') }}" alt="button"/>
                        <p class="button_text">GET IN TOUCH</p>
                    </a>
                </div>
            </div>
            <div class="fourth-section">                
                <img  class="img_1" src="{{ url('images/Layer_3.png') }}" alt="">
                <div class="text-content c-h2">
                    <h2 class="mb5 font-bold">Blockchain GameFi Development</h2>
                    <p>Automata develops games that combine video games with blockchain technology, cryptocurrencies and
                        decentralized finance also known as GameFi.</p>
                    <p>With focus on play-to-earn (P2E), we are developing in-game economies using cryptocurrencies,
                        non-fungible tokens (NFTs), in-game assets, and elements of decentralized finance (DeFi).</p>
                    <div class="shape-box-1"></div>
                    <div class="shape-box-2"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagejs')
    <script src="{{ asset('js/pages/guests/home/index.js') }}"></script>
@stop
