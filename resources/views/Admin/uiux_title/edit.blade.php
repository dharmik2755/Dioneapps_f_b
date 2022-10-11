@include('Admin.header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Web Develop Title </h3>
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
                        @foreach ($uiux_develop_title as $dt)
                            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label>Services</label>
                                        <select class="js-example-basic-single" style="width:100%" name="special_id">
                                            <option value="" selected disabled> -- please select -- </option>
                                            @foreach ($specializ_id as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $dt->special_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->development_name }}</option>
                                            @endforeach
                                        </select>
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

                                    <div class="text-start">
                                        <input class="btn btn-primary" type="submit" name="edit" value="Update">
                                        <a href="{{ route('uiux-title.view') }}">
                                            <button type="button" class="btn btn-inverse-dark btn-fw">Cancel</button>
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

    @include('Admin.footer')
