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
                    <a href="{{ route('team-management.create') }}">
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
                                        {{-- <th>Edit</th> --}}
                                        <th>Action</th>
                                        <th>Image</th>
                                        <th>Index</th>
                                        <th>Team member</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Position</th>
                                        <th>Education</th>
                                        <th>Birth</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($team_management as $dt)
                                        <tr>
                                            <td>{{ $dt->id }}</td>
                                            <td>
                                                <input data-id="{{$dt->id}}" class="toggle-class" data-size="mini" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{$dt->status ? 'checked' : '' }}>
                                             </td>
                                            <td style="white-space: nowrap;"> 
                                                {{-- edit link --}}
                                                <a href="{{ url('/edit-team-management-data/' . $dt->id) }}">
                                                    <button class="btn btn-outline-primary btn-sm">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                            {{-- </td>
                                            <td> --}}
                                                {{-- delete link --}}
                                                <a href="{{ url('/delete-team-management-data/'. $dt->id) }}">
                                                    <button class="btn btn-outline-danger btn-sm">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                <img height="200px" width="200px" src="{{ asset('upload/' . $dt->image) }}" alt="">
                                            </td>
                                            <td>{{ $dt->index }}</td>
                                            <td>{{ $dt->team_member }}</td>
                                            <td>{{ $dt->firstname }} {{ $dt->lastname }}</td>
                                            <td>{{ $dt->email  }}</td>
                                            <td>{{ $dt->number }}</td>
                                            <td>{{ $dt->position }}</td>
                                            <td>{{ $dt->education }}</td>
                                            <td>{{ $dt->birthdate }}</td>
                                            <td>{{ $dt->status_id }}</td>
                                            
                                            
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
    <!-- for status ajex cdn file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
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
                      url: '/stutus-team-management-data',
                      data: {'status': status, 'id': id},
                          success: function(data)
                          {
                            console.log(data.success)
                          }
                    });
          })
        })
      </script>
