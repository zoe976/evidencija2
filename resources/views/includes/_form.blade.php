<div class="form-group">
    	{!! Form::label('name','Naziv:') !!}
    	{!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tuzilac','Tuzilac:') !!}
        {!! Form::text('tuzilac', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tuzeni','Tuzeni:') !!}
        {!! Form::text('tuzeni', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('broj_predmeta','Broj predmeta:') !!}
        {!! Form::text('broj_predmeta', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('sudija','Sudija:') !!}
        {!! Form::text('sudija', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('sudnica','Sudnica:') !!}
        {!! Form::text('sudnica', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    	{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
    </div>