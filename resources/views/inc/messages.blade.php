
@if(count($errors) >0 ){
    @foreach($errors->all() as $error)
        <div>
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success')){
        <div>
            {{$success}}
        </div>
@endif

@if(session('error')){
    <div>
        {{$error}}
    </div>
@endif