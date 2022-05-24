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
                        <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            <fieldset>
                                <div class="form-group col-2 ">
                                    <label for="firstname">Title</label>
                                    <input id="title" class="form-control" name="title" type="text"
                                        placeholder="Title">
                                </div>
                                <div class="form-group col-sm-4 ">
                                    <label for="firstname">Sub Title</label>
                                    <input id="sub_title" class="form-control" name="sub_title" type="text"
                                        placeholder="Sub Title">
                                </div>

                                <div class="row">
                                    <div class="form-group col-3 ">
                                        <label for="firstname">Stages Title 1</label>
                                        <input id="stages1" class="form-control" name="stages1" type="text"
                                            placeholder="stages Title">
                                    </div>
                                    <div class="form-group col-3 ">
                                        <label for="firstname">Stages Title 2</label>
                                        <input id="stages2" class="form-control" name="stages2" type="text"
                                            placeholder="stages Title">
                                    </div>
                                    <div class="form-group col-3 ">
                                        <label for="firstname">Stages Title 3</label>
                                        <input id="stages3" class="form-control" name="stages3" type="text"
                                            placeholder="stages Title">
                                    </div>
                                    <div class="form-group col-3 ">
                                        <label for="firstname">Stages Title 4</label>
                                        <input id="stages4" class="form-control" name="stages4" type="text"
                                            placeholder="stages Title">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-3">
                                        <label for="lastname">Description 1</label>
                                        <input id="description1" class="form-control" name="description1" type="text"
                                            placeholder="Description">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="lastname">Description 2</label>
                                        <input id="description2" class="form-control" name="description2" type="text"
                                            placeholder="Description">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="lastname">Description 3</label>
                                        <input id="description3" class="form-control" name="description3" type="text"
                                            placeholder="Description">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="lastname">Description 4</label>
                                        <input id="description4" class="form-control" name="description4" type="text"
                                            placeholder="Description">
                                    </div>
                                </div>
                                <input class="btn btn-primary" type="submit" name="save" value="Submit">
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
        jQuery('#frm').validate({
            rules: {
                title: {
                    required: true,
                    maxlength: 50
                },
                sub_title: {
                    required: true,
                    maxlength: 500
                },
                stages1: {
                    required: true,
                    maxlength: 30
                },
                stages2: {
                    required: true,
                    maxlength: 30
                },
                stages3: {
                    required: true,
                    maxlength: 30
                },
                stages4: {
                    required: true,
                    maxlength: 30
                },
                description1: {
                    required: true,
                    maxlength: 200
                },
                description2: {
                    required: true,
                    maxlength: 200
                },
                description3: {
                    required: true,
                    maxlength: 200
                },
                description4: {
                    required: true,
                    maxlength: 200
                },
            },
            messages: {
                title: {
                    required: "Please enter Title",
                    maxlength: "Title must be 50 char long"
                },
                sub_title: {
                    required: "please Enter Description",
                    maxlength: "Description must be 500 char long"
                },
                stages1: {
                    required: "please enter Sub Title 1",
                    maxlength: "Sub Title must be 30 char long"
                },
                stages2: {
                    required: "please enter Sub Title 2",
                    maxlength: "Sub Title must be 30 char long"
                },
                stages3: {
                    required: "please enter Sub Title 3",
                    maxlength: "Sub Title must be 30 char long"
                },
                stages4: {
                    required: "please enter Sub Title 4",
                    maxlength: "Sub Title must be 30 char long"
                },
                description1: {
                    required: "please enter Sub Title 1",
                    maxlength: "Sub Title must be 200 char long"
                },
                description2: {
                    required: "please enter Sub Title 2",
                    maxlength: "Sub Title must be 200 char long"
                },
                description3: {
                    required: "please enter Sub Title 3",
                    maxlength: "Sub Title must be 200 char long"
                },
                description4: {
                    required: "please enter Sub Title 4",
                    maxlength: "Sub Title must be 200 char long"
                },

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
