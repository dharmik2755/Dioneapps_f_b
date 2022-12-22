@include('Admin.header')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Data table </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data table</li>
                </ol>
                {{-- <ol class="breadcrumb">
                    <a href="{{ url('Add-home-slider') }}">
                        <button type="button" class="btn btn-outline-info btn-fw">Add Home Slider</button>
                    </a>
                </ol> --}}
            </nav>
        </div>
        <div class="row">
            <div class="card col-5">
                <div class="card-body">
                    <h4 class="card-title">Add data</h4>
                    <form class="cmxform" id="frm" method="POST" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="form-group ">
                                <label for="firstname">Development Name</label>
                                <input id="development_name" class="form-control" name="development_name" type="text" placeholder="development name">
                                <span class="text-danger" class="error" 
                                    style="color: red"></span>
                            </div>
                            <div class="text-start">
                                <input class="btn btn-primary" type="submit"  name="add"
                                    value="Submit">
                                {{-- <a href="{{ route('specializ_id.view') }}">
                                    <button type="button" class="btn btn-inverse-dark ">cancel</button>
                                </a> --}}
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="card col-7">
                <div class="card-body">
                    <div class="text-end">
                        {{-- <a href="{{ route('specializ_id.create') }}">
                            <button type="button" class="btn btn-outline-info btn-fw">Add </button>
                        </a> --}}
                    </div>
                    <h4 class="card-title">Data table</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>development_name</th>
                                            <th>Status</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($specializ_show as $dt)
                                            <tr>
                                                <td>{{ $dt->id }}</td>
                                                <td>{{ $dt->development_name }}</td>
                                                <td>
                                                    <input data-id="{{ $dt->id }}"
                                                        class="toggle-class"type="checkbox" data-size="mini" data-onstyle="success"
                                                        data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                                        data-off="InActive" {{ $dt->status ? 'checked' : '' }}>
                                                </td>
                                                <td>
                                                    {{-- delete link --}}
                                                    <a href="{{ url('/delete-specializ_id-data/' . $dt->id) }}">
                                                        <button class="btn btn-outline-danger btn-sm">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    @include('Admin.footer')
    <script>
        // validation start
        // jQuery('#frm').validate({
        //     rules: {
        //         development_name: {
        //             required: true,
        //             maxlength: 50
        //         },

        //     },
        //     messages: {
        //         development_name: {
        //             required: "Please enter Title",
        //             maxlength: "Title must be 50 char long"
        //         },

        //     },
        //     submitHandler: function(form) {
        //         form.submit();
        //     }
        // });
        // end

       
    </script>

    <!-- for status ajex cdn file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        // active and Inactive start
        $(function() {
            $('.toggle-class').change(function() {
                //   alert();
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');
                console.log(status);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/stutus-specializ_id-data',
                    data: {
                        'status': status,
                        'id': id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            });
        });
        // end
    </script>
