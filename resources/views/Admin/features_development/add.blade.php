@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Add features Data </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Validation</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add data</h4>
                        <form class="cmxform" id="frm" method="POST" enctype="multipart/form-data">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Services</label>
                                            <select class="js-example-basic-single" style="width:100%"
                                                name="special_id">
                                                <option value="" selected disabled> -- please select -- </option>
                                                @foreach ($show_specializ as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->development_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Features development Page Image</label>
                                            <div class="input-group col-xs-12">
                                                <input type="file" id="image" name="image"
                                                    class="form-control file-upload-info" placeholder="Upload Image"
                                                    style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <img id="show_image" alt="Uploaded Image" width="200px" height="200px" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname">Title</label>
                                    <input id="title" class="form-control" name="title" type="text"
                                        placeholder="Title">
                                </div>

                                {{-- add --}}
                                <label for="lastname">Sub Title</label>
                                <div id="inputFormRow">
                                    <div class="d-flex mb-2">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <input type="text" name="sub_title[]"
                                                class="form-control form-control-sm" placeholder="Enter Sub Title">
                                        </div>
                                        <button id="addRow" type="button"
                                            class="btn btn-info btn-sm icon-btn ms-2 mb-2 ">
                                            Add
                                        </button>
                                    </div>
                                </div>

                                <div id="newRow"></div>


                                <div class="text-start">
                                    <input class="btn btn-primary" type="submit" name="add" value="Submit">
                                    <a href="{{ route('features.view') }}">
                                        <button type="button" class="btn btn-inverse-dark ">cancel</button>
                                    </a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- end of the page --}}
    @include('Admin.footer')
    <script>
        // start 
        //  start 
        $('#addRow').click(function() {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="d-flex mb-2">';
            html += '<div class="input-group mb-2 mr-sm-2 mb-sm-0">';
            html +=
                '<input type="text" name="sub_title[]" class="form-control form-control-sm" placeholder="Enter Sub Title">';
            html += '</div>';
            html +=
                '<button id="removeRow" type="button" class="btn btn-danger btn-sm icon-btn ms-2"><i class="icon-trash"></i></button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
        });

        // image 
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                alert('select a file to see preview');
                $('#show_image').attr('src', '');
            }
        }

        $("#image").change(function() {
            readURL(this);
        });

        // start
        jQuery('#frm').validate({
            rules: {
                image: 'required',
                title: {
                    required: true,
                    maxlength: 50
                },
                'sub_title[]': {
                    required: true,
                    maxlength: 2000
                },

            },
            messages: {
                image: "Please select image",
                title: {
                    required: "Please enter Title",
                    maxlength: "Title must be 50 char long"
                },
                'sub_title[]': {
                    required: "please enter Sub Title ",
                    maxlength: "Sub Title must be 2000 char long"
                },

            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        // CKediter 
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
