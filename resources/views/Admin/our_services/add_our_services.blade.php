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
                <div class="form-group ">
                  <label for="firstname">Title</label>
                  <input id="title" class="form-control" name="title" type="text" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="description" class="form-control" name="description" type="text" placeholder="Description">
                </div>
                

                <div class="text-start">
                  <input class="btn btn-primary" type="submit" name="add" value="Submit">
                    <a href="{{ route('our-services.view') }}">
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

@include('Admin/footer')
<script>
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
                // profession: {
                //     required: true,
                //     maxlength: 50
                // },
                // information: {
                //     required: true,
                //     maxlength: 50
                // },
                description: {
                  required: true,
                  maxlength:1000
                },
                image: 'required',
               
            },
            messages: {
                title: {
                    required: "Please enter Title",
                    maxlength: "Title must be 100 char long"
                },
                // profession: {
                //   required: "please Enter profession",
                //   maxlength: "profession must be 50 char long"
                // },
                // information: {
                //   required: "please Enter information",
                //   maxlength: "information must be 50 char long"
                // },
                description: {
                  required: "please Enter Description",
                  maxlength: "Description must be 1000 char long"
                },
                image: "please enter image",
                    
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
</script>