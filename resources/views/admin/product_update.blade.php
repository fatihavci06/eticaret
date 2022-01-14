@extends('layouts.back.master')

 @section('title')
            Ürün Düzenle | Fatih
@endsection
 @section('sayfa')Ürün Düzenle @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Ürün Düzenle</h3>

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
         <form action="{{route('admin_product_update',$product->id)}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="row">
                      <div class="col-lg-6">
                        <label for="exampleInputEmail1">Category</label>
                        <select class="form-control select2" name="category_id" style="width: 100%;">
                        <option  selected="selected">Seçiniz</option>
                        
                        @foreach($categories as $c)
                          <option value="{{$c->id}}" @if($c->id==$product->category_id) selected="selected" @endif>{{$c->title}}</option>
                        @endforeach
                        
                      </select>
                      </div>
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">Title</label>
                        <input type="text" name="title" class="form-control" value="{{$product->title}}" >
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Keywords</label>
                      <input type="text" name="keywords" class="form-control" value="{{$product->keywords}}" >
                    </div>
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Description</label>
                      <input type="text" name="description" class="form-control" value="{{$product->description}}" >
                    </div>
                  </div>
                  <div class="row">
                       <div class="col-lg-6">
                        <label for="exampleInputPassword1">İmage</label>
                        <input type="text" name="image" class="form-control" value="{{$product->image}}">
                      </div>
                       <div class="col-lg-6">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="number" name="price" class="form-control" value="{{$product->price}}">
                      </div>
                 </div>
                 <div class="row">
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">Quantity</label>
                        <input type="number" name="quantity" class="form-control" value="{{$product->quantity}}">
                      </div>
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">Minquantity</label>
                        <input type="number" name="minquantity" class="form-control" value="{{$product->minquantity}}">
                      </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Tax</label>
                      <input type="number" name="tax" class="form-control" value="{{$product->tax}}">
                    </div>
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Detail</label>
                      <input type="text" name="detail" class="form-control" value="{{$product->detail}}">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Slug</label>
                      <input type="text" name="slug" class="form-control" value="{{$product->slug}}">
                    </div>

                  
                    <div class="col-lg-6">
                        <label>Disabled Result</label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                          <option value="True" @if($product->status=='True') selected="selected" @endif >True</option>
                          <option value="False" @if($product->status=='False') selected="selected" @endif >False</option>
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