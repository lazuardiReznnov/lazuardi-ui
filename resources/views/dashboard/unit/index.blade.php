@extends('layouts.dashboard.main') @section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $title }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Unit List</h3>

            <div class="card-tools">
                <button
                    type="button"
                    class="btn btn-tool"
                    data-card-widget="collapse"
                    title="Collapse"
                >
                    <i class="fas fa-minus"></i>
                </button>
                <button
                    type="button"
                    class="btn btn-tool"
                    data-card-widget="remove"
                    title="Remove"
                >
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table text-blue-900 p-3" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">no. reg</th>
                        <th scope="col">brand/models</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider"></tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">Footer</div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@push('datatables-unit')
<script>
    $(document).ready(function () {
        $("#myTable").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('unit.index') }}",
            columns: [
                { data: "DT_RowIndex", name: "DT_RowIndex" },
                { data: "noreg", name: "noreg" },
                {
                    data: "name",
                    name: "brandModel.brand.name",
                },
            ],
        });
    });
</script>
@endpush @endsection
