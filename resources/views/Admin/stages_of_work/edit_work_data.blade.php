@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Development data Add </h3>
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
            @foreach ($edit_stages_data as $dt)  
                <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="form-group col-2 ">
                    <label for="firstname">Title</label>
                    <input id="firstname" class="form-control" name="title" type="text" placeholder="Title" value="{{$dt->title}}">
                    </div>
                    <div class="form-group col-sm-4 ">
                    <label for="firstname">Sub Title</label>
                    <input id="firstname" class="form-control" name="sub_title" type="text" placeholder="Sub Title" value="{{$dt->sub_title}}">
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-3 ">
                            <label for="firstname">Stages Title 1</label>
                            <input id="firstname" class="form-control" name="stages1" type="text" placeholder="stages Title" value="{{$dt->stages1}}">
                        </div>
                        <div class="form-group col-3 ">
                            <label for="firstname">Stages Title 2</label>
                            <input id="firstname" class="form-control" name="stages2" type="text" placeholder="stages Title" value="{{$dt->stages2}}">
                        </div>
                        <div class="form-group col-3 ">
                            <label for="firstname">Stages Title 3</label>
                            <input id="firstname" class="form-control" name="stages3" type="text" placeholder="stages Title" value="{{$dt->stages3}}">
                        </div>
                        <div class="form-group col-3 ">
                            <label for="firstname">Stages Title 4</label>
                            <input id="firstname" class="form-control" name="stages4" type="text" placeholder="stages Title" value="{{$dt->stages4}}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-3">
                        <label for="lastname">Description 1</label>
                        <input id="lastname" class="form-control" name="description1" type="text" placeholder="Description" value="{{$dt->description1}}">
                        </div>
                        <div class="form-group col-3">
                        <label for="lastname">Description 2</label>
                        <input id="lastname" class="form-control" name="description2" type="text" placeholder="Description" value="{{$dt->description2}}">
                        </div>
                        <div class="form-group col-3">
                        <label for="lastname">Description 3</label>
                        <input id="lastname" class="form-control" name="description3" type="text" placeholder="Description" value="{{$dt->description3}}">
                        </div>
                        <div class="form-group col-3">
                        <label for="lastname">Description 4</label>
                        <input id="lastname" class="form-control" name="description4" type="text" placeholder="Description" value="{{$dt->description4}}">
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" name="edit" value="Submit">
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