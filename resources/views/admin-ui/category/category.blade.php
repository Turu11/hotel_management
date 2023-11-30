@extends('admin-ui.layout.master')

@section('top-section')
<!-- <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Категори</h3>
                    </div>
                    <div class="col-md-7 align-self">
                        <a href="{{route('cat_create')}}" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down">Категори
                            нэмэх</a>
                    </div>
                </div> -->
@endsection

@section('body-section')
<!-- ============================================================== -->
<div class="row">
                    <!-- column -->
                    <!-- <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Категори</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>№</th>
                                                <th>Категори нэр</th>
                                                <th>Засах</th>
                                                <th>Устгах</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($category as $cat)
                                            
                                            <tr>
                                                <td>{{$cat->id}}</td>
                                                <td>{{$cat->name}}</td>
                                                <td><a href="{{route('cat_edit',$cat->id)}}">Засах</a><i class="bi-alarm"></i></td>
                                                <td>
                                                    <form action="{{route('cat_delete', $cat->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="submit" value="Delete">
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
@endsection