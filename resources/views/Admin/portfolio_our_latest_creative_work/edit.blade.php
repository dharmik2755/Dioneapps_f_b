@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Home Page Slider </h3>
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
                        <h4 class="card-title">Edit data</h4>
                        @foreach ($portfolio_latest_works as $dt)
                            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label>Services</label>
                                        <select class="js-example-basic-single" style="width:100%" name="special_id">
                                            <option value="" selected disabled> -- please select --
                                            </option>
                                            @foreach ($specializ_id as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $dt->special_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->development_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group ">
                                        <label for="firstname">Title</label>
                                        <input id="firstname" class="form-control" name="title" type="text"
                                            placeholder="Title" value="{{ $dt->title }}">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>Colour Image</label>
                                            <div class="col-6">
                                                <input type="file" id="color_image"
                                                    class="form-control file-upload-info" style="width: 100%"
                                                    name="color_image" placeholder="Upload Image"><br>
                                            </div>
                                            <div class="col-6">
                                                <img id="previewHolder" src="{{ URL('upload/' . $dt->color_image) }}"
                                                    alt="Uploaded Image" width="200px" height="200px" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>Black and White Image</label>
                                            <div class="col-6">
                                                <input type="file" id="black_image"
                                                    class="form-control file-upload-info" style="width: 100%"
                                                    name="black_image" placeholder="Upload Image"><br>
                                            </div>
                                            <div class="col-6">
                                                <img id="previewHolder2" src="{{ URL('upload/' . $dt->black_image) }}"
                                                    alt="Uploaded Image" width="200px" height="200px" />
                                            </div>
                                        </div>
                                    </div>
                                    <input class="btn btn-primary" type="submit" name="edit" value="Update">
                                    <a href="{{ route('Latest-Work.view') }}">
                                        <button type="button" class="btn btn-inverse-dark ">cancel</button>
                                    </a>
                                </fieldset>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- end of the page --}}

    @include('Admin/footer')

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
        $("#color_image").change(function() {
            readURL(this);
        });

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewHolder2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                alert('select a file to see preview');
                $('#previewHolder2').attr('src', '');
            }
        }
        $("#black_image").change(function() {
            readURL2(this);
        });
        // end
    </script>
