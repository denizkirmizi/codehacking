@extends('layouts.admin')





@section('content')

    <h1>Create Post</h1>


        {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store', 'files'=>true]) !!}


                <div class="form-group">

                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null,['class'=>'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('category_id', 'Category:') !!}
                    {!! Form::select('category_id',array(1=> 'PHP',0=>'JavaScript'), null,['class'=>'form-control']) !!}

                </div>

                  <div class="form-group">

                          {!! Form::file('photo_id', null,['class'=>'file']) !!}
                          {!! csrf_field() !!}




                  </div>


                   <div class="form-group">

                       {!! Form::label('body', 'Description:') !!}
                       {!! Form::textarea('body',null,['class'=>'form-control','rows'=>3]) !!}

                   </div>



                 <div>
                     {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
                 </div>


            {!! Form::close() !!}

<div class="row">

    @include('includes.form_error')

</div>



@stop