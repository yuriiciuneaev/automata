
<div id="footer" class="bg1-gradient pt6 pb10 text-center white-text row">
    <div class="col m4 s12">
        <ul class="social_icons"> 
            <li>
                <a href="#" title="Instagram" rel="me" target="_blank" class="icon-twitter">
                    <img src="{{ url('/images/icons/icon-instagram.png') }}" alt="">
                </a>
            </li>
            <li>
                <a href="#" title="Instagram" rel="me" target="_blank" class="icon-twitter">
                    <img src="{{ url('/images/icons/icon-twitter.png') }}" alt="">
                </a>
            </li>
            <li>
                <a href="#" title="Instagram" rel="me" target="_blank" class="icon-twitter">
                    <img src="{{ url('/images/icons/icon-facebook-circular.png') }}" alt="">
                </a>
            </li>
            <li>
                <a href="#" title="Instagram" rel="me" target="_blank" class="icon-twitter">
                    <img src="{{ url('/images/icons/icon-linkedin.png') }}" alt="">
                </a>
            </li>
            <li>
                <a href="#" title="Instagram" rel="me" target="_blank" class="icon-twitter">
                    <img src="{{ url('/images/icons/icon-discord.png') }}" alt="">
                </a>
            </li>
        </ul>
    </div>
    <div class="col m4 s12">
        <a href="{{ url('/') }}" class="logo center">
            <img src="{{ url('/images/logo.png') }}" alt="">
        </a>
    </div>
    <div class="col m4 s12">
        <p class="copyright-text">
            Copyright © 2022 Automata. All Rights Reserved. Terms of use Privacy
        </p>
        <p class="copyright-desc-text">
            This site protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply
        </p>
    </div>
    <img class="img_1" src="{{ url('images/automata_2.png') }}" alt="">    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="{{ url('/js/pages/main.js') }}"></script>

@yield('pagejs')