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
                      @foreach ($about_data as $dt)
                      <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                        @csrf
                          <fieldset>
                              <div class="form-group ">
                                  <label for="firstname">Title</label>
                                  <input id="firstname" class="form-control" name="title" type="text"
                                      placeholder="Title" value="{{ $dt->title }}">
                              </div>
                              <div class="form-group ">
                                  <label for="firstname">Sub Title</label>
                                  <input id="firstname" class="form-control" name="sub_title" type="text"
                                      placeholder="Sub Title" value="{{ $dt->sub_title }}">
                              </div>
                              <div class="form-group">
                                  <label for="lastname">Description</label>
                                  <input id="lastname" class="form-control" name="description" type="text"
                                      placeholder="Description" value="{{ $dt->description }}">
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <label>File upload</label>
                                    <div class="col-6">
                                        <input type="file" id="image" class="form-control file-upload-info" style="width: 100%" name="image" placeholder="Upload Image" multiple><br>
                                    </div>
                                    <div class="col-6">
                                        <img id="previewHolder" alt="Uploaded Image" src="{{ URL('upload/'.$dt->image) }}" width="200px"
                                            height="200px" />
                                    </div>
                                </div>
                            </div>
                              <div class="text-start">
                              <input class="btn btn-primary" type="submit" name="edit" value="Submit">
                                <a href="{{ route('about.view') }}">
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

    {{-- end of the page --}}

    @include('Admin/footer')
