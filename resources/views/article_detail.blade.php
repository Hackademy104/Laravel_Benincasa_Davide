<x-layout>
      
    
    
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h1 class="display-1 text-center"> {{$telefono['name']}}:</h1>
            </div>
            <div class="col-12 col-md-6 pb-5 mb-5 mt-5">
              <img src="{{$telefono['img']}}" alt="immagini" width="300" class="ps-5 ms-5">
            </div>
            <div class="desc col-12 col-md-6 ">
              <h2 class="">{{$telefono['name']}}</h2>
              <h4>{{$telefono['price']}}</h4>
              <h6>{{$telefono['description']}}</h5>
            </div>
        </div>
    </div>
   


  
  </x-layout>