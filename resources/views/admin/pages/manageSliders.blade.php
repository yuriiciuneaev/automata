@extends('admin.layouts.app')

@section('content')
    @isset($status)
        <div class="message {{ $status == 1 ? 'green' : 'red' }}">
            <h6 class="white-text">{{ $message }}</h6>
        </div>
    @endisset
    @if ($errors->any())
        <div class="message red">
            @foreach ($errors->all() as $error)
                <h6 class="white-text">{{ $error }}</h6>
            @endforeach
        </div>
    @endif

    <a class="modal-trigger waves-effect waves-light btn right mt3 mr3 btn" href="#addModal"><i
            class="material-icons right">add</i>Add</a>

    <div class="table-container">
        <table class="myTable">
            @isset($sliders)
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody id="myTbody">
                    @foreach ($sliders as $slider)
                        <tr data-id="{{ $slider->id }}" data-desc="{{ $slider->description }}"
                            data-button_text="{{ $slider->button_text }}" data-button_link="{{ $slider->button_link }}">
                            <td class="title" data-title="{{ $slider->title }}">{{ $slider->title }}</td>
                            <td class="filename"><a href="{{ url('/images/sliders/Resized960/' . $slider->image) }}"
                                    target="_blank">{{ $slider->image }}</a></td>
                            <td>
                                <a href="#updateSliderModal" class="black-text modal-trigger" id="updateSlider"><i
                                        class="fas fa-edit"></i></a>
                                <a href="javascript:void(0)" class="black-text" id="deleteSlider"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    {{ $sliders->links() }}
                @endisset
            </tbody>
        </table>

    </div>

    <!-- Modal Structure -->

    <div id="addModal" class="modal bottom-sheet">
        <div class="modal-content">
            <h4>Add Slider</h4>
            <div class="row">
                <form id="uploadForm" action="{{ route('slider.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb0">
                        <div class="file-field input-field col m6 s12">
                            <div class="btn white-text">
                                <span>Upload</span>
                                <input type="file" name="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload Image">
                            </div>
                        </div>
                    </div>
                    <div class="row mb0">
                        <div class="input-field col m6 s12">
                            <input type="text" name="title" value="">
                            <label for="title">Title</label>
                        </div>
                    </div>
                    <div class="row mb0">
                        <div class="input-field col m6 s12">
                            <textarea class="p10" placeholder="Description" name="description" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row mb0">
                        <div class="input-field col m6 s12">
                            <input type="text" name="button_text" value="">
                            <label for="button_text">Button text</label>
                        </div>
                    </div>
                    <div class="row mb0">
                        <div class="input-field col m6 s12">
                            <input type="text" name="button_link" value="">
                            <label for="button_link">Button Link</label>
                        </div>
                    </div>
                    <div class="row mb0">
                        <div class="col s12 m6">
                            <button id="upload" class="waves-effect waves-green btn">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- <div class="modal-footer">
            <a href="#" id="saveProduct" class="modal-close waves-effect waves-green btn">Save</a>
        </div> --}}
    </div>

    <div id="updateSliderModal" class="modal bottom-sheet">
        <div class="modal-content">
            <h4>Update Slider</h4>
            <div class="row">
                <form id="uploadForm" action="{{ route('slider.put') }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row mb0">
                        <input type="hidden" id="slider_id" name="slider_id" value="">
                        <div class="file-field input-field col m6 s12">
                            <div class="btn white-text">
                                <span>Upload</span>
                                <input id="filename" type="file" name="edit_file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload Image">
                            </div>
                        </div>
                    </div>
                    <div class="row mb0">
                        <div class="input-field col m6 s12">
                            <input id="title" type="text" name="edit_title" value="">
                            <label id="lbl_title" for="edit_title">Title</label>
                        </div>
                    </div>
                    <div class="row mb0">
                        <div class="input-field col m6 s12">
                            <textarea class="p10" placeholder="Description" name="edit_description" id="description"
                                rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row mb0">
                        <div class="input-field col m6 s12">
                            <input id="button_text" type="text" name="edit_button_text" value="">
                            <label id="lbl_btn_text" for="button_text">Button text</label>
                        </div>
                    </div>
                    <div class="row mb0">
                        <div class="input-field col m6 s12">
                            <input id="button_link" type="text" name="edit_button_link" value="">
                            <label id="lbl_btn_link" for="button_link">Button Link</label>
                        </div>
                    </div>
                    <div class="row mb0">
                        <div class="col s12 m6">
                            <button id="upload" class="waves-effect waves-green btn">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- <div class="modal-footer">
            <a href="#" id="saveProduct" class="modal-close waves-effect waves-green btn">Save</a>
        </div> --}}
    </div>

@endsection

@section('pagejs')
    <script src="{{ asset('js/pages/admin/sliders.js') }}"></script>
@stop
