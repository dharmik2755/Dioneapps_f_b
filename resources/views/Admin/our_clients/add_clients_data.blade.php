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
            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>
                <div class="form-group ">
                  <label for="firstname">Client Name</label>
                  <input id="firstname" class="form-control" name="name" type="text" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="lastname">Clients Profession</label>
                  <input id="lastname" class="form-control" name="profession" type="text" placeholder="Profession">
                </div>
                <div class="form-group">
                  <label for="lastname">Information About Client</label>
                  <input id="lastname" class="form-control" name="information" type="text" placeholder="info">
                </div>
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="lastname" class="form-control" name="description" type="text" placeholder="Description">
                </div>
                <div class="form-group">
                  <label>File upload</label>
                  <div class="input-group col-xs-12">
                    <input type="file"  name="image" class="form-control file-upload-info"  placeholder="Upload Image">
                  </div>
                </div>
                <input class="btn btn-primary" type="submit" name="add" value="Submit">
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('Admin/footer')