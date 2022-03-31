@extends('tmpt')
@section('isi')

<div class="container">
<div class = "col">
		<h4 class="mt-3 mb-3"> List Penulis</h4>
		<table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id Penulis</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kota Asal</th>
					<th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
			    @foreach($penulis as $key=> $data)
                <tr>
                    <th scope ="row">{{ $loop->iteration}}</th>
					<th>{{$data->id_penulis}}</th>
					<th>{{$data->nama_penulis}}</th>
					<th>{{$data->kota_asal}}</th>
                        <td>
                           <a href='delete/{{ $data-> id_penulis}}' >delete</a>                            
                        </td>
                </tr>
                @endforeach
            </tbody>
         </table>
		 
			<h4 class="mt-3 mb-3"> Tambah Penulis</h4>
            <form method="post" action="penulis">
            @csrf
                <div class = "mb-3">
                    <input type="text" class="form-control" id="nama" placeholder="Nama Penulis" name="nama">
                </div>
                <div class = "mb-3">
                    <label for="asal" class="form-label">Kota Asal</label>
                    <input type="text" class="form-control" id="asal" placeholder="Kota Asal" name="asal">
                </div> 
    
                <div class="CTA">
                <input herf = "view/penulis" type="submit" value="Tambah">
               </div>
            </form>
			
        </div>
</div>
@endsection