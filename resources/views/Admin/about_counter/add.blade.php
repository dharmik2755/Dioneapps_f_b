@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Add About Data </h3>
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
                                    <label for="firstname">Number</label>
                                    <input id="number" class="form-control" name="number" type="text"
                                        placeholder="number">
                                </div>
                                <div class="form-group ">
                                    <label for="firstname">Title</label>
                                    <input id="title" class="form-control" name="title" type="text"
                                        placeholder="Sub Title">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Description</label>
                                    <input id="description" class="form-control" name="description" type="text" placeholder="Description">
                                </div>
                                <div class="text-start">
                                    <input class="btn btn-primary" type="submit" name="add" value="Submit">
                                    <a href="{{ route('about-counter.view') }}">
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
    @include('Admin/footer')
    <script>
        jQuery('#frm').validate({
            rules: {
                number: {
                    required: true,
                    maxlength: 30
                },
                title: {
                    required: true,
                    maxlength: 100
                },
                description: {
                    required: true,
                    maxlength: 2000
                }

            },
            messages: {
                number: {
                    required: "Please enter Number",
                    maxlength: "Title must be 30 char long"
                },
                title: {
                    required: "please Title",
                    maxlength: "Sub Title must be 100 char long"
                },
                description: {
                    required: "Please enter Description",
                    maxlenght: 'Description must be 200 char long'
                }

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
