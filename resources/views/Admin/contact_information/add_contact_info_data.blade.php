@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add Contact Media Infromation Data  </h3>
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
                  <label for="firstname">Code</label>
                  <input id="code" class="form-control" name="code" type="text" placeholder="Enter font Awesoam Code">
                </div>
                <div class="form-group ">
                  <label for="firstname">Title Link</label>
                  <input id="title_link" class="form-control" name="title_link" type="text" placeholder="Enter Title Link">
                </div>
                <div class="form-group ">
                  <label for="firstname">Title</label>
                  <input id="title" class="form-control" name="title" type="text" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="description" class="form-control" name="description" type="text" placeholder="Description">
                </div>
                <div class="text-start">
                    <input class="btn btn-primary" type="submit" name="add" value="Submit">
                      <a href="{{ route('contact-information.view') }}">
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
                code: {
                    required: true,
                    maxlength: 50
                },
                title_link: {
                    required: true,
                    maxlength: 300
                },
                title: {
                    required: true,
                    maxlength: 50
                },
                description: {
                  required: true,
                  maxlength:1000
                },
                // 'sub_title[]': {
                //     required: true,
                //     maxlength: 2000
                // },
                
            },
            messages: {
                code: {
                    required: "Please enter code",
                    maxlength: "code must be 50 char long"
                },
                title_link: {
                    required: "Please enter title_link",
                    maxlength: "title_link must be 300 char long"
                },
                title: {
                    required: "Please enter title",
                    maxlength: "title must be 50 char long"
                },
                description: {
                  required: "please Enter Description",
                  maxlength: "Description must be 1000 char long"
                },
                // 'sub_title[]': {
                //     required: "please enter Sub Title ",
                //     maxlength: "Sub Title must be 2000 char long"
                // },
                
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
</script>