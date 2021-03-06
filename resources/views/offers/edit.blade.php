@extends('layouts.main')
@section('content')
    <div class="container" style="padding-top: 20px">
        <div>
            <form method="post" action=" ">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-auto my-1"  {{ $errors->has('type_object') ? ' has-error' : '' }}>
                        <label class="mr-sm-2" for="type_object">Тип об'єкта</label>
                        <select class="custom-select mr-sm-2" id="type_object" name = "type_object" >
                            @foreach($typesObject as $object)
                                <option value="{{$offers['type_object']}}" {{$offers['type_object']===$object?'selected':''}}>{{$offers['type_object']}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('type_object'))
                            <div class="text-danger">
                                <strong>{{ $errors->first('type_object') }}
                                </strong>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="col" {{ $errors->has('price') ? ' has-error' : '' }}>
                        <label for="price">Ціна</label>
                        <input type="text" class="form-control" name ="price" id="price" placeholder="Вкажіть ціну" value="{{isset($offers)?$offers['price']:''}}">
                        @if ($errors->has('price'))
                            <div class="text-danger">
                                <strong>{{ $errors->first('price') }}
                                </strong>
                            </div>
                        @endif
                    </div>
                    <div class="col">
                        <label class="mr-sm-2" for="type_price" {{ $errors->has('type_price') ? ' has-error' : '' }}>Тип валюти</label>
                        <select class="custom-select mr-sm-2" name="type_price" id="type_price">
                           @foreach($typePrices as $Price)
                                <option value="{{$Price->name}}" {{$offers['type_price']===$Price->name?'selected':''}}>{{$Price->name}}</option>
                           @endforeach
                        </select>
                        @if ($errors->has('type_price'))
                            <div class="text-danger">
                                <strong>{{ $errors->first('type_price') }}
                                </strong>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row" style="padding-top: 30px;">
                    <div class="col">
                        <label class = "form-group"  style="padding-right: 30px">Вказати тип стін </label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="type_wall" name="type_wall" value="panel"  {{($offers['type_wall']==='panel' ? 'checked':'')}} class="custom-control-input">
                            <label class="custom-control-label" for="type_wall">Панель</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="type_wall1" name="type_wall" value="brick" {{($offers['type_wall']==='brick' ?'checked':'')}} class="custom-control-input">
                            <label class="custom-control-label" for="type_wall1">Цегла</label>
                        </div>
                    </div>
                    <div class="col {{ $errors->has('number_rooms') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label for="number_rooms" >Кількісь кімнат</label>
                            <input type="text" name="number_rooms" class="form-control" id="number_rooms" value="{{isset($offers)?$offers['number_rooms']:''}}" style="float: right; width: 250px">
                        </div>
                        @if ($errors->has('number_rooms'))
                            <div class="text-danger">
                                <strong>{{ $errors->first('number_rooms') }}
                                </strong>
                            </div>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label for="user_id">Ім'я</label>
                        <select class="custom-select mr-sm-2" name="user_id" id="user_id">
                            @foreach($users as $user)
                                <option value="{{$user->id}}" {{($offers['user_id']==$user->id?'selected':'')}}>{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone">Телефон</label>
                        <input type="text" name="phone" class="form-control" id="phone" value="{{old('phone',(isset($offers)?$offers['phone']:' '))}}">
                        @if ($errors->has('phone'))
                            <div class="text-danger">
                                <strong>{{ $errors->first('phone') }}
                                </strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="information">Додаткова інформація</label>
                        <textarea name="information" class="form-control" id="information" rows="3">{{old('information',(isset($offers)?$offers['information']:' '))}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="remember" value="{{App\Models\Offer::REMEMBER_FALSE}}">
                        <input type="checkbox" name="remember" value="{{App\Models\Offer::REMEMBER_TRUE}}" id="remember" {{$offers['remember']==='ON'?'checked':''}}>
                        <label for="remember">Запамятати мане</label>
                    </div>
                    <button type="submite" class="btn btn-primary">Опублікувати</button>
            </form>
        </div>
      </div>
    </div>
@stop