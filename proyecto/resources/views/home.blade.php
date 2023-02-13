 @if (auth::user())
   @if (auth::user()->iactivo !=1 )    
      @php
         header("Location: " . URL::to('/'), true, 302);
         exit();
      @endphp  
   @endif            
 @else
   @php
      header("Location: " . URL::to('/'), true, 302);
      exit();
   @endphp 
 @endif
 @extends('layouts.plantilla')
@section('content')
   <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
         <div class="card-body">

        </div>
     </div>    
   </div>
</div>

@endsection