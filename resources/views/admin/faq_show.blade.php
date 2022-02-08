@extends('layouts.back.master')

 @section('title')
            Faq Düzenle | Fatih
@endsection
 @section('sayfa')Faq Ekle @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Faq Düzenle</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body col-lg-12">
          @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
           @endif
            @if(session('hata'))
                    <div class="alert alert-danger">{{session('hata')}}</div>
           @endif
           @if($errors->any()) 
            <div class="alert alert-danger">
              @foreach($errors->all() as $e)
                        <li>{{$e}}</li>
                        @endforeach
            </div>
                        
            @endif
         <form action="{{route('admin_faq_update',['id'=>$faq->id])}}" method="post" >
                @csrf
                <div class="card-body">
                  <div class="row">
                     
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">Position</label>
                        <input type="number" name="position"  value="{{$faq->position}}"class="form-control" >
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Question</label>
                      <input type="text" name="question" value="{{$faq->question}}" class="form-control" >
                    </div>
                    
                  </div>
                  <div class="row">
                       <div class="col-lg-6">
                      <label for="exampleInputPassword1">Answer</label>
                      
                      <textarea id="summernote"name="answer"  name="editordata">{{$faq->answer}}</textarea>
                    </div>
                 </div>
                 <div class="row">
                   

                  
                    <div class="col-lg-6">
                        <label>Status</label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                          <option value="True" @if($faq->status=="True") selected="selected" @endif>True</option>
                          <option value="False" @if($faq->status=="False") selected="selected" @endif >False</option>
                        </select>
                   </div>
                  </div>
                 
                  <div class="row mt-3">
                    <div class="col-lg-6 ">
                      <button type="submit" class="form-control btn btn-primary">Kaydet</button>
                    </div>
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                
              </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  @endsection