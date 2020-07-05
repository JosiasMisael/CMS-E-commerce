<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           @if(session()->has('info'))
             <div class="alert alert-success">
               {{session('info')}}
            </div>
           @endif
        </div>
    </div>
</div>
