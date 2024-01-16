@extends('layouts.admin_layout')

@section('title', 'Редактировать статью')



@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">




    <!-- Small boxes (Stat box) -->
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Редактировать статью: {{ $post->title }}</h1>
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
    <form action="{{ route('post.update', $post->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Название </label>
          <input type="text" value="{{ $post['title'] }}" class="form-control" id="exampleInputEmail1" name="title" 
          placeholder="Введите название категории" required>
        </div>

        <div class="form-group">
          <label>Выберите категорию</label>
          <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{ $category->id }}" @if ($category->id == $post->category_id) selected 
                @endif>
                {{$category->title}}
            </option>

            @endforeach
          </select>
        </div>


        <div class="form-group">
          <textarea name="text" class="editor">{{$post['description']}}
                  </textarea>
        </div>
        <div class="form-group">
          <label for="feature_image">Изображение поста</label>
          <img src="/{{ $post['image'] }}" alt="" class="img-uploaded" style="display: block;">
          <input type="text" id="feature_image" 
                  value="{{ $post['image'] }}" name="img" 
                  value="" class="form-controll" >
          <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Сохранить</button>
      </div>
    </form>
  </div>
</div>
<!-- /.row -->
@endsection