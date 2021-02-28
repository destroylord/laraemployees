@extends('layouts.app')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('employee.edit') }}" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Nama karyawan</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name', $employee->employee_name) }}" id="formGroupExampleInput" placeholder="nama karyawan...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jabatan</label>
                                <input type="text" class="form-control" name="position" value="{{ old('position', $employee->position) }}" id="formGroupExampleInput" placeholder="jabatan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jenis Kelamin</label>
                                <select id="inputState" class="form-control" name="gender">
                                    <option selected>Pilih</option>
                                    <option value="male" {{ $employee->gender == "male" ? 'selected' : '' }}> Laki-laki </option>
                                    <option value="female" {{ $employee->gender == "female" ? 'selected' : '' }}> Perempuan </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Status</label>
                                <select id="inputState" class="form-control" name="active">
                                    <option selected>Pilih</option>
                                    <option value="1" {{ $employee->active == '1' ? 'selected' : ''}}> Aktif </option>
                                    <option value="0" {{ $employee->active == '0' ? 'selected' : ''}}> Tidak aktif </option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection