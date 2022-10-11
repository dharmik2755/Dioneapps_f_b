@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Home Page Slider </h3>
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
            @foreach ($clients_edit as $dt)
            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>
                
                <div class="form-group ">
                  <label for="firstname">Client Name</label>
                  <input id="firstname" class="form-control" name="name" type="text" placeholder="Name" value="{{$dt->name}}" >
                </div>
                <div class="form-group">
                  <label for="lastname">Clients Profession</label>
                  <input id="lastname" class="form-control" name="profession" type="text" placeholder="Profession" value="{{$dt->profession}}">
                </div>
                <div class="form-group">
                  <label for="lastname">Information About Client</label>
                  <input id="lastname" class="form-control" name="information" type="text" placeholder="info" value="{{$dt->information}}">
                </div>
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="lastname" class="form-control" name="description" type="text" placeholder="Description" value="{{$dt->description}}">
                </div>
                {{-- <div class="form-group ">
                  <label for="firstname">image</label>
                  <img src="{{asset('upload/'.$dt->image)}}" height="200" width="200" alt="">
                </div> --}}
                <div class="form-group">
                  <div class="row">
                      <label>File upload</label>
                      <div class="col-6">
                          <input type="file" id="image" class="form-control file-upload-info"
                              style="width: 100%" name="image" placeholder="Upload Image" multiple><br>
                      </div>
                      <div class="col-6">
                          <img id="previewHolder" alt="Uploaded Image" src="{{asset('upload/'.$dt->image)}}" width="200px"
                              height="200px" />
                      </div>
                  </div>
              </div>
                <div class="text-start">
                  <input class="btn btn-primary" type="submit" name="update" value="Update">
                    <a href="{{ route('clients.view') }}">
                        <button type="button" class="btn btn-inverse-dark btn-fw">Cancel </button>
                    </a>
                </div>
              </fieldset>
            </form>
            @endforeach
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
</script>