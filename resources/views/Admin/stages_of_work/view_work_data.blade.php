@include('Admin/header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Data table </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data table</li>
                </ol>
                <ol class="breadcrumb">
                    <a href="{{ route('stages.create') }}">
                        <button type="button" class="btn btn-outline-info btn-fw">Add stages Data</button>
                    </a>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data table</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Stages1</th>
                                        <th>Description1</th>
                                        <th>Stages2</th>
                                        <th>Description2</th>
                                        <th>Stages3</th>
                                        <th>Description3</th>
                                        <th>Stages4</th>
                                        <th>Description4</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stages_data as $dt)
                                        <tr>
                                            <td>{{ $dt->id }}</td>
                                            <td>{{ $dt->title }}</td>
                                            <td>{{ $dt->stages1 }}</td>
                                            <td>{{ $dt->description1 }}</td>
                                            <td>{{ $dt->stages2 }}</td>
                                            <td>{{ $dt->description2 }}</td>
                                            <td>{{ $dt->stages3 }}</td>
                                            <td>{{ $dt->description3 }}</td>
                                            <td>{{ $dt->stages4 }}</td>
                                            <td>{{ $dt->description4 }}</td>
                                            {{-- <td>
                                                <img height="200px" width="200px" src="{{ asset('upload/' . $dt->image) }}"
                                                    alt="">
                                            </td> --}}
                                            <td>
                                                <label class="badge badge-info">On hold</label>
                                            </td>
                                            <td>
                                                {{-- edit link --}}
                                                <a href="{{ url('/edit-stages-of-work-data/' . $dt->id) }}">
                                                    <button class="btn btn-outline-primary">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                {{-- delete link --}}
                                                <a href="{{ url('/delete-stages-of-work-data/'. $dt->id) }}">
                                                    <button class="btn btn-outline-danger">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    @include('Admin/footer')
