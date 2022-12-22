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
                    <a href="{{ route('company-projects.create') }}">
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
                                        <th>Services name</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Home Page Image</th>
                                        <th>Development Page Image</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($company_project as $dt)
                                        <tr>
                                            <td>{{ $dt->id }}</td>
                                            <td>
                                                @foreach ($specializ_id as $ss)
                                                    <?php
                                                    if ($dt->special_id == $ss->id) { ?>
                                                    {{ $ss->development_name }}
                                                    <?php } ?>
                                                @endforeach
                                            </td>
                                            <td>{{ $dt->title }}</td>
                                            <td>{{ $dt->sub_title }}</td>
                                            <td>{{ $dt->description }}</td>
                                            <td style="max-width: 100px">
                                                <?php
                                                 $i=0; 
                                                  foreach (explode(',', $dt->image) as $picture) 
                                                   {  ?>
                                                         <img src="{{ asset('upload/'.$picture) }}" style="height:100px; width:100px"/>
                                                    <?php 
                                                    $i++; 
                                                    } ?>
                                            </td>
                                            <td>
                                                <input data-id="{{ $dt->id }}" class="toggle-class" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-size="mini" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive"
                                                    {{ $dt->status ? 'checked' : '' }}>
                                            </td>
                                            <td>
                                                {{-- edit link --}}
                                                <a href="{{ url('/edit-company-projects-data/' . $dt->id) }}">
                                                    <button class="btn btn-outline-primary btn-sm">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                {{-- delete link --}}
                                                <a href="{{ url('/delete-company-projects-data/' . $dt->id) }}">
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
                    url: '/stutus-company-projects-data',
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
