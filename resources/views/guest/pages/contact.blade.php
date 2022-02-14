@extends('guest.layouts.app')

@section('content')
    <div id="contacts">
        <div class="content">
            <div class="first-section">
                @include('guest.layouts.header')
                {{-- <div class="row">
                    <div class="col m4 s12">
                    
                    </div>
                    <div class="col m8 s12">

                    </div>
                </div> --}}
                <div class="text-content">
                    <p class="mb5">Contact</p>
                    <p class="my0">Phone</p>
                    <p class="font-bold mb4 mt0">(904) 512-7393</p>
                    <p class="my0">Email</p>
                    <p class="font-bold mb4 mt0">hello@automata3d.com</p>
                    <p class="my0">Adress</p>
                    <p class="font-bold mb4 mt0">5011 Gate Pkwy 100-100<br>Jacksonville, FL 32256</p>
                    <div class="btn-container">
                        <a href="#">
                            <img class="button_svg" style="margin:0" src="{{ url('images/button_svg.svg') }}" alt="button"/>
                            <p class="button_text" style="left: 25%; transform: translate(-36%, -50%);">GET IN TOUCH</p>
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
