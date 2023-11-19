<x-layout>
  
  
 


  {{-- Pagina del Team --}}
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center display-2 my-4 py-4">Il nostro Team:</h1>
      </div>
      @foreach($membri as $membro)
      <div class="col-12 col-md-3 mb-5">
        <div class="card" style="width: 18rem;">
          <img src="{{$membro['img']}}" class="card-img-top2" alt="cards">
          <div class="card-body text-center">
            <h5 class="card-title">{{$membro['name']}}</h5>
            <p class="card-text">{{$membro['role']}}</p>
            <a href="{{route('team.detail', ['membroName' => $membro['name']])}}" class="btn btn-primary">info</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>


</x-layout>