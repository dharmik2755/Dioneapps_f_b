@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Clients Page </h3>
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
            <form class="cmxform" id="frm" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>
                <div class="form-group ">
                  <label for="firstname">Title</label>
                  <input id="title" class="form-control" name="title" type="text" placeholder="title">
                </div>
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="description" class="form-control" name="description" type="text" placeholder="Description">
                </div>
                {{-- <div class="form-group ">
                  <label for="firstname">Sub Title |||</label>
                  <input id="sub_title" class="form-control" name="sub_title[]" type="text" placeholder="Enter Sub Title ">
                </div> --}}
                <div class="form-group">
                  <label for="lastname">Sub Title</label>
                  <div id="inputFormRow">
                      <div class="d-flex mb-2">
                          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                              <input type="text" name="sub_title[]"
                                  class="form-control form-control-sm" placeholder="Enter Sub Title">
                          </div>
                          <button id="addRow" type="button"
                              class="btn btn-info btn-sm icon-btn ms-2 mb-2 ">
                              Add
                          </button>
                      </div>
                  </div>
                  <div id="newRow"></div>
                  </div>
                <div class="form-group">
                  <label for="lastname">Sub Description</label>
                  <input id="sub_description" class="form-control" name="sub_description" type="text" placeholder="Enter Sub Description">
                </div>
                <div class="form-group">
                  <div class="row">
                      <label>File upload</label>
                      <div class="col-6">
                          <input type="file" id="image" class="form-control file-upload-info"
                              style="width: 100%" name="image" placeholder="Upload Image" multiple><br>
                      </div>
                      <div class="col-6">
                          <img id="previewHolder" alt="Uploaded Image" width="200px"
                              height="200px" />
                      </div>
                  </div>
                </div>

                <div class="text-start">
                  <input class="btn btn-primary" type="submit" name="add" value="Submit">
                    <a href="{{ route('services-offer.view') }}">
                      <button type="button" class="btn btn-inverse-dark btn-fw">Cancel </button>
                    </a>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('Admin.footer')
<script>
   //  start 
   $('#addRow').click(function() {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="d-flex mb-2">';
            html += '<div class="input-group mb-2 mr-sm-2 mb-sm-0">';
            html +=
                '<input type="text" name="sub_title[]" class="form-control form-control-sm" placeholder="Enter Sub Title">';
            html += '</div>';
            html +=
                '<button id="removeRow" type="button" class="btn btn-danger btn-sm icon-btn ms-2"><i class="icon-trash"></i></button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
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
  jQuery('#frm').validate({
            rules: {
                title: {
                    required: true,
                    maxlength: 100
                },
                description: {
                  required: true,
                  maxlength:1000
                },
                'sub_title[]': {
                    required: true,
                    maxlength: 2000
                },
                sub_description: {
                  required: true,
                  maxlength:2000
                },
                image: 'required',
               
            },
            messages: {
                title: {
                    required: "Please enter Title",
                    maxlength: "Title must be 100 char long"
                },
                description: {
                  required: "please Enter Description",
                  maxlength: "Description must be 1000 char long"
                },
                'sub_title[]': {
                  required: "please Enter sub title",
                  maxlength: "profession must be 2000 char long"
                },
                sub_description: {
                  required: "please Enter sub description",
                  maxlength: "information must be 2000 char long"
                },
                image: "please enter image",
                    
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
</script>