@extends('admin.layouts.app')

@section('content')

    <div class="mt5 w-90 mx-auto">
        @isset($status)
            <div class="message {{ $status == 1 ? 'green' : 'red' }}">
                <h6 class="white-text">{{ $message }}</h6>
            </div>
        @endisset
        @isset($contacts)
            <div class="row">
                <form class="col s12" id="variableSettings" action="{{ route('contact.put') }}" method="POST">
                    @method('PUT')
                    @csrf
                    <h4 class="mb3">Manage Contacts</h4>
                        <div class="row mb0">
                            <div class="input-field col s12">
                                <input id="address" name="address" type="text"
                                    class="validate" value="{{ $contacts->address }}">
                                <label for="address">Address</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="contact" name="contact" type="text"
                                    class="validate" value="{{ $contacts->contact }}">
                                <label for="contact">Contact Information</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="facebook" name="facebook" type="text"
                                    class="validate" value="{{ $contacts->facebook }}">
                                <label for="facebook">Facebook</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="twitter" name="twitter" type="text"
                                    class="validate" value="{{ $contacts->twitter }}">
                                <label for="twitter">Twitter</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="instagram" name="instagram" type="text"
                                    class="validate" value="{{ $contacts->instagram }}">
                                <label for="instagram">Instagram</label>
                            </div>
                        </div>
                    <div class="row mb0">
                        <div class="col s12 m6">
                            <button id="save" class="waves-effect waves-green btn">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        @endisset
    </div>


@endsection

@section('pagejs')
    <script src="{{ asset('js/pages/admin/settings.js') }}"></script>
@stop
