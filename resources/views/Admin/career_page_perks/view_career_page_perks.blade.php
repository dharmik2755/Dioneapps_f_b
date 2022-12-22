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
                    <a href="{{ route('career-perks.create') }}">
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
                                        <th>Description</th>
                                        <th>Image </th>
                                        <th>Sub Title </th>
                                        <th>Sub Description </th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        {{-- <th>Delete</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($career_page_perkss as $dt)
                                        <tr>
                                            <td>{{ $dt->id }}</td>
                                            <td style="max-width: 100px">{{ $dt->title }}</td>
                                            <td style="max-width: 100px">{{ $dt->description }}</td>
                                            <td style="max-width: 100px">
                                             <?php
                                              $i=0; 
                                               foreach (explode('|||', $dt->image) as $picture) 
                                                {  ?>
                                                      <img src="{{ asset('upload/'.$picture) }}" style="height:60px; width:60px"/>
                                            <?php $i++; } ?>
                                            </td>    
                                            <td style="max-width: 100px">
                                                <ul>
                                                    <?php 
                                                         $loop_sub_title = explode('|||', $dt->sub_title);
                                                        for ($i=0; $i<count($loop_sub_title); $i++) 
                                                        { ?>
                                                            <li>{{ $loop_sub_title[$i] }}</li><br>
                                                    <?php } ?>
                                                </ul>
                                            </td>
                                            <td style="max-width: 100px">
                                                <ul>
                                                    <?php 
                                                         $loop_sub_description = explode('|||', $dt->sub_description);
                                                        for ($i=0; $i<count($loop_sub_description); $i++) 
                                                        { ?>
                                                            <li>{{ $loop_sub_description[$i] }}</li><br>
                                                    <?php } ?>
                                                </ul>
                                            </td>
                                            
                                            <td style="max-width: 100px">
                                                <input data-id="{{$dt->id}}" class="toggle-class"type="checkbox" data-size="mini" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{$dt->status ? 'checked' : '' }}>
                                            </td>
                                            <td  style="max-width: 70px">
                                                {{-- edit link --}}
                                                <a href="{{ url('/edit-career-page-perks-data/' . $dt->id) }}">
                                                    <button class="btn btn-outline-primary btn-sm">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a><br><br><br><br><br><br><br>
                                            {{-- </td>
                                            <td style="max-width: 100px"> --}}
                                                {{-- delete link --}}
                                                <a href="{{ url('/delete-career-page-perks-data/'. $dt->id) }}">
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
                  url: '/stutus-career-page-perks-data',
                  data: {'status': status, 'id': id},
                      success: function(data)
                      {
                        console.log(data.success)
                      }
                });
      })
    })
  </script>