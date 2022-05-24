@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add About Expert Data  </h3>
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
                        <label for="lastname">Sub Title </label>
                        <input id="sub_title" class="form-control" name="sub_title[]" type="text" placeholder="Enter Sub Title">
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
@include('Admin/footer')
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
                sub_title1: {
                    required: true,
                    maxlength: 100
                },
                sub_title2: {
                    required: true,
                    maxlength: 100
                },
                sub_title3: {
                    required: true,
                    maxlength: 100
                },
                sub_title4: {
                    required: true,
                    maxlength: 100
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
                sub_title1: {
                    required: "please enter Sub Title 1",
                    maxlength: "Sub Title must be 100 char long"
                },
                sub_title2: {
                    required: "please enter Sub Title 2",
                    maxlength: "Sub Title must be 100 char long"
                },
                sub_title3: {
                    required: "please enter Sub Title 3",
                    maxlength: "Sub Title must be 100 char long"
                },
                sub_title4: {
                    required: "please enter Sub Title 4",
                    maxlength: "Sub Title must be 100 char long"
                },

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
</script>