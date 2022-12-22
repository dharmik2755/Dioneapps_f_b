@include('Admin.header')
{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Portfolio projects </h3>
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
                                <div class=" col-6 form-group">
                                    <label>Services</label>
                                    <select class="js-example-basic-single" onchange='changeStatus()' style="width:100%"
                                        id="showdata" name="service_type">
                                        <option value="" selected disabled> -- Please select services -- </option>
                                        <option value="applications">applications</option>
                                        <option value="website">website</option>
                                        <option value="graphics">graphics</option>
                                    </select>
                                </div>

                                <div class="form-group" style="display: none" id="applications_data">
                                    <label>Application</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Link 1</span>
                                        </div>
                                        <input type="text" class="form-control" name="playstore_link"
                                            placeholder="Enter Application">
                                    </div>
                                    <label>Appstore</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Link 2</span>
                                        </div>
                                        <input type="text" class="form-control" name="appstore_link"
                                            placeholder="Enter Appstore">
                                    </div>
                                </div>
                                <div class="form-group" style="display: none" id="website_data">
                                    <label>Web</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Link</span>
                                        </div>
                                        <input type="text" class="form-control" name="web_link"
                                            placeholder="Enter Appstore">
                                    </div>
                                </div>
                                <div class="form-group" style="display: none" id="graphics_data">
                                    <label>Graphics</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="graphics[]"
                                                value="uiux"> Figma
                                            <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="graphics[]"
                                                value="ai"> Ai
                                            <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="graphics[]"
                                                value="ps">Ps
                                            <i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 grid-margin">
                                    <div class="card">
                                        <label>Project Image</label>
                                        <div class="dropify-errors-container">
                                            <ul></ul>
                                        </div>
                                        <input type="file" name="image" class="dropify">
                                        <div class="dropify-preview"><span class="dropify-render"></span>
                                            <div class="dropify-infos">
                                                <div class="dropify-infos-inner">
                                                    <p class="dropify-filename">
                                                        <span class="file-icon"></span>
                                                        <span class="dropify-filename-inner"></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <input class="btn btn-primary" type="submit" name="add" value="Submit">
                                    <a href="{{ route('portfolio.view') }}">
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
                title: {
                    required: true,
                    maxlength: 50
                },
                description: {
                    required: true,
                    maxlength: 500
                },
                service_type: {
                    required: true
                },
                'image': 'required',

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
                service_type: {
                    required: "Please enter services"
                },
                'image': "please enter image",

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
        // end

        // droupdwon list throught show data
        function changeStatus() {
            var status = document.getElementById("showdata");
            if (status.value == "applications") {
                document.getElementById("applications_data").style.display = "inline-block";
                document.getElementById("website_data").style.display = "none";
                document.getElementById("graphics_data").style.display = "none";
            }
            if (status.value == "website") {
                document.getElementById("website_data").style.display = "inline-block";
                document.getElementById("applications_data").style.display = "none";
                document.getElementById("graphics_data").style.display = "none";
            }
            if (status.value == "graphics") {
                document.getElementById("graphics_data").style.display = "inline-block";
                document.getElementById("applications_data").style.display = "none";
                document.getElementById("website_data").style.display = "none";
            }
        }
    </script>
