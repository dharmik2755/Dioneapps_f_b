@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add Career Page Perks Data  </h3>
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
                  <label for="lastname">Description</label>
                  <input id="description" class="form-control" name="description" type="text" placeholder="Description">
                </div>
                <div class="form-group ">
                  <label for="lastname">Image </label>
                  <input id="image" class="form-control" name="image[]" type="file" multiple >
                </div>
                <div class="form-group ">
                    <label for="lastname">Sub Title </label>
                    <input id="sub_title" class="form-control" name="sub_title[]" type="text" placeholder="Enter Sub Title">
                </div>
                <div class="form-group ">
                    <label for="lastname">Sub Description </label>
                    <input id="sub_description" class="form-control" name="sub_description[]" type="text" placeholder="Enter Sub description">
                </div>
                     
                
                <div class="text-start">
                    <input class="btn btn-primary" type="submit" name="add" value="Submit">
                      <a href="{{ route('about.expert.view') }}">
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
                  maxlength:1000
                },
                'sub_title[]': {
                    required: true,
                    maxlength: 2000
                },
                
            },
            messages: {
                title: {
                    required: "Please enter Title",
                    maxlength: "Title must be 50 char long"
                },
                description: {
                  required: "please Enter Description",
                  maxlength: "Description must be 1000 char long"
                },
                'sub_title[]': {
                    required: "please enter Sub Title ",
                    maxlength: "Sub Title must be 2000 char long"
                },
                
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
</script>