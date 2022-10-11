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
                                        placeholder="Sub Title">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Description</label>
                                    <input id="description" class="form-control" name="des" type="text"
                                        placeholder="Description">
                                </div>
                                <div class="form-group ">
                                    <label for="firstname">IOS</label>
                                    <input id="ios" class="form-control" name="ios" type="text"
                                        placeholder="IOS Title">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">IOS Description</label>
                                    <input id="ios_description" class="form-control" name="ios_des" type="text"
                                        placeholder=" IOS Description">
                                </div>
                                <div class="form-group ">
                                    <label for="firstname">Android</label>
                                    <input id="Android" class="form-control" name="android" type="text"
                                        placeholder="Android Title">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Android Description</label>
                                    <input id="Android_description" class="form-control" name="android_des"
                                        type="text" placeholder="Android Description">
                                </div>
                                <div class="text-start">
                                    <input class="btn btn-primary" type="submit" name="add" value="Submit">
                                    <a href="{{ route('web-title.view') }}">
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
                    maxlength: 500
                },
                des: {
                    required: true,
                    maxlength: 2000
                }
                ios: {
                    required: true,
                    maxlength: 500
                }
                ios_des: {
                    required: true,
                    maxlength: 2000
                }
                android: {
                    required: true,
                    maxlength: 500
                }
                android_des: {
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
                des: {
                    required: "Please enter Description",
                    maxlenght: 'Description must be 2000 char long'
                }
                ios: {
                    required: "Please enter ios title",
                    maxlength: 'Description must be 500 char long'
                }
                ios_des: {
                    required: "Please enter ios Description",
                    maxlength: 'Description must be 200 char long'
                }
                android: {
                    required: "Please enter android title",
                    maxlength: 'Description must be 500 char long'
                }
                android_des: {
                    required: "Please enter android Description",
                    maxlength: 'Description must be 2000 char long'
                }

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
