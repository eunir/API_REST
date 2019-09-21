<div class="panel-body">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@if(session('sucesso'))
    <div class="alert alert-success">
        <p>{{session('sucesso')}}</p>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        <p>{{session('error')}}</p>
    </div>
@endif
          