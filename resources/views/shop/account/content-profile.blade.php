<form class="form-horizontal" style="background: red;">
    <div class="col col-xs-12">
      <div class="form-group">
        <label>Nama :</label>
        <input class="form-control" type="text" value="{{ Auth::user()->name }}"/>
      </div>

      <div class="form-group">
        <label>Email :</label>
        <input class="form-control" type="text" value="{{ Auth::user()->email}}" />
      </div>

      <div class="form-group">
        <label>Nomor Telphone :</label>
        <input class="form-control" type="text" value="{{ Auth::user()->no_telp}}" />
      </div>

      <div class="form-group">
        <label>Alamat :</label>
        <textarea class="form-control">{{ Auth::user()->alamat }}</textarea>
      </div>

      <div class="form-group">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                                    Simpan
        </button>

        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                                    Cancel
        </button>
      </div>
    </div>
  </form>
