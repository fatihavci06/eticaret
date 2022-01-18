@extends('layouts.back.master')

 @section('title')
            Ürün Ekle | Fatih
@endsection
 @section('sayfa')Ürün Ekle @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Ürün Ekle</h3>

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
         <form action="{{route('admin_product_create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="row">
                      <div class="col-lg-6">
                        <label for="exampleInputEmail1">Category</label>
                        <select class="form-control select2" name="category_id" style="width: 100%;">
                        <option  selected="selected">Seçiniz</option>
                        
                        @foreach($categories as $c)
                          <option value="{{$c->id}}">{{$c->title}}</option>
                        @endforeach
                        
                      </select>
                      </div>
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">Title</label>
                        <input type="text" name="title"  value="{{old('title')}}"class="form-control" >
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Keywords</label>
                      <input type="text" name="keywords" value="{{old('keywords')}}" class="form-control" >
                    </div>
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Description</label>
                      <input type="text" name="description" value="{{old('description')}}" class="form-control" >
                    </div>
                  </div>
                  <div class="row">
                       <div class="col-lg-6">
                        <label for="exampleInputPassword1">İmage</label>
                        <input type="file" name="image" class="form-control" >
                      </div>
                       <div class="col-lg-6">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="number" name="price" value="{{old('price')}}" class="form-control" >
                      </div>
                 </div>
                 <div class="row">
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">Quantity</label>
                        <input type="number" name="quantity" value="{{old('quantity')}}" class="form-control" >
                      </div>
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">Minquantity</label>
                        <input type="number" name="minquantity" value="{{old('minquantity')}}" class="form-control" >
                      </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Tax</label>
                      <input type="number" name="tax" value="{{old('tax')}}" class="form-control" >
                    </div>
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Detail</label>
                      
                      <textarea id="summernote"name="detail"  name="editordata">{{old('detail')}}</textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Slug</label>
                      <input type="text" name="slug" value="{{old('slug')}}" class="form-control" >
                    </div>

                  
                    <div class="col-lg-6">
                        <label>Disabled Result</label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                          <option value="True" @if(old("status")=="True") selected="selected" @endif>True</option>
                          <option value="False" @if(old("status")=="False") selected="selected" @endif >False</option>
                        </select>
                   </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-12 ">
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