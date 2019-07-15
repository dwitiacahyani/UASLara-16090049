@extends('admin-template')

@section('content-wrapper')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Karyawan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('DataKaryawan.create')}}"><i class="btn btn-primary"></i>Tambah</a></li>
      </ol>
    </section>
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data karyawan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID nama</th>
                  <th>nama</th>
                  <th>alamat</th>
                  <th>Jenis kelamin</th>
                  <th>no. Telp</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no= 1; ?>
                @foreach($DataKaryawan as $DataKaryawan)
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$DataKaryawan->title}}</td>
                  <td>{{$DataKaryawan->description}}</td>
                  <td>perempuan</td>
                  <td>0852381439</td>
                  <td>
                    <a href="{{route('DataKaryawan.edit',$DataKaryawan->id)}}">Edit</a>
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">Hapus</a>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                                 aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Hapus
                                                                Kategori</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('DataKaryawan.destroy',$DataKaryawan->id)}}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <p>
                                                                    Apakah Anda Mau Menghapus Karyawan ?
                                                                </p>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Ya
                                                                    </button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Kembali
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                  </td>
                </tr>
                <?php $no++ ?>
                @endforeach
                
                </tbody>
                <tfoot>
               
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    @stop