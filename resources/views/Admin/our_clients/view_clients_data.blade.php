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
                    <a href="{{ route('clients.create') }}">
                        <button type="button" class="btn btn-outline-info btn-fw">Add Clients Data</button>
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
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Profession</th>
                                        <th>infomation about Clients</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients_data as $dt)
                                        <tr>
                                            <td>{{ $dt->id }}</td>
                                            <td>{{ $dt->name }}</td>
                                            <td>{{ $dt->profession }}</td>
                                            <td>{{ $dt->information }}</td>
                                            <td>{{ $dt->description }}</td>
                                            <td>
                                                <img height="200px" width="200px" src="{{ asset('upload/' . $dt->image) }}"
                                                    alt="">
                                            </td>
                                            <td>
                                                <label class="badge badge-info">On hold</label>
                                            </td>
                                            <td>
                                                {{-- edit link --}}
                                                <a href="{{ url('/edit-our-clients-of-work-data/' . $dt->id) }}">
                                                    <button class="btn btn-outline-primary">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                {{-- delete link --}}
                                                <a href="{{ url('/delete-our-clients-of-work-data/'. $dt->id) }}">
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
