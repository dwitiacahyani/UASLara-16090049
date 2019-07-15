@extends('admin-template')

@section('content-wrapper')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Obat
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Add Data Obat</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
                <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-body">
              <form method="post" enctype="multipart/form-data" action="{{route('DataObat.update',$DataObat->id) }}">
              {{csrf_field()}}
              {{method_field('PATCH')}}
                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" value="{{$DataObat->title}}" >
                </div>
                

                <!-- textarea -->
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" value='{{$DataObat->deskripsi}}' rows="3" placeholder="Enter ...">{{$DataObat->description}}</textarea>
                </div>

                <div class="form-group">
                  <label>Foto Obat</label>
                  <input type="hiddem" name="old_image" class="form-control" value="{{$DataObat->image}}" placeholder="Enter ..." >
                  <input type="file" class="form-control filestyle"  name="image" data-buttonname="btn-secondary">
                </div>
                 
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    @stop