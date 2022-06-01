@include('Admin.header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">social media Page </h3>
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
                  <label for="firstname">Social Media Image</label>
                  <input id="image" class="form-control" name="image" type="file" >
                </div>
                
                <div class="form-group">
                  <label for="lastname">Link</label>
                  <input id="link" class="form-control" name="link" type="text" placeholder="Enter Link">
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

@include('Admin.footer')
<script>
  jQuery('#frm').validate({
            rules: {
                link: {
                    required: true,
                    maxlength: 1000
                },
                // profession: {
                //     required: true,
                //     maxlength: 50
                // },
                // information: {
                //     required: true,
                //     maxlength: 50
                // },
                image: {
                  required: true,
                },
                // image: 'required',
               
            },
            messages: {
              link: {
                    required: "Please enter link",
                    maxlength: "link must be 1000 char long"
                },
                // profession: {
                //   required: "please Enter profession",
                //   maxlength: "profession must be 50 char long"
                // },
                // information: {
                //   required: "please Enter information",
                //   maxlength: "information must be 50 char long"
                // },
                image: {
                  required: "please Enter Image",
                },
                // image: "please enter image",
                    
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
</script>