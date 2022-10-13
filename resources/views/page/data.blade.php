@extends('layouts.main')

@section('mainlayout')
<br>
<div class="container">
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
          {{-- <h1>Coba</h1> --}}
          
          {{-- @forelse ($biodatas as $data)
              
         
          @endforelse --}}
        
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
            {{-- <td>{{ $data->postingan->Judul }}</td> --}}
          </tr>
          @endforeach

        </tbody>
      </table>
      {{ $biodatas->links() }}
</div>
</div>
{{-- <script>
  CKEDITOR.replace( 'content' );
  </script> --}}
  @endsection