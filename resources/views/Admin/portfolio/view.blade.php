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
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="text-end">
                    <a href="{{ route('portfolio.create') }}">
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
                                        <th>Id</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>services type</th>
                                        <th>Application Link</th>
                                        <th>web Link</th>
                                        <th>Graphics Link</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($portfolio as $dt)
                                        <tr>
                                            <td>{{ $dt->id }}</td>
                                            <td>
                                                <input data-id="{{ $dt->id }}"
                                                    class="toggle-class m-3" type="checkbox" data-onstyle="success"
                                                    data-offstyle="danger" data-size="mini" data-toggle="toggle" data-on="Active"
                                                    data-off="InActive" {{ $dt->status ? 'checked' : '' }}>
                                            </td>
                                            <td style="white-space: nowrap;" >
                                                <a href="{{ url('/edit-portfolio-data/'.$dt->id) }}">
                                                    <button class="btn btn-outline-primary btn-sm">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ url('/delete-portfolio-data/'.$dt->id) }}">
                                                    <button class="btn btn-outline-danger btn-sm ">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td style="max-width: 115px; ">
                                                <img src="{{ URL('upload/' . $dt->image) }}"
                                                    style="height:100px; width:100px" />
                                            </td>
                                            <td style="width: 7vw;">{{ $dt->title }}</td>
                                            <td style="max-width: 190px; min-width: 100px;" >{{ $dt->description }}</td>
                                            <td>{{ $dt->service_type }}</td>
                                            <td style="max-width: 115px;">
                                                <ul>
                                                    <li><a href="{{$dt->playstore_link}}">
                                                        {{ $dt->playstore_link }}<br>
                                                    </a></li>
                                                    <li>
                                                        <a href="{{$dt->appstore_link}}">
                                                            {{ $dt->appstore_link }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul style="max-width: 115px;">
                                                    <li>
                                                        <a href="{{ $dt->web_link }}">
                                                            {{ $dt->web_link }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        {{ $dt->graphic }}
                                                    </li>
                                                </ul>
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
    @include('Admin.footer')
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
                    url: '/stutus-portfolio-data',
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
