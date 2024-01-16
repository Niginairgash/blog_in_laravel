@extends('layouts.admin_layout')

@section('title', 'Все категории')



@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">




         <!-- Small boxes (Stat box) -->
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все категории</h1>
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
 <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 20%">
                          Project Name
                      </th>
                      
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)

            
                  <tr>
                      <td>
                          {{ $category->id }}
                      </td>
                      <td>
                          <a>
                          {{ $category->title }}
                          </a>
                         
                      </td>
                 
                      <td class="project-actions text-right">
                         
                          <a class="btn btn-info btn-sm" href="{{ route('category.edit', $category->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <form action="{{route('category.destroy', $category->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm delete-btn">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
              
                 
                
                 
              </tbody>
          </table>
        </div>
             
</div>
</div>
        <!-- /.row -->
@endsection