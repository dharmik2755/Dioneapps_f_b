@include('Admin/header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Data table </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data table</li>
                </ol>
                <ol class="breadcrumb">

                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="text-end">
                    <a href="{{ route('features.create') }}">
                        <button type="button" class="btn btn-outline-info btn-fw">Add </button>
                    </a>
                </div>
                <h4 class="card-title">Data table</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Services name</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Sub Title </th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($features_data as $dt)
                                        <tr>
                                            <td>{{ $dt->id }}</td>
                                            <td>
                                                @foreach ($show_specializ as $ss)
                                                    <?php
                                                    if ($dt->id == $ss->id) { ?>
                                                    {{ $ss->development_name }}
                                                    <?php } ?>
                                                @endforeach
                                            </td>
                                            <td>
                                                <img src="{{ asset('upload/' . $dt->image) }}" alt="features image"
                                                    height="200" width="200">
                                            </td>
                                            <td>{{ $dt->title }}</td>
                                            <td>
                                                <ul>
                                                    <?php $loop_sub_title = explode(',',$dt->sub_title); 
                                                        for ($i=0; $i < count($loop_sub_title); $i++) { ?>
                                                    <li>{{ $loop_sub_title[$i] }}</li>
                                                    <?php } ?>
                                                </ul>
                                            </td>
                                            <td>
                                                <input data-id="{{ $dt->id }}" class="toggle-class"type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive" data-size="mini"
                                                    {{ $dt->status ? 'checked' : '' }}>
                                            </td>
                                            <td>
                                                {{-- edit link --}}
                                                <a href="{{ url('/edit-features-data/' . $dt->id) }}">
                                                    <button class="btn btn-outline-primary btn-sm">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                {{-- delete link --}}
                                                <a href="{{ url('/delete-features-data/' . $dt->id) }}">
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
    <!-- content-wrapper ends -->
    @include('Admin/footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                //   alert();
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');
                console.log(status);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/stutus-features-data',
                    data: {
                        'status': status,
                        'id': id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
