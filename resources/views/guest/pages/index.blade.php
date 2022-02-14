@extends('guest.layouts.app')

{{-- @section('meta_keywords', $data['meta_tags'][0]->keywords)
@section('meta_description', $data['meta_tags'][0]->description)
@section('page_title', $data['meta_tags'][0]->page) --}}

@section('content')
    <div id="home">
        <div class="content">
            <div class="first-section">
                @include('guest.layouts.header')
                <div class="center-vertically-horizontally">
                    <h3 class="white-text text-center font-bold mb5 pb5">Powerful Web3 Development<br>
                        for advanced technology</h3>
                    <div class="btn-container mt5">
                        <img class="bg-2" src="{{ url('images/layer_2.png') }}" alt="">
                        <a href="#">
                            <img class="button_svg" src="{{ url('images/button_svg.svg') }}" alt="button"/>
                            <p class="button_text">GET IN TOUCH</p>
                        </a>
                    </div>

                </div>
            </div>
            <div class="second-section">
                <img id="controller-container" src="{{ url('images/Shape_21.png') }}" alt="">
                <img id="img_1" src="{{ url('images/controller_1.png') }}" alt="">
                <div class="text-content">
                    <h3 class="mb5">Blockchain GameFi<br>
                        Development</h3>
                    <p>Automata develops games that combine video games with blockchain technology, cryptocurrencies and
                        decentralized finance also known as GameFi.</p>
                    <p>With focus on play-to-earn (P2E), we are developing in-game economies using cryptocurrencies,
                        non-fungible tokens (NFTs), in-game assets, and elements of decentralized finance (DeFi).</p>
                </div>
            </div>
            <div class="third-section">
                <div class="text-content">
                    <h2 class="mb3">Sophisticated Smart Contracts<br> for Defi and GameDefi</h2>
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
                    <a href="#">
                        <img class="button_svg" src="{{ url('images/button_svg.svg') }}" alt="button"/>
                        <p class="button_text">GET IN TOUCH</p>
                    </a>
                </div>
            </div>
            <div class="fourth-section">
                <img id="controller-container" src="{{ url('images/Shape_22.png') }}" alt="">
                <img id="img_1" src="{{ url('images/Layer_3.png') }}" alt="">
                <div class="text-content">
                    <h3 class="mb5">Blockchain GameFi<br>
                        Development</h3>
                    <p>Automata develops games that combine video games with blockchain technology, cryptocurrencies and
                        decentralized finance also known as GameFi.</p>
                    <p>With focus on play-to-earn (P2E), we are developing in-game economies using cryptocurrencies,
                        non-fungible tokens (NFTs), in-game assets, and elements of decentralized finance (DeFi).</p>
                </div>
            </div>
            {{-- <div class="second-section">
            <div class="container_1">
                <img id="controller" src="{{ url('images/Group_33.png') }}" alt="">
                <div class="text-content">
                    <h3 class="mb5">Blockchain GameFi<br>
                        Development</h3>
                    <p>Automata develops games that combine video games with blockchain technology, cryptocurrencies and
                        decentralized finance also known as GameFi.</p>
                    <p>With focus on play-to-earn (P2E), we are developing in-game economies using cryptocurrencies,
                        non-fungible tokens (NFTs), in-game assets, and elements of decentralized finance (DeFi).</p>
                </div>
            </div>
            <div class="container_2">
                <div class="text-content">
                    <h2 class="mb3">Sophisticated Smart Contracts<br> for Defi and GameDefi</h2>
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
                <div class="btn-container py5">
                    <a href="#" class="button ribbon-outset border">GET IN TOUCH</a>
                </div>
            </div>
            <div class="bg-overflow">
                <div class="bg"></div>
                <img id="" src="{{ url('images/Group_1.png') }}" alt="">
                <div class="text-content">
                    <h2 class="mb5">Metaverse technology<br>studio
                    </h2>
                    <p>With our expertise in Blockchain, Gaming, Augmented Reality and<br>Virtual Reality we develop and launch
                        Metaverse components like<br>3D virtual spaces, Metaverse NFT marketplaces, Metaverse<br>Applications and
                        Decentralized platforms.</p>
                </div>
            </div>
        </div> --}}
            {{-- {{-- <div class="third-section"> --}}
        </div>
    </div>
@endsection

@section('pagejs')
    <script src="{{ asset('js/pages/guests/home/index.js') }}"></script>
@stop
