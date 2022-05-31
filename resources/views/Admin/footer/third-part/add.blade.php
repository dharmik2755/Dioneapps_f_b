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
                  <label for="firstname">title</label>
                  <input id="title" class="form-control" name="title" type="text" placeholder="Enter title">
                </div>
                
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="description" class="form-control" name="description" type="text" placeholder="Description">
                </div>

                <div class="text-start">
                  <input class="btn btn-primary" type="submit" name="add" value="Submit">
                    <a href="{{ route('services.view') }}">
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
  jQuery('#frm').validate({
            rules: {
                title: {
                    required: true,
                    maxlength: 150
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
                  maxlength:2000
                },
                // image: 'required',
               
            },
            messages: {
                title: {
                    required: "Please enter Title",
                    maxlength: "Title must be 150 char long"
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
                  maxlength: "Description must be 2000 char long"
                },
                // image: "please enter image",
                    
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
</script>