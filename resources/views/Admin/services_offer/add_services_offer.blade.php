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
                <div class="form-group ">
                  <label for="firstname">Sub Title |||</label>
                  <input id="sub_title" class="form-control" name="sub_title[]" type="text" placeholder="Enter Sub Title ">
                </div>
                <div class="form-group">
                  <label for="lastname">Sub Description</label>
                  <input id="sub_description" class="form-control" name="sub_description" type="text" placeholder="Enter Sub Description">
                </div>
                <div class="form-group">
                  <label>File upload</label>
                  <div class="input-group col-xs-12">
                    <input type="file" id="image"   name="image" class="form-control file-upload-info"  placeholder="Upload Image" style="width: 100%;">
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