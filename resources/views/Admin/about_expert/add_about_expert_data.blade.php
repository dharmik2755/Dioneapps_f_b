@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Add About Expert Data </h3>
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
                                    <textarea name="description" id="editor" class="form-control" cols="30" rows="30"></textarea>
                                </div>
                                {{-- add --}}
                                <div class="form-group">
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
                                </div>

                                <div class="text-start">
                                    <input class="btn btn-primary" type="submit" name="add" value="Submit">
                                    <a href="{{ route('about.expert.view') }}">
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


        // start
        jQuery('#frm').validate({
            rules: {
                title: {
                    required: true,
                    maxlength: 50
                },
                description: {
                    required: true,
                    maxlength: 1000
                },
                'sub_title[]': {
                    required: true,
                    maxlength: 2000
                },

            },
            messages: {
                title: {
                    required: "Please enter Title",
                    maxlength: "Title must be 50 char long"
                },
                description: {
                    required: "please Enter Description",
                    maxlength: "Description must be 1000 char long"
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
