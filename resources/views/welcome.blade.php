<x-layout>


  
  {{-- Card telefoni --}}
  <div class="container">
    <div class="row">
      <h2 class="text-center display-2 mt-5 mb-5">I nostri telefoni:</h2>
      @foreach($telefoni as $telefono)
      <div class="col-12 col-md-3 py-4">
        <div class="card" style="width: 18rem;">
          <img src="{{$telefono['img']}}" class="card-img-top mt-4" alt="cards" height="250" >
          <div class="card-body text-center">
            <h5 class="card-title">{{$telefono['name']}}</h5>
            <p class="card-text">{{$telefono['price']}}</p>
            <a href="{{route('article.detail', ['prodottoName' => $telefono['name']])}}" class="btn btn-primary">Dettagli</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
</x-layout>