@extends('admin.layouts.one_col')

@section('title')
    <h1>Edit Album {{ $album->name }}</h1>
@stop

@section('style')
    @parent
@stop

@section('script')
    @parent

@stop

@section('content')

    <div class="mTop10">
        {!! Form::model($album,['action' => ['Admin\AlbumController@update',$album->id], 'files'=>true, 'method' => 'patch'], ['class'=>'form-horizontal']) !!}

        <div class="form-group">
            {!! Form::label('category', 'Album Category', ['class' => 'control-label']) !!} <span class="red">*</span>
            {!! Form::select('category_id', $categories,null,array('class'=>'form-control')) !!}
        </div>


        <div class="form-group">
            {!! Form::label('name', 'Album Name', ['class' => 'control-label']) !!} <span class="red">*</span>
            {!! Form::text('name_ar', null, ['class' => 'form-control','placeholder'=>'Category Name']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
            {!! Form::textarea('description_ar', null, ['class' => 'form-control editor','placeholder'=>'Category Description']) !!}
        </div>

        <div class="form-group">
            <span class="btn btn-default fileinput-button">
                <i class="glyphicon glyphicon-plus"></i>
                <span>Select Cover Image...</span>
                <!-- The file input field used as target for the file upload widget -->
                <input id="cover" type="file" name="cover" class="cover form-control">
            </span>
        </div>


        <div class="form-group">
            {!! Form::submit('Save Draft', ['class' => 'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}

        @include('admin.modules.photo._delete',['record' => $album])

    </div>

@stop