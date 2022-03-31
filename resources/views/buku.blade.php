<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


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
                           <a href="">delete</a>                            
                        </td>
                </tr>
                @endforeach
            </tbody>
         </table>


		

