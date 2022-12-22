@include('Admin.header')
{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> About page management team </h3>
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
                                {{-- <div class="form-group" >
                                    {{$max_data}}
                                </div> --}}
                                <div class="form-group">
                                    <label for="team member type">Team Member Type</label>
                                    <select class="js-example-basic-single" style="width:100%" id="team_member" name="team_member" >
                                    <option value="" selected disabled> -- Please select services -- </option>
                                    <option value="admin">Admin</option>
                                    <option value="team">Team</option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="firstname">First name</label>
                                            <input id="firstname" class="form-control" name="firstname" type="text" placeholder="Enter first name" >
                                        </div>
                                        <div class="col-6">
                                            <label for="lastname">Last name</label>
                                            <input id="lastname" class="form-control" name="lastname" type="text" placeholder="Enter last name" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="email">Email Id</label>
                                    <input id="email" class="form-control" name="email" type="email" placeholder="Enter email" >
                                </div>
                                <div class="form-group">
                                    <label for="number">Contact No.</label>
                                    <input id="number" class="form-control" name="number" type="number" placeholder="Enter Number">
                                </div>
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input id="position" class="form-control" name="position" type="text" placeholder="Enter Position">
                                </div>
                                <div class="form-group">
                                    <label for="education">Education</label>
                                    <input id="education" class="form-control" name="education" type="text" placeholder="Enter Education">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="birthdate">Birthdate</label>
                                            <input id="birthdate"  class="form-control" name="birthdate" type="date" placeholder="Enter birthdate">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <label>File upload</label>
                                        <div class="col-6">
                                            <input type="file" id="image" class="form-control file-upload-info" style="width: 100%" name="image" placeholder="Upload Image" multiple><br>
                                        </div>
                                        <div class="col-6">
                                            <img id="previewHolder" alt="Uploaded Image" width="200px" height="200px" />
                                        </div>
                                    </div>
                                  </div>
                                <div class="text-start">
                                    <input class="btn btn-primary" type="submit" name="save" value="Submit">
                                    <a href="{{ route('team-management.view') }}">
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
                team_member: {
                    required: true
                },
                firstname: {
                    required: true,
                    maxlength: 50
                },
                lastname: {
                    required: true,
                    maxlength: 50
                },
                email: {
                    required: true,
                },
                position: {
                    required: true,
                    maxlength: 500
                },
                number: {
                    required: true,
                },
                education: {
                    required: true,
                    maxlength: 100
                },
                birthdate: {
                    required: true,
                },
                image: 'required',

            },
            messages: {
                team_member: {
                    required: "Please Select"
                },
                firstname: {
                    required: "Please enter name",
                    maxlength: "Name must be 50 charcter long"
                },
                lastname: {
                    required: "Please enter name",
                    maxlength: "Name must be 50 charcter long"
                },
                email: {
                    required: "Please enter email"
                },
                position: {
                    required: "Please enter position",
                    maxlength: "position must be 50 charcter long"
                },
                number: {
                    required: "Please enter number"
                },
                education: {
                    required: "Please enter education",
                    maxlength: "education must be 100 charcter long"
                },
                birthdate: {
                    required: "Please enter education"
                },
                image: "please enter image",

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
        // end
    </script>
