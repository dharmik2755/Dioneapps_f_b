@include('Admin.header')
{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Company Projects </h3>
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
                                    <label>Services</label>
                                    <select class="js-example-basic-single" style="width:100%" name="special_id">
                                        <option value="" selected disabled> -- please select -- </option>
                                        @foreach ($specializ_id as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->development_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label for="firstname">Title</label>
                                    <input id="title" class="form-control" name="title" type="text"
                                        placeholder="Title">
                                </div>
                                <div class="form-group ">
                                    <label for="firstname">Sub Title</label>
                                    <input id="sub_title" class="form-control" name="sub_title" type="text" placeholder="Sub Title">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Description</label>
                                    <input id="description" class="form-control" name="description" type="text" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label>File upload</label>
                                        <div class="col-6">
                                            <input type="file" id="image" class="form-control file-upload-info"
                                                style="width: 100%" name="image[]" placeholder="Upload Image" multiple><br>
                                        </div>
                                        <div class="col-6">
                                            <img id="previewHolder" alt="Uploaded Image" width="200px"
                                                height="200px" />
                                        </div>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <input class="btn btn-primary" type="submit" name="save" value="Submit">
                                    <a href="{{ route('company-projects.view') }}">
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

    @include('Admin.footer')
    <script>
        // live show image start
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewHolder').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                alert('select a file to see preview');
                $('#previewHolder').attr('src', '');
            }
        }
        $("#image").change(function() {
            readURL(this);
        });
        // end

        // validation start
        jQuery('#frm').validate({
            rules: {
                special_id: {
                    required: true
                },
                title: {
                    required: true,
                    maxlength: 50
                },
                // sub_title: {
                //     required: true,
                //     maxlength: 50
                // },
                description: {
                    required: true,
                    maxlength: 500
                },
                'image[]': 'required',

            },
            messages: {
                special_id: {
                    required: "Please enter Title"
                },
                title: {
                    required: "Please enter Title",
                    maxlength: "Title must be 50 char long"
                },
                // sub_title: {
                //     required: "Please enter Title",
                //     maxlength: "Title must be 50 char long"
                // },
                description: {
                    required: "please Enter Description",
                    maxlength: "Description must be 500 char long"
                },
                'image[]': "please enter image",

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
        // end
    </script>
