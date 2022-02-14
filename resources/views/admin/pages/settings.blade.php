@extends('admin.layouts.app')

@section('content')

    <div class="mt5 w-90 mx-auto">
        @isset($status)
            <div class="message {{ $status == 1 ? 'green' : 'red' }}">
                <h6 class="white-text">{{ $message }}</h6>
            </div>
        @endisset
        @isset($data['meta_tags'])
            <div class="row">
                <div class="col s12">
                    <h4 class="mb3">Meta Tags</h4>
                    <ul class="collapsible">
                        @foreach ($data['meta_tags'] as $meta_tag)
                            <li>
                                <div class="collapsible-header"><i
                                        class="material-icons">chevron_right</i>{{ $meta_tag->page }}</div>
                                <div class="collapsible-body">
                                    <div class="row mb0">
                                        <div class="input-field col s12">
                                            <input class="title" id="meta_page_{{ $meta_tag->id }}" name="meta_page_title" type="text"
                                                value="{{ $meta_tag->page }}">
                                            <label for="meta_page_{{ $meta_tag->id }}">Page Title</label>
                                        </div>
                                    </div>
                                    <div class="row mb0">
                                        <div class="input-field col s12">
                                            <input class="keywords" id="meta_keywords_{{ $meta_tag->id }}" name="meta_keywords" type="text"
                                                value="{{ $meta_tag->keywords }}">
                                            <label for="meta_keywords_{{ $meta_tag->id }}">Meta Keywords (Add keywords separated by
                                                comma)</label>
                                        </div>
                                    </div>
                                    <div class="row mb0">
                                        <div class="input-field col s12">
                                            <input class="meta_description" id="meta_description_{{ $meta_tag->id }}" name="meta_description" type="text"
                                                value="{{ $meta_tag->description }}">
                                            <label for="meta_desciption_{{ $meta_tag->id }}">Meta description</label>
                                        </div>
                                    </div>
                                    <div class="row mb0">
                                        <div class="col s12 m6">
                                            <button data-id="{{ $meta_tag->id }}" id="save"
                                                class="waves-effect waves-green btn">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endisset
    </div>


@endsection

@section('pagejs')
    <script src="{{ asset('js/pages/admin/settings.js') }}"></script>
@stop
