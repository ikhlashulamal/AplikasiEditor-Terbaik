@extends('page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Alternatif</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Alternatif</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/update/'.$alternatif->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="alternatif" class="col-sm-2 col-form-label">Alternatif</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alternatif" placeholder="Alternatif" value="{{ $alternatif->alternatif}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="peringkat" class="col-sm-2 col-form-label">C1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="peringkat" placeholder="Nilai Kriteria (Peringkat)" value="{{ $alternatif->jenis_tanaman}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ukuran" class="col-sm-2 col-form-label">C2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ukuran" placeholder="Nilai Kriteria (Ukuran)" value="{{ $alternatif->jenis_tanah}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="unduhan" class="col-sm-2 col-form-label">C3</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="unduhan" placeholder="Nilai Kriteria (Unduhan)" value="{{ $alternatif->kondisi_tanah}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="aktif" class="col-sm-2 col-form-label">C4</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="aktif" placeholder="Nilai Kriteria (Aktif)" value="{{ $alternatif->harga_pupuk}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="manfaat" class="col-sm-2 col-form-label">C5</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="manfaat" placeholder="Nilai Kriteria (Manfaat)" value="{{ $alternatif->harga_pupuk}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kelebihan" class="col-sm-2 col-form-label">C6</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kelebihan" placeholder="Nilai Kriteria (Kelebihan)" value="{{ $alternatif->kadar_air}}">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection