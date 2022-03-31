
@extends('tmpt')
@section('isi')
    <div class="container">
        <div class = "col-">
        <h4 class="mb-3"> Daftar Buku</h4>
        
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
			
			    @foreach($buku as $key=> $data)
                <tr>
                    <th scope ="row">{{ $loop->iteration}}</th>
					<th>{{$data->id_buku}}</th>
					<th>{{$data->judul_buku}}</th>
					<th>{{$data->tahun}}</th>
					<th>{{$data->genre}}</th>
					<th>{{$data->nama_penulis}}</th>
                        <td>
                           <a href='delete/{{ $data-> id_buku}}' >delete</a>                            
                        </td>
                </tr>
                @endforeach
            </tbody>
         </table>    
        </div>
    </div>

 @endsection   
