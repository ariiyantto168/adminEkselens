<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quiz Class</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Quiz</li>
              <li class="breadcrumb-item active"><a href="{{ url('quiz/quizclass') }}">Quiz Class</a></li>
              <li class="breadcrumb-item active">Create-new</li>

            </ol>
          </div><!-- /.col -->      
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create</h3>
            </div>
            <div class="card-body">
              @include('contents.allmessage')
                <form role="form" class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('quiz/quizclass/create-new') }}">  
                  @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Class</label>
                          <div class="col-sm-5">
                            <select name="idclass" id="select2" class="form-control">
                            <option value=""> -- select class -- </option>
                            @foreach ($class as $cls)
                            <option value="{{$cls->idclass}}">{{$cls->name}}</option>
                          @endforeach
                          </select>
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Nilai</label>
                          <div class="col-sm-5">
                            <input type="number" name="nilai" placeholder="Example : 20" class="form-control" required>
                          </div>
                      </div>
                      <br>
                      <div class="modal-body">
                        <div class="form-group row">
                            <button type="button" id="addquizclass" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#classquiz">Add Question</button>                
                        </div>
                        {{-- open code for quiz class --}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <small><strong>1</strong></small>
                                                        </td>
                                                        <td>
                                                            <small><strong>Question</strong></small>
                                                            <input type="text" class="form-control" name="question[]" id="question_1"  required>
                                                        </td>
                                                        <td>
                                                            <small><strong>Answer</strong></small>
                                                            <input type="text" class="form-control" name="answer[]" id="answer_1" required>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value="2" id="index_quizclass">
                    </div>
                    {{-- close code for add quiz --}}
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" value="upload">Submit</button>
                    </div>
                </form>
            </div>
        </div>  
    
      </div>
    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </div>
<script type="text/javascript">

    // // delete row
    // $('#table').on('click', '.del' ,function(){
    //   $(this).closest('tr').remove();
    // });

    //delete create table 
    $('#table').on('click', '.del-add-quiz' ,function(){
        $(this).closest('tr').remove();
        var quiz_num = $('#index_quizclass').val();
        $('#index_quizclass').val(parseInt(quiz_num)-1);
        $('#addquizclass').attr('disabled',false);
    });

    $('#addquizclass').on('click', function(){
      var add = $('#index_quizclass').val();
      var contens = $('#index_quizclass').val();
      $('#index_quizclass').val(parseInt(add)+1);
      if(parseInt(contens) < 11){
        $('#index_quizclass').val(parseInt(contens)+1);
            //add row
            $('#table').append('<tr>'
                    +'<td>'
                        +'<small><strong>'+contens+'</strong></small>'
                        +'<br>'
                        +'<a class="del-add-quiz btn btn-sm"><i class="fas fa-trash"></i></a>'
                    +'</td>'
                    +'<td>'
                        +'<small><strong>Question</strong></small>'
                        +'<input type="text" class="form-control" name="question[]" id="question_'+contens+'" required>'
                    +'</td>'
                    +'<td>'
                            +'<small><strong>Answer</strong></small>'
                            +'<input type="text" class="form-control" name="answer[]" id="answer_'+contens+'" required>'
                    +'</td>'
                +'</tr>'
            );
        }else{
            $('#addquizclass').attr('disabled',true);
        }
    })

</script>