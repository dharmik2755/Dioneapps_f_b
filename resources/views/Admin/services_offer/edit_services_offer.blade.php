@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Home Page Slider </h3>
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
            @foreach ($edit_services_offer as $dt)
            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>
                <div class="form-group ">
                  <label for="firstname">Title</label>
                  <input id="title" class="form-control" name="title" type="text" placeholder="title" value="{{$dt->title}}" >
                </div>
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="description" class="form-control" name="description" type="text" placeholder="Description" value="{{$dt->description}}" >
                </div>
                <div class="form-group ">
                    <?php 
                        // $loop_sub_title = explode('|||', $dt->sub_title);
                        // for ($i=0; $i<count($loop_sub_title); $i++) 
                        //   { 
                            ?>
                            {{-- <label for="firstname">Sub Title |||</label>
                            <input id="sub_title" class="form-control" name="sub_title[]" type="text" placeholder="Enter Sub Title " value="{{$loop_sub_title[$i]}}"> --}}
                    <?php 
                          // }
                     ?>
                </div>
                <div class="form-group">
                  <label for="lastname">Sub Title</label>
                      <?php  $loop_sub_title = explode('|||', $dt->sub_title); 
                          $var = 1;
                          for ($i=0; $i<count($loop_sub_title); $i++) {?>
                              <div id="inputFormRow<?php echo $var; ?>">
                          <div class="d-flex mb-2">
                              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                  <input type="text" name="sub_title[]" id="sub_title<?php echo $var; ?>" class="form-control form-control-sm" placeholder="Enter Sub Title" value="{{$loop_sub_title[$i]}}">
                              </div>
                              <?php if ($i == 0) { ?>
                                  <button id="addRow" type="button" class="btn btn-info btn-sm icon-btn ms-2 mb-2">Add</button>
                              <?php } else {?>
                                  <button id="<?php echo $var; ?>" type="button" class="btn btn-danger btn-sm icon-btn ms-2 remove"><i class="icon-trash"></i></button>
                              <?php }?>
                          </div>
                          </div>
                          <?php
                          $var++;
                      } ?>
                  <div id="newRow"></div>
              </div>
                <div class="form-group">
                  <label for="lastname">Sub Description</label>
                  <input id="sub_description" class="form-control" name="sub_description" type="text" placeholder="Enter Sub Description" value="{{$dt->sub_description}}">
                </div>
                <div class="form-group">
                  <div class="row">
                      <label>File upload</label>
                      <div class="col-6">
                          <input type="file" id="image"
                              class="form-control file-upload-info" style="width: 100%"
                              name="image" placeholder="Upload Image" multiple><br>
                      </div>
                      <div class="col-6">
                          <img id="previewHolder" src="{{ asset('upload/' . $dt->image) }}"
                              style="background-color: rgb(109, 109, 109)" alt="Uploaded Image"
                              width="200px" height="200px" />
                      </div>
                  </div>
              </div>
                <div class="text-start">
                  <input class="btn btn-primary" type="submit" name="edit" value="Update">
                    <a href="{{ route('services-offer.view') }}">
                        <button type="button" class="btn btn-inverse-dark btn-fw">Cancel </button>
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

@include('Admin/footer')
<script>
   // start 
   var data = '<?php echo count($loop_sub_title)+1; ?>';
        $('#addRow').click(function() {
            var html = '';
            
            html += '<div id="inputFormRow'+data+'">';
            html += '<div class="d-flex mb-2">';
            html += '<div class="input-group mb-2 mr-sm-2 mb-sm-0">';
            html += '<input type="text" name="sub_title[]" id="sub_title'+data+'" class="form-control form-control-sm" placeholder="Enter Sub Title" ';
            html += '</div>';
            html += '<button id="'+data+'" type="button" class="btn btn-danger btn-sm icon-btn ms-2 remove"><i class="icon-trash "></i></button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
            data++;
        });
        $(document).on('click', '.remove', function() {
            var id = $(this).attr("id");
            $("#inputFormRow"+id).remove();
            SetTotal();
        });

  // live show image start
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
              $('#previewHolder').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
      } else {
          alert('select a file to see preview');
          $('#previewHolder').attr('src', '');
      }
  }
  $("#image").change(function() {
      readURL(this);
  });
  // end
</script>