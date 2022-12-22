@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Update About Expert Data1  </h3>
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
            <h4 class="card-title">Add data</h4>
            @foreach ($career_page_perkss as $dt)
                
            <form class="cmxform" id="frm" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>
                <div class="form-group ">
                  <label for="firstname">Image</label>
                  <?php
                       $i=0; 
                      foreach (explode('|||', $dt->image) as $picture) 
                      {  ?>
                        <img src="{{asset('upload/'.$picture)}}" height="100" width="100"  alt=""><br>
                        <label for="lastname">Edit Image </label>
                        <input id="image" class="form-control" name="image[]" type="file" >
                      <?php $i++; } ?>
                </div>
                <div class="form-group ">
                  <label for="firstname">Title</label>
                  <input id="title" class="form-control" name="title" type="text" placeholder="Title" value="{{$dt->title}}">
                </div>
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="description" class="form-control" name="description" type="text" placeholder="Description" value="{{$dt->description}}">
                </div>
                <div class="form-group">
                  <label for="lastname">Sub Title</label>
                  <?php  $loop_sub_title = explode('|||', $dt->sub_title); 
                      $var = 1;
                      for ($i=0; $i<count($loop_sub_title); $i++) {?>
                  <div id="inputFormRow<?php echo $var; ?>">
                      <div class="d-flex mb-2">
                          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                              <input type="text" name="sub_title[]"
                                  id="sub_title<?php echo $var; ?>"
                                  class="form-control form-control-sm" placeholder="Enter Sub Title"
                                  value="{{ $loop_sub_title[$i] }}">
                          </div>
                          <?php if ($i == 0) { ?>
                          <button id="addRow" type="button"
                              class="btn btn-info btn-sm icon-btn ms-2 mb-2">Add</button>
                          <?php } else {?>
                          <button id="<?php echo $var; ?>" type="button"
                              class="btn btn-danger btn-sm icon-btn ms-2 remove"><i
                                  class="icon-trash"></i></button>
                          <?php }?>
                      </div>
                  </div>
                  <?php
                      $var++;
                  } ?>
                  <div id="newRow"></div>
                </div>
                {{-- <div class="form-group "> --}}
                  <?php 
                        // $loop_sub_description = explode('|||', $dt->sub_description);
                        // for ($i=0; $i<count($loop_sub_description); $i++) 
                        // { 
                          ?> 
                          {{-- <label for="lastname">Sub Title</label>
                          <input id="description" class="form-control" name="sub_description[]" type="text" placeholder="Enter Sub description " value="{{$loop_sub_description[$i]}}"> --}}
                  <?php 
                // }
                 ?>
                {{-- </div> --}}

                <div class="form-group">
                  <label for="lastname">Sub Description</label>
                  <?php  $loop_sub_description = explode('|||', $dt->sub_description); 
                      $var2 = 1;
                      for ($j=0; $j<count($loop_sub_description); $j++) {?>
                  <div id="inputFormRow2<?php echo $var2; ?>">
                      <div class="d-flex mb-2">
                          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                              <input type="text" name="sub_description[]"
                                  id="sub_description<?php echo $var2; ?>"
                                  class="form-control form-control-sm" placeholder="Enter Sub Title"
                                  value="{{ $loop_sub_description[$j] }}">
                          </div>
                          <?php if ($j == 0) { ?>
                          <button id="addRow2" type="button"
                              class="btn btn-info btn-sm icon-btn ms-2 mb-2">Add</button>
                          <?php } else {?>
                          <button id="<?php echo $var2; ?>" type="button"
                              class="btn btn-danger btn-sm icon-btn ms-2 remove2">
                                <i class="icon-trash"></i>
                                </button>
                          <?php }?>
                      </div>
                  </div>
                  <?php
                      $var2++;
                  } ?>
                  <div id="newRow2"></div>
                </div>
                      
                
                <div class="text-start">
                    <input class="btn btn-primary" type="submit" name="edit" value="Update">
                      <a href="{{ route('career-perks.view') }}">
                        <button type="button" class="btn btn-inverse-dark ">cancel</button>
                      </a>
                </div>
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
  // start sub title
  var data = '<?php echo count($loop_sub_title) + 1; ?>';
        $('#addRow').click(function() {
            var html = '';

            html += '<div id="inputFormRow' + data + '">';
            html += '<div class="d-flex mb-2">';
            html += '<div class="input-group mb-2 mr-sm-2 mb-sm-0">';
            html += '<input type="text" name="sub_title[]" id="sub_title' + data +
                '" class="form-control form-control-sm" placeholder="Enter Sub Title" ';
            html += '</div>';
            html += '<button id="' + data +
                '" type="button" class="btn btn-danger btn-sm icon-btn ms-2 remove"><i class="icon-trash "></i></button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
            data++;
        });
        $(document).on('click', '.remove', function() {
            var id = $(this).attr("id");
            $("#inputFormRow" + id).remove();
            SetTotal();
        });
        //end sub title

        // start sub description
        var data2 = '<?php echo count($loop_sub_description) + 1; ?>';
        $('#addRow2').click(function() {
            var html = '';
            html += '<div id="inputFormRow2' + data2 + '">';
            html += '<div class="d-flex mb-2">';
            html += '<div class="input-group mb-2 mr-sm-2 mb-sm-0">';
            html += '<input type="text" name="sub_description[]" id="sub_description' + data2 +
                '" class="form-control form-control-sm" placeholder="Enter Sub Description" ';
            html += '</div>';
            html += '<button id="' + data2 +
                '" type="button" class="btn btn-danger btn-sm icon-btn ms-2 remove2"><i class="icon-trash "></i></button>';
            html += '</div>';
            html += '</div>';

            $('#newRow2').append(html);
            data2++;
        });
        $(document).on('click', '.remove2', function() {
            var id2 = $(this).attr("id");
            $("#inputFormRow2" + id2).remove();
            SetTotal();
        });
        // end sub description


</script>