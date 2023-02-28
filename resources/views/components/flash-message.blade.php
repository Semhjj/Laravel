@if(session()->has('message'))
    <div style="position: absolute; top: 15px; left: 150px">
        <p>{{session('message')}}</p>
    </div>
@endif
