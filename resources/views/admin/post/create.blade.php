@extends('layouts.admin_layout')

@section('title', 'Добавить статью')



@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">




    <!-- Small boxes (Stat box) -->
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Добавить статью</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
    @if(session('success'))
    <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert"></button>
      <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
    </div>
    @endif
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class=" col-lg-12">
  <div class="card card-primary">

    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('post.store') }}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Название </label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Введите название категории" required>
        </div>

        <div class="form-group">
          <label>Выберите категорию</label>
          <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{$category->title}}</option>

            @endforeach
          </select>
        </div>


        <div class="form-group">
          <textarea name="text" class="editor"></textarea>
        </div>
        <div class="form-group">
          <label for="feature_image">Изображение поста</label>
          <img src="" alt="" class="img-uploaded" style="display: block;">
          <input type="text" id="feature_image" 
                  name="img" 
                  value="" class="form-control" >
          <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>
        </div>
      </div>


      <!-- <label for="feature_image">Feature Image</label>
      <input type="text" id="feature_image" name="feature_image" value="">
      <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a> -->

      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Добавить</button>
      </div>
    </form>
  </div>
</div>
<!-- /.row -->
@endsection