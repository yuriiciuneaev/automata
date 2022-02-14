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
            @isset($data)
                <thead>
                    <tr>
                        {{-- <th>Name</th> --}}
                        {{-- <th>Desciption</th> --}}
                        <th>Image</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody id="myTbody">
                    @foreach ($data as $reseller)
                        <tr data-id="{{ $reseller->id }}">
                            {{-- <td class="name" data-name="{{ $reseller->name }}">{{ $reseller->name }}</td> --}}
                            <td class="filename"><a href="{{ url('/images/Resellers/' . $reseller->image) }}"
                                    target="_blank">{{ $reseller->image }}</a></td>
                            <td class="link" data-link="{{ $reseller->link }}"><a
                                    href="{{ $reseller->link }}" target="_blank">{{ $reseller->link }}</a></td>
                            <td>
                                <a href="#updateModal" class="black-text modal-trigger" id="updateProduct"><i
                                        class="fas fa-edit"></i></a>
                                <a href="javascript:void(0)" class="black-text" id="deleteProduct"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    {{ $data->links() }}
                @endisset
            </tbody>
        </table>

    </div>

    <!-- Modal Structure -->

    <div id="addModal" class="modal bottom-sheet">
        <div class="modal-content">
            <h4>Add Product</h4>
            <div class="row">
                <form id="uploadForm" action="{{ route('resellers.post') }}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" name="link" value="">
                            <label for="link">URL</label>
                        </div>
                    </div>
                    {{-- <div class="row mb0">
                        <div class="input-field col m6 s12">
                            <input type="text" name="name" value="">
                            <label for="name">Name</label>
                        </div>
                    </div> --}}
                    {{-- <div class="row mb0">
                        <div class="input-field col m6 s12">
                            <textarea class="p10" placeholder="Description" name="description" rows="10"></textarea>
                        </div>
                    </div> --}}
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

    <div id="updateModal" class="modal bottom-sheet">
        <div class="modal-content">
            <h4>Update Product</h4>
            <div class="row">
                <form id="uploadForm" action="{{ route('resellers.put') }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row mb0">
                        <input type="hidden" id="product_id" name="product_id" value="">
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
                            <input id="link" type="text" name="edit_link" value="">
                            <label id="lbl_link" for="link">Link</label>
                        </div>
                    </div>
                    {{-- <div class="row mb0">
                        <div class="input-field col m6 s12">
                            <input id="name" type="text" name="edit_name" value="">
                            <label id="lbl_name" for="name">Name</label>
                        </div>
                    </div> --}}
                    {{-- <div class="row mb0">
                        <div class="input-field col m6 s12">
                            <textarea class="p10" placeholder="Description" name="edit_description" id="description"
                                rows="10"></textarea>
                        </div>
                    </div> --}}
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
    <script src="{{ asset('js/pages/admin/buy-now.js') }}"></script>
@stop
