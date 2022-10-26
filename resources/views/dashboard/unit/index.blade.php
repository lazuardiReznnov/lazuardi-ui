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
            <button class="btn btn-primary mb-3" id="tombol-tambah">Add</button>
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">no. reg</th>
                        <th scope="col">Brand</th>
                        <th scope="col">models</th>
                        <th scope="col">Karoseri</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">Footer</div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
<!-- Modal -->
<div
    class="modal fade"
    id="form"
    tabindex="-1"
    aria-labelledby="formLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formLabel">Modal title</h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <!-- Select brand -->
                <div class="mb-3">
                    <select
                        class="form-select"
                        aria-label="Default select example"
                        id="brand"
                        name="brand"
                    >
                        <option selected>Select Brand</option>
                        @foreach($brands as $brand)
                        <option value="{{ $brand->slug }}">
                            {{ $brand->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <!-- EndSelect brand -->
                <!-- Select Brand Model -->
                <div class="mb-3">
                    <select
                        class="form-select"
                        aria-label="Default select example"
                        id="brandModel"
                        name="brandModel_id"
                    ></select>
                </div>
                <!-- EndSelect brand -->
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
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
                    data: "brand",
                    name: "brandModel.name",
                },
                {
                    data: "models",
                    name: "models.name",
                },
                {
                    data: "type",
                    name: "karoseri.name",
                },

                { data: "action", name: "action" },
            ],
        });
    });
    $("body").on("click", "#tombol-tambah", function (e) {
        e.preventDefault();
        $("#form").modal("show");
        $("#brand").on("change", function () {
            $value = $(this).val();
            console.log($value);
        });
    });
</script>
@endpush @endsection
