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
                      <h4 class="card-title">Edit data</h4>
                      @foreach ($update_home_slider as $dt)
                      <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                        @csrf
                          <fieldset>
                            <div class="form-group">
                                  <label for="firstname">image</label>
                                  <img src="{{ asset('upload/'.$dt->image) }}" height="250" width="250"alt="">
                              </div>
                              <div class="form-group ">
                                  <label for="firstname">Title</label>
                                  <input id="firstname" class="form-control" name="title" type="text"
                                      placeholder="Title" value="{{ $dt->title }}">
                              </div>
                              <div class="form-group">
                                  <label for="lastname">Description</label>
                                  <input id="lastname" class="form-control" name="description" type="text"
                                      placeholder="Description" value="{{ $dt->description }}">
                              </div>
                              <div class="form-group">
                                  <label>File upload</label>
                                  <div class="input-group col-xs-12">
                                      <input type="file" name="image" class="form-control file-upload-info"
                                          placeholder="Upload Image">
                                  </div>
                              </div>
                              <input class="btn btn-primary" type="submit" name="save" value="Submit">
                              <a href="{{ route('view.home.slider') }}">
                                <button type="button" class="btn btn-inverse-dark ">cancel</button>
                              </a>
                          </fieldset>
                      </form>
                      @endforeach
                  </div>
              </div>
          </div>
        </div>
    </div>

    {{-- end of the page --}}

    @include('Admin/footer')
