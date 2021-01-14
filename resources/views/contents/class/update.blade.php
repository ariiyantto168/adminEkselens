<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Class</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active">Class</li>
              <li class="breadcrumb-item active"> Update Class</li>
              <li class="breadcrumb-item active">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">Delete</button>
              </li>
              </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <br>
          <form action="{{ url('lecture/class/update/'.$class->idclass) }}" role="form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                  @include('contents.allmessage')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                              Update
                            </h3>
                        </div>
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Categories</label>
                            <div class="col-sm-10">
                              <select name="idcategories" id="select2" class="form-control">
                                <option value=""> -- select categories -- </option>
                                @foreach ($categories as $cat)
                                    <option value="{{$cat->idcategories}}" @if ($cat->idcategories == $class->idcategories) 
                                        selected
                                    @endif>{{$cat->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Class Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="{{$class->name}}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Class Duration (minute)</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" name="duration" value="{{$class->duration}}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Class Image</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control-file" id="images" name="images" accept="image/svg,image/jpeg">
                              <small class="text-danger">Extension must jpg, jpeg</small>
                              <br>
                              <img class="img-rounded zoom" id="img-upload" src="{{env('PATH_URL')}}image/{{$class->images}}" width="100">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Name Mitra</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="namemitra" value="{{$class->namemitra}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Description Mitra</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" name="descriptionmitra" cols="10" rows="2">{{$class->descriptionmitra}}</textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Image Mitra</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control-file" id="imagesmitra" name="imagesmitra" accept="image/svg,image/jpeg">
                              <small class="text-danger">Extension must jpg, jpeg</small>
                              <br>
                              <img class="img-rounded zoom" id="img-upload" src="{{env('PATH_URL')}}mitra/{{$class->imagesmitra}}" width="100">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Instructor</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="instructor" value="{{$class->instructor}}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Role Instructor</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="roleinstructor" value="{{$class->roleinstructor}}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">About Instructor</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="tutor" value="{{$class->tutor}}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Images Instructor</label>
                            <div class="col-sm-10">
                              <input type="file" id="imagesinstructor" accept="image/svg,image/jpeg" class="form-control-file" name="imagesinstructor">
                              <small class="text-danger">Extension must jpg</small>
                              <br>
                              <img class="img-rounded zoom" id="img-upload" src="{{env('PATH_URL')}}instructor/{{$class->imagesinstructor}}" width="100">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Description Class</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" name="description" cols="10" rows="2" required>{{$class->description}}</textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="price" value="{{$class->price}}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Rating</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" name="rating" value="{{$class->rating}}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label">Demo</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control-file" id="demo" name="demo" accept="video/mp4">
                              <small class="text-danger">Extension must MP4</small>
                              <br>
                              <iframe  src="{{env('PATH_URL')}}demo/{{$class->demo}}" frameborder="0"></iframe>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name_materi" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                              <a href="{{ url('class') }}" class="btn btn-warning" >Cancel </a>
                              <div class="float-right">
                                <input type="submit" class="btn btn-success" value="Save">
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>  
                </div>
            </div>
          </form>
          
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
 <!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">Delete Class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure Delete Class ?
      </div>
      <div class="modal-footer">
          <form action="{{ url('lecture/class/delete/'.$class->idclass) }}" role="form" method="post">
            @method('delete')
            @csrf
          <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Yes</button>
        </form>
      </div>
    </div>

  </div>
</div> 

  <script>
      {{--  $('#addrow').on('click',function(){
        var ais = $('#appendindex').val();
        $('#appendindex').val(parseInt(ais)+1);
  
        $('#count').append('<div class="container-fluid">'
              +'<div class="row" id="row_'+ais+'">'
                +'<div class="col-12">'
                  +'<div class="card">'
                    +'<div class="card-header">'
                      +'<h3 class="card-title">Materi</h3>'
                    +'</div>'
                    +'<div class="card-body">'
                      +'<div class="form-group row">'
                       +'<label for="name_materi" class="col-sm-2 col-form-label">Name</label>'
                        +'<div class="col-sm-10">'
                          +'<input type="text" class="form-control" name="name_materi[]" id="name_materi_'+ais+'" placeholder="Name Materi">'
                        +'</div>'
                      +'</div>'
                      +'<div class="form-group row">'
                        +'<label class="col-sm-2 col-form-label"></label>'
                        +'<div class="col-sm-10">'
                          +'<button type="button" id="addrowsub_'+ais+'" class="btn btn-xs btn-secondary"><i class="fas fa-plus size:2x"></i> Add Sub Materi</button>'
                        +'</div>'
                      +'</div>'
                    +'</div>'
                  +'</div>'  
                +'</div>'    
              +'</div>'
            +'</div>'
          )
          sub_materi(ais);
      });
      
      function sub_materi(ais){
        $('#table_'+ais+'').append('<tr>'
          +'<td>'
            +'dsdsfsdf'
          +'</td>'    
        +'</tr>');
        console.log(ais)
      }  --}}
  </script>
  
  {{-- batasan size images instructor --}}
  <script>
  $(document).ready(function() {
      maxFileSize = 10 * 1024 * 1024 / 2; // 5 mb
  
      $('#imagesinstructor').change(function() {
        fileSize = this.files[0].size;
  
        if (fileSize > maxFileSize) {
          this.setCustomValidity("You can upload only files under 5 MB");
          this.reportValidity();
        } else {
          this.setCustomValidity("");
        }
      });
    });
  </script>
  
    {{-- batasan size images --}}
    <script type="text/javascript">
      $(document).ready(function() {
        maxFileSize = 10 * 1024 * 1024 / 2; // 5 mb
    
        $('#images').change(function() {
          fileSize = this.files[0].size;
    
          if (fileSize > maxFileSize) {
            this.setCustomValidity("You can upload only files under 5 MB");
            this.reportValidity();
          } else {
            this.setCustomValidity("");
          }
        });
      });
    </script>
  
  {{-- batasan demo max size --}}
  <script type="text/javascript">
    $(document).ready(function() {
      maxFileSize = 10 * 1024 * 1024 * 3; // 30 mb
  
      $('#demo').change(function() {
        fileSize = this.files[0].size;
  
        if (fileSize > maxFileSize) {
          this.setCustomValidity("You can upload only files under 30 MB");
          this.reportValidity();
        } else {
          this.setCustomValidity("");
        }
      });
    });
  </script>