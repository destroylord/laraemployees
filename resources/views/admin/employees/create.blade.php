@extends('layouts.app')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('employee.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Nama karyawan</label>
                                <input type="text" class="form-control" name="employee_name" id="formGroupExampleInput" placeholder="nama karyawan...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jabatan</label>
                                <input type="text" class="form-control" name="position" id="formGroupExampleInput" placeholder="jabatan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jenis Kelamin</label>
                                <select id="inputState" class="form-control" name="gender">
                                    <option selected disabled>Pilih</option>
                                    <option value="male"> Laki-laki </option>
                                    <option value="female"> Perempuan </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Status</label>
                                <select id="inputState" class="form-control" name="active">
                                    <option selected disabled>Pilih</option>
                                    <option value="1"> Aktif </option>
                                    <option value="0"> Tidak aktif </option>
                                </select>
                            </div>
                        </div>
                    
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary btn-sm">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection