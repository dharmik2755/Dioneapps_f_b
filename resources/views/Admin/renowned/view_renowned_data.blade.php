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
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="text-end">
                    <a href="{{ route('renowned.create') }}">
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
                                        <th>title</th>
                                        <th>description</th>
                                        <th>sub_title</th>
                                        <th>sub_description</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($renowned as $dt)
                                        <tr>
                                            <td>{{ $dt->id }}</td>
                                            <td>{{ $dt->title }}</td>
                                            <td>{{ $dt->description }}</td>
                                            <td>
                                                <ul>
                                                    <?php $loop_sub_title = explode(' | ',$dt->sub_title);
                                                    for ($i=0; $i < count($loop_sub_title); $i++) { ?>
                                                    <li>
                                                        {{ $loop_sub_title[$i] }}
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    <?php $loop_sub_des = explode(' | ',$dt->sub_description);
                                                    for ($i=0; $i < count($loop_sub_des); $i++) { ?>
                                                    <li>
                                                        {{ $loop_sub_des[$i] }}
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </td>
                                            <td>
                                                <input data-id="{{ $dt->id }}" class="toggle-class"
                                                    type="checkbox" data-onstyle="success" data-offstyle="danger"
                                                    data-toggle="toggle" data-on="Active" data-off="InActive"
                                                    {{ $dt->status ? 'checked' : '' }}>
                                            </td>
                                            <td>
                                                {{-- edit link --}}
                                                <a href="{{ url('/edit-renowned-data/' . $dt->id) }}">
                                                    <button class="btn btn-outline-primary">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                {{-- delete link --}}
                                                <a href="{{ url('/delete-renowned-data/' . $dt->id) }}">
                                                    <button class="btn btn-outline-danger">
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
                    url: '/stutus-renowned-data',
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
