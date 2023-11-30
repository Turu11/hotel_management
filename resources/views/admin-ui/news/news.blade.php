@extends('admin-ui.layout.master')

@section('top-section')
<div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor"> Бүртгэл :</h3>
                    </div>
                    <div class="col-md-7 align-self">
                        <a href="{{route('news_create')}}"
                            class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Бүртгэл нэмэх:</a>
                    </div>
                </div>
@endsection

@section('body-section')
<div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>№</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Зураг</th>
                                                <th>Идэвхитэй эсэх</th>
                                                <th>Шинэчлэх</th>
                                                <th>Устгах</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allNews as $n)
                                            <tr>
                                                <td>{{$n->id}}</td>
                                                <td>{{$n->title}}</td>
                                                <td>{{$n->description}}</td>
                                                <td><img src="{{asset($n->image)}}" width= "30%"></td>
                                                <td>Идэвхитэй</td>
                                                <td>Шинэчлэх</td>
                                                <td>Устгах</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection