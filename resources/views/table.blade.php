@extends('layouts.main')

@section('mainlayout')
<div class="mt-3 container">
  <form class="row g-3"  method='post' actions='table'>
    @csrf
    <div class="col-md-6">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="col-md-6">
      <label for="tl" class="form-label">Tempat Lahir</label>
      <input type="text" class="form-control" id="tl" name="tl">
    </div>
    <div class="col-md-6">
      {{-- <div class="col-2">
          <div class="form-group">
              <label>Tanggal</label>
              <input type="text" id="datepicker" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#datepicker" autocomplete="off" />
          </div>
      </div> --}}
      
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal">
      
    </div>
    <div class="col-md-6">
      
        <label for="jk" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" id="jk" name="jk">
      
      {{-- <select class="form-select " size="3" aria-label=".form-select-lg example">
        <option selected>Jenis Kelamin</option>
        <option value="1">Laki - Laki</option>
        <option value="2">Perempuan</option> --}}
      </select>
    </div>
    <div class="col-md-6">
      
        <label for="prodi" class="form-label">Prodi</label>
        <input type="text" class="form-control" id="prodi" name="prodi">
      
      {{-- <select class="form-select " size="3" aria-label=".form-select-lg example">
        <option selected>Prodi</option>
        <option value="1">PTI</option>
        <option value="2">SI</option>
        <option value="3">MI</option>
        <option value="4">Ilkom</option>
      </select> --}}
    </div>
    <div class="col-md-6">
      <label for="hobi" class="form-label">Hobi</label>
      <input type="text" class="form-control" id="hobi" name="hobi">
    </div>
    <div class="col-md-6">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="textfield" class="form-control" id="alamat" name="alamat">
    </div>
   
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<br>
<br>
<br>
<br>
{{-- <div class="container">
  <div class=" d-flex me-3">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">NO</th>
              <th scope="col">Nama</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Prodi</th>
              <th scope="col">Hobi</th>
              <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody>
          
          <h1>Coba</h1>
          
          @foreach ($biodatas as $data)
          <tr>
            <th scope="row">{{ $data->id }}</th>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->tempat_lahir }}</td>
            <td>{{ $data->tanggal_lahir }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->prodi }}</td>
            <td>{{ $data->hobi}}</td>
            <td>{{ $data->alamat}}</td>

          </tr>
          @endforeach

        </tbody>
      </table>
      {{ $biodatas->links() }}
</div>
</div>
<script>
  CKEDITOR.replace( 'content' );
  </script> --}}

@endsection