@extends('guest.layouts.app')

@section('meta_keywords', )
@section('meta_description', 'Auto Mata 3D is a highly skilled and intelligent team of web 3 application, ready to deliver innovative applications, decentralization, and tokenization of digital property rights.')
@section('page_title', 'Auto Mata 3D - Contact | Experienced Team of Developers')
@section('canonical_url', 'https://www.automata3d.com/contact')

@section('content')
    <div id="contacts">
        <div class="content">
            <div class="hero-section">
                @include('guest.snippets.hero-shapes')
                <img class="bg-building" src="{{ url('images/bg/bg_contact_hero_buildings.png') }}" alt="">
                @include('guest.layouts.header')
                <div class="text-content c-h1-p">
                    <h1 class="mb5">CONTACT</h1>
                    <p class="my0">Phone</p>
                    <p class="font-bold mb4 mt0">(904) 512-7393</p>
                    <p class="my0">Email</p>
                    <p class="font-bold mb4 mt0">hello@automata3d.com</p>
                    <p class="my0">Adress</p>
                    <p class="font-bold mb4 mt0">5011 Gate Pkwy 100-100<br>Jacksonville, FL 32256</p>
                    <div class="btn-container">
                        <a href="mailto:hello@automata3d.com" target="_blank">
                            <img class="button_svg" src="{{ url('images/button_svg.svg') }}" alt="button"/>
                            <p class="button_text">GET IN TOUCH</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagejs')
    {{-- <script src="{{ asset('js/pages/guests/buynow/index.js') }}"></script> --}}
@stop
