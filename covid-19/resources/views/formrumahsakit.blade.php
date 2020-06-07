<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

    <title>COVID-19</title>
  </head>
  <body>

      <div class="container ">
        <h2 class="alert alert-primary text-center mt-5 text-dark"> Tambahkan Daftar Rumah Sakit Rujukan Covid-19 </h2>
          <form action="{{ url('/rumahsakit', @$rumahsakit->id) }}" method="POST">
            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                  @csrf

                  @if(!empty($rumahsakit))
                      @method('PATCH')
                  @endif
              <label>Nama Rumah Sakit</label>
            </div>
            <div class="col-md-9">
              <input type="text" name="nama" value="{{ old('nama', @$t_rumahsakit->nama) }}" class="form-control">
            </div>
          </div>
        </div>

         <div class="form-group">
              <div class="row">
                <div class="col-md-3">
              <label>Provinsi</label>
            </div>
            <div class="col-md-9">
              <select class="form-control" name="provinsi">
            <option value="" {{old('provinsi', @$rumahsakit->provinsi) == '' ? 'selected' : '' }}>- Pilih Provinsi -</option>
            <option value="Banten" {{old('provinsi', @$rumahsakit->provinsi) == 'Banten' ? 'selected' : '' }}>Banten</option>
            <option value="DKI Jakarta" {{old('provinsi', @$rumahsakit->provinsi) == 'DKI Jakarta' ? 'selected' : '' }}>DKI Jakarta</option>
            <option value="Jawa Barat">Jawa Barat </option> 
            <option value="Jawa Tengah">Jawa Tengah </option>
            <option value="Jawa Timur">Jawa Timur</option>
            <option value="DI Yogyakarta">DI Yogyakarta</option>
            <option value="Nanggroe Aceh Darussalam">Nanggroe Aceh Darussalam</option>
            <option value="Sumatera Utara">Sumatera Utara</option>
            <option value="Sumatera Barat">Sumatera Barat</option> 
            <option value="Riau">Riau</option> 
            <option value="Kepulauan Riau">Kepulauan Riau</option> 
            <option value="Jambi">Jambi</option> 
            <option value="Bengkulu">Bengkulu</option> 
            <option value="Sumatera Selatan">Sumatera Selatan</option> 
            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option> 
            <option value="Lampung">Lampung</option>
            <option value="Bali">Bali</option> 
            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option> 
            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
            <option value="Kalimantan Barat">Kalimantan Barat</option> 
            <option value="Kalimantan Selatan">Kalimantan Selatan</option> 
            <option value="Kalimantan Tengah">Kalimantan Tengah</option> 
            <option value="Kalimantan Timur">Kalimantan Timur</option> 
            <option value="Kalimantan Utara">Kalimantan Utara</option>
            <option value="Gorontalo">Gorontalo</option> 
            <option value="Sulawesi Barat">Sulawesi Barat</option> 
            <option value="Sulawesi Selatan">Sulawesi Selatan</option> 
            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option> 
            <option value="Sulawesi Tengah">Sulawesi Tengah</option> 
            <option value="Sulawesi Utara">Sulawesi Utara</option>
            <option value="Maluku">Maluku</option> 
            <option value="Maluku Utara">Maluku Utara</option>
            <option value="Papua">Papua</option> 
            <option value="Papua Barat">Papua Barat</option> 
          </select>
            </div>
          </div>
        </div>

         <div class="form-group">
              <div class="row">
                <div class="col-md-3">
              <label>Alamat</label>
            </div>
            <div class="col-md-9">
              <input type="text" name="alamat" class="form-control">
            </div>
          </div>
        </div>

         <div class="form-group">
              <div class="row">
                <div class="col-md-3">
              <label>Telepon</label>
            </div>
            <div class="col-md-9">
              <input type="text" name="telp" class="form-control">
            </div>
          </div>
        </div>

         <div class="form-group">
              <div class="row">
                <div class="col-md-3">
              <label>Faximile</label>
            </div>
            <div class="col-md-9">
              <input type="text" name="fax" class="form-control">
            </div>

              <div class="button col-md-3">
            <button class="btn btn-primary mt-5" type="submit">Submit</button>
            <button class="btn btn-warning mt-5" type="button"><a href="{{ url('/rumahsakit/') }}">Back</a></button>
              </div>

          </div>
        </div>
          </form>
      </div>

    
  </body>
</html>