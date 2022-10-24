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
            <table class="table text-blue-900 p-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pic</th>
                        <th scope="col">no. reg</th>
                        <th scope="col">brand/models</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    @if($data->count()) @foreach($data as $unit)

                    <tr>
                        <th scope="row">
                            {{ ($data->currentpage()-1) * $data->perpage() + $loop->index + 1 }}
                        </th>
                        <td>
                            @if($unit->pic != 0)
                            <img
                                width="75"
                                src="{{ asset('storage/'. $data->pic) }}"
                                alt=""
                            />
                            @else
                            {{ "-" }}
                            @endif
                        </td>
                        <td>{{ $unit->noreg }}</td>
                        <td>
                            {{ $unit->brandModel->brand->name }} ,
                            {{ $unit->brandModel->name }}
                        </td>

                        <td>
                            <a
                                href="/dashboard/unit/{{ $unit->slug }}"
                                class="badge text-bg-success"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Detail unit"
                                ><i class="fa-regular fa-eye"></i
                            ></a>
                            <a
                                href="/dashboard/unit/{{ $unit->slug }}/edit"
                                class="badge text-bg-warning"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Edit product"
                                ><i class="fa-regular fa-pen-to-square"></i
                            ></a>

                            <form
                                action="/dashboard/unit/{{ $unit->slug }}"
                                method="post"
                                class="d-inline"
                            >
                                @method('delete') @csrf
                                <button
                                    class="badge bg-danger border-0"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="Hapus product"
                                    onclick="return confirm('are You sure ??')"
                                >
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach @else
                    <tr>
                        <td colspan="6" class="text-center">Data Not Found</td>
                    </tr>
                    @endif
                </tbody>
                <caption class="mt-3"></caption>
            </table>
            <div class="row">
                <div class="col-md-8">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">Footer</div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
<script>
    $(document).ready(function () {
        $("#myTable").DataTable();
    });
</script>

@endsection
