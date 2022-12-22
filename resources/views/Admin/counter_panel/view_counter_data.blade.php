@include('Admin/header')

    {{-- home slider page form validation page --}}
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">view counter Data  </h3>
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
                <h4 class="card-title"></h4>
                {{-- show data --}}
                @foreach ($counter_data as $dt)
                <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                    @csrf
                  <fieldset>
                    <div class="row">
                        <div class="form-group col-3 ">
                            <label for="firstname">Clients</label>
                            <input id="firstname" class="form-control" name="clients" type="text" placeholder="clients" value="{{$dt->clients}}" readonly>
                          </div>
                          <div class="form-group col-3">
                            <label for="firstname">Projects</label>
                            <input id="firstname" class="form-control" name="projects" type="text"     placeholder=" Projects" value="{{$dt->projects}}" readonly>
                          </div>
                          <div class="form-group col-3">
                            <label for="lastname">Employees</label>
                            <input id="lastname" class="form-control" name="employees" type="text" placeholder="employees" value="{{$dt->employees}}" readonly>
                          </div>
                          <div class="form-group col-3">
                            <label for="lastname">Branches</label>
                            <input id="lastname" class="form-control" name="branches" type="text" placeholder="branches" value="{{$dt->branches}}" readonly>
                          </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-12 text-end ">
                            {{-- <a href="{{ route('stages.edit' , [ $dt->id]) }}" target="."> --}}
                            <a href="{{ url('/edit-counter-data/'. $dt->id) }}">
                                <button type="button" class="btn btn-outline-primary btn-sm">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </a>
                            
                        </div>
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