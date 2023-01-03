@if(session('msg'))
<div class="alert alert-success msg" role="alert">
        <p>{{ session('msg') }}</p>
  </div>
@elseif(session('msg2'))
<div class="alert alert-danger msg" role="alert">
        <p>{{ session('msg2') }}</p>
  </div>
@endif
