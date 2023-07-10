@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Edit Data Orang</h3>
    <form action="{{ url('/mahasiswa/' . $row->mhsw_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH"> 
        @csrf
        <table class="table">
            <tr>
                <td>NIK</td> 
                <td><input type="text" name="mhsw_nim" value="{{ $row->mhsw_nim }}"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="mhsw_nama" value="{{ $row->mhsw_nama }}"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <select name="mhsw_jurusan" class="form-control">
                        <option value="">-- JENIS KELAMIN --</option>
                        <option value="LAKI LAKI">LAKI LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                </td>
            </tr>
            <tr>
 <td>ALAMAT</td>
                <td><input type="text" name="mhsw_alamat" value="{{ $row->mhsw_alamat }}"></td>
            </tr>
            <tr>
                <td></td> 
                <td><input type="submit" value="UPDATE" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</div> 
@endsection