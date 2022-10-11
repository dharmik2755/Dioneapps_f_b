@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Development data Add </h3>
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
                                        @foreach ($show_specializ_id as $item)
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
                                <div class="form-group">
                                    <label for="lastname">Description</label>
                                    <input id="description" class="form-control" name="description" type="text"
                                        placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Home Page Image</label>
                                            <div class="input-group col-xs-12">
                                                <input type="file" id="image1" name="image1"
                                                    class="form-control file-upload-info" placeholder="Upload Image"
                                                    style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <img id="show_image_1" alt="Uploaded Image" width="200px" height="200px" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Development Page Image</label>
                                            <div class="input-group col-xs-12">
                                                <input type="file" id="image2" name="image2"
                                                    class="form-control file-upload-info" placeholder="Upload Image"
                                                    style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <img id="show_image_2" alt="Uploaded Image" width="200px" height="200px" />
                                        </div>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <input class="btn btn-primary" type="submit" name="save" value="Submit">
                                    <a href="{{ route('development.view') }}">
                                        <button type="button" class="btn btn-inverse-dark btn-fw">Cancel</button>
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
    @include('Admin/footer')
    <script>
        // image1
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                console.log(reader);
                reader.onload = function(e) {
                    $('#show_image_1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                alert('select a file to see preview');
                $('#show_image_1').attr('src', '');

            }
        }
        $("#image1").change(function() {
            readURL(this);
        });

        // image 2
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#show_image_2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                alert('select a file to see preview');
                $('#show_image_2').attr('src', '');
            }
        }
        
        $("#image2").change(function() {
            readURL2(this);
        });


        // validation
        jQuery('#frm').validate({
            rules: {
                title: {
                    required: true,
                    maxlength: 50
                },
                description: {
                    required: true,
                    maxlength: 500
                },
                image1: 'required',
                image2: 'required',
                special_id: 'required',
            },
            messages: {
                title: {
                    required: "Please enter Title",
                    maxlength: "Title must be 50 char long"
                },
                description: {
                    required: "please Enter Description",
                    maxlength: "Description must be 500 char long"
                },
                image1: "please select Home Page Image",
                image2: "please select Development Page Image",
                special_id: "please select ",

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
