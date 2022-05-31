@include('Admin.header')
{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Portfolio Letest Work  Slider </h3>
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
                  <input id="title" class="form-control" name="title" type="text" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="firstname">Colour Image Upload</label>
                  <div class="input-group col-xs-12">
                    <input type="file" id="color_image"  class="form-control file-upload-info" style="width: 100%" name="color_image"  ><br>
                  </div>
                </div>
                <div class="form-group">
                  <label>Black and White Image Upload</label>
                  <div class="input-group col-xs-12">
                    <input type="file" id="black_image"  class="form-control file-upload-info" style="width: 100%" name="black_image" ><br>
                  </div>
                </div>
                <div class="text-start">
                  <input class="btn btn-primary" type="submit" name="add" value="Submit">
                    <a href="{{ route('Latest-Work.view') }}">
                      <button type="button" class="btn btn-inverse-dark ">cancel</button>
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
  jQuery('#frm').validate({
            rules: {
                title: {
                    required: true,
                    maxlength: 50
                },
                description: {
                  required: true,
                  maxlength:500
                },
                image: 'required',
               
            },
            messages: {
                title: {
                    required: "Please enter Title",
                    maxlength: "Title must be 50 char long"
                },
                description: {
                  required: "please Enter Description",
                  maxlength: "Description must be 500 char long"
                },
                image: "please enter image",
                    
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
</script>