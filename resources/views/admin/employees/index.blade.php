@extends('layouts.app')

@push('stylesheet')
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
@endpush

@section('body')
<a href="{{ route('employee.create') }}" class="btn btn-primary">Tambah Karyawan</a>


    {{-- datatables --}}  

    <div class="card shadow mb-4 mt-4">
      <div class="card-header py-3">
        <div class="m-0 font-weight-bold text-primary">
          Example data karyawan
        </div>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable">
              <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Karyawan</th>
                    <th>Jabatan</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                    <th colspan="2">Option</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $employee->employee_name }}</td>
                            <td>{{ $employee->position }}</td>
                            <td>{{ ($employee->gender == "male") ? 'Laki-laki' : 'Perempuan'}}</td>
                            <td>{{ ($employee->active > 0) ? 'active' : 'deactive'}}</td>
                            <td>
                              <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>

                              <form action="{{ route('employee.destroy',$employee) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>

@endsection

@push('scripts')
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
@endpush