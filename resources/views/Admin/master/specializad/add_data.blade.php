{{-- @include('Admin.header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Development Specializad Name </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Validation</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card col-5">
                    <div class="card-body">
                        <h4 class="card-title">Add data</h4>
                        <form class="cmxform" id="frm" method="POST" enctype="multipart/form-data">
                            @csrf
                            <fieldset>
                                <div class="form-group ">
                                    <label for="firstname">Development Name</label>
                                    <input id="development_name" class="form-control" name="development_name" type="text"
                                        placeholder="development name">
                                    <span class="text-danger" class="error" id="error_development_name"
                                        style="color: red"></span>
                                </div>
                                <div class="text-start">
                                    <input class="btn btn-primary" type="button" id="add" name="add"
                                        value="Submit">
                                    {{-- <a href="{{ route('specializ_id.view') }}">
                                        <button type="button" class="btn btn-inverse-dark ">cancel</button>
                                    </a> --}}
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Admin.footer') --}}
    {{-- <script>
    // ajax data insert
    $(document).on('click', '#add', function() {
        var development_name = $('#development_name').val();
        if (development_name == "") {
            $('#error_development_name').html('enter value');
        } else {
            $('#error_development_name').html('');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/insert-specializ_id-data',
                data: {
                    'development_name': development_name
                },

                success: function(data) {
                    $('#development_name').val('');
                    window.location.replace('/view-specializ_id-data');
                }

            });
        }
    });
    </script> --}}
