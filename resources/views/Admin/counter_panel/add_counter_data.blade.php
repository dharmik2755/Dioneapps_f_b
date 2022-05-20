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
                <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                  @csrf
                  <fieldset>
                    <div class="form-group ">
                      <label for="firstname">Clients</label>
                      <input id="firstname" class="form-control" name="clients" type="text" placeholder="clients" >
                    </div>
                    <div class="form-group ">
                      <label for="firstname">Projects</label>
                      <input id="firstname" class="form-control" name="projects" type="text"     placeholder=" Projects" >
                    </div>
                    <div class="form-group">
                      <label for="lastname">Employees</label>
                      <input id="lastname" class="form-control" name="employees" type="text" placeholder="employees" >
                    </div>
                    <div class="form-group">
                      <label for="lastname">Branches</label>
                      <input id="lastname" class="form-control" name="branches" type="text" placeholder="branches" >
                    </div>
                    
                    <input class="btn btn-primary" type="submit" name="add" value="Submit">
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      {{-- end of the page --}}
    @include('Admin/footer')