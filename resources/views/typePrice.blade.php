@extends('layouts.main')
@section('content')
    <div class="container" style="padding-top: 20px">
        <div>
            <form method="post" action=" ">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="type_price">Тип валюти</label>
                        <input type="text" name="type_price" class="form-control" id="type_price" placeholder="Ведіть тип валюти">
                    </div>
                    <button type="submite" class="btn btn-primary">Опублікувати</button>
            </form>
        </div>
    </div>
    </div>
@stop