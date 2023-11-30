@extends('admin-ui.layout.master')

@section('body-section')
<div class="row">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">категори шинэчлэх:</h4>
                                @foreach ($oneCategory as $c)
                                <form action="{{route('cat_update', $c->id)}}"   method="post"   class="form-horizontal form-material mx-2">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                       
                                        <div class="col-md-12">
                                            <input type="text" name="cat_name" value="{{$c->name}}"
                                                class="form-control form-control-line">
                                        </div>
                                    </div> 
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" name="submit" value="Insert" class="btn btn-success">
                                        </div>
                                    </div>
                                </form>     
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
@endsection