@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add About Data  </h3>
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
                <div class="form-group ">
                  <label for="firstname">Sub Title</label>
                  <input id="sub_title" class="form-control" name="sub_title" type="text" placeholder="Sub Title">
                </div>
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="description" class="form-control" name="description" type="text" placeholder="Description">
                </div>
                <div class="form-group">
                  <label>File upload</label>
                  <div class="input-group col-xs-12">
                    <input type="file" id="image"  name="image" class="form-control file-upload-info"  placeholder="Upload Image" style="width: 100%;">
                  </div>
                </div>
                <div class="text-start">
                    <input class="btn btn-primary" type="submit" name="add" value="Submit">
                      <a href="{{ route('about.view') }}">
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

  {{-- end of the page --}}
@include('Admin/footer')
<script>
  jQuery('#frm').validate({
            rules: {
                title: {
                    required: true,
                    maxlength: 30
                },
                sub_title: {
                    required: true,
                    maxlength: 100
                },
                description: "required",
                image: "required",
            },
            messages: {
                title: {
                    required: "Please enter Title",
                    maxlength: "Title must be 30 char long"
                },
                sub_title: {
                    required: "please enter Sub Title",
                    maxlength: "Sub Title must be 100 char long"
                },
                description: "Please enter valid Description",
                image: "Please Insert Image",
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
</script>