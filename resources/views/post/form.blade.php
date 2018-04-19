<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    <label for="titulo" class="col-md-4 control-label">{{ 'Titulo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="titulo" type="text" id="titulo" value="{{ $post->titulo or ''}}" >
        {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('autor') ? 'has-error' : ''}}">
    <label for="autor" class="col-md-4 control-label">{{ 'Autor' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="autor" type="text" id="autor" value="{{ $post->autor or ''}}" >
        {!! $errors->first('autor', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('data_publicacao') ? 'has-error' : ''}}">
    <label for="data_publicacao" class="col-md-4 control-label">{{ 'Data Publicacao' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="data_publicacao" type="date" id="data_publicacao" value="{{ $post->data_publicacao or ''}}" >
        {!! $errors->first('data_publicacao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('conteudo') ? 'has-error' : ''}}">
    <label for="conteudo" class="col-md-4 control-label">{{ 'Conteudo' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="conteudo" type="textarea" id="conteudo" >{{ $post->conteudo or ''}}</textarea>
        {!! $errors->first('conteudo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
