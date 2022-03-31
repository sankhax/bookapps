@extends('tmpt')
@section('isi')
    <div class="container">
        
        <div class = "col">
            <h4 class="mb-3"> Tambah Buku</h4>
            
            <form method="post" action="create">
            @csrf
                <div class = "mb-3">
                    <label for="judul buku" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" placeholder="judul buku" name="judul">
                </div>
                <div class = "mb-3">
                    <label for="tahun" class="form-label">tahun</label>
                    <input type="text" class="form-control" id="tahun" placeholder="tahun" name="tahun">
                </div>
                <div class = "mb-3">
                    <label for="genre" class="form-label">genre</label>
                    <input type="text" class="form-control" id="genre" placeholder="genre" name="genre">
                </div>
              <div class="mb-3">
					<label for="penulis" class="form-label">penulis</label>
					<select name="penulis" id="penulis" class="form-control">
                    @foreach($penulis as $key=> $data)
					<option value= {{$data->id_penulis}}>{{$data->nama_penulis}}</option>
                    @endforeach 
					
                  </select>
				  
                </div>  
    
                <div class="CTA">
                <input herf = "view/home" type="submit" value="Tambah">
               </div>

            </form>
        </div>
    </div>
        
    </div>
 @endsection