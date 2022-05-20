@include('Admin/header')

{{-- start --}}

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Stages Of Work data view </h3>
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
            <h4 class="card-title">view data</h4>
            @foreach ($stages_data as $dt)
            <form class="cmxform" id="signupForm" method="GET" >
              
              <fieldset>
                <div class="form-group col-1 ">
                  <label for="firstname">Id</label>
                  <input id="firstname" class="form-control" type="text" placeholder="Title" readonly value="{{$dt->id}}">
                </div>
                <div class="form-group col-2 ">
                  <label for="firstname">Title</label>
                  <input id="firstname" class="form-control"  type="text" placeholder="Title" readonly value="{{$dt->title}}" >
                </div>
                <div class="form-group col-sm-4 ">
                  <label for="firstname">Sub Title</label>
                  <input id="firstname" class="form-control"  type="text" placeholder="Sub Title" readonly value="{{$dt->sub_title}}">
                </div>
                
                  <div class="row">
                      <div class="form-group col-3 ">
                          <label for="firstname">Stages Title 1</label>
                          <input id="firstname" class="form-control"  type="text" placeholder="stages Title" readonly value="{{$dt->stages1}}">
                      </div>
                      <div class="form-group col-3 ">
                          <label for="firstname">Stages Title 2</label>
                          <input id="firstname" class="form-control"  type="text" placeholder="stages Title" readonly value="{{$dt->stages2}}">
                      </div>
                      <div class="form-group col-3 ">
                          <label for="firstname">Stages Title 3</label>
                          <input id="firstname" class="form-control" type="text" placeholder="stages Title" readonly value="{{$dt->stages3}}">
                      </div>
                      <div class="form-group col-3 ">
                          <label for="firstname">Stages Title 4</label>
                          <input id="firstname" class="form-control"  type="text" placeholder="stages Title" readonly value="{{$dt->stages4}}">
                      </div>
                  </div>
                
                <div class="row">
                    <div class="form-group col-3">
                       <label for="lastname">Description 1</label>
                       <input id="lastname" class="form-control" type="text" placeholder="Description" readonly value="{{$dt->description1}}">
                    </div>
                    <div class="form-group col-3">
                       <label for="lastname">Description 2</label>
                       <input id="lastname" class="form-control" type="text" placeholder="Description" readonly value="{{$dt->description2}}">
                    </div>
                    <div class="form-group col-3">
                       <label for="lastname">Description 3</label>
                       <input id="lastname" class="form-control"  type="text" placeholder="Description" readonly value="{{$dt->description3}}">
                    </div>
                    <div class="form-group col-3">
                       <label for="lastname">Description 4</label>
                       <input id="lastname" class="form-control"  type="text" placeholder="Description" readonly value="{{$dt->description4}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-1 ">
                        {{-- <a href="{{ route('stages.edit' , [ $dt->id]) }}" target="."> --}}
                        <a href="{{ url('/edit-stages-of-work-data/'. $dt->id) }}">
                            <button type="button" class="btn btn-outline-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        </a>
                        
                    </div>
                    {{-- <div class="form-group col-1 ">
                        <a href="{{ url('/delete-stages-of-work-data/'. $dt->id) }}">
                            <button type="button" class="btn btn-outline-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </a>
                    </div> --}}
                </div>
              </fieldset>
            </form>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  
{{-- end --}}

    @include('Admin/footer')
