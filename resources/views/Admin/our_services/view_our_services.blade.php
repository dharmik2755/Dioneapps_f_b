@include('Admin/header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Our Services </h3>
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
                    <a href="{{ route('our-services.create') }}">
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
                                        <th>Title</th>
                                        {{-- <th>Profession</th>
                                        <th>infomation about Clients</th> --}}
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($our_services as $dt)
                                        <tr>
                                            <td>{{ $dt->id }}</td>
                                            <td>{{ $dt->title }}</td>
                                            {{-- <td>{{ $dt->profession }}</td>
                                            <td>{{ $dt->information }}</td> --}}
                                            <td>{{ $dt->description }}</td>
                                            <td>
                                                <img height="200px" width="200px" src="{{ asset('upload/' . $dt->image) }}"
                                                    alt="">
                                            </td>
                                            <td>
                                                <input data-id="{{$dt->id}}"  class="toggle-class"  type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{$dt->status ? 'checked' : '' }}>
                                            </td>
                                            <td>
                                                {{-- edit link --}}
                                                <a href="{{ url('/edit-our-services-data/' . $dt->id) }}">
                                                    <button class="btn btn-outline-primary">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                {{-- delete link --}}
                                                <a href="{{ url('/delete-our-services-data/'. $dt->id) }}">
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
                  url: '/stutus-our-services-data',
                  data: {'status': status, 'id': id},
                      success: function(data)
                      {
                        console.log(data.success)
                      }
                });
      })
    })
  </script>
