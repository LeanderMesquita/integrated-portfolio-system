<!-- ADMINISTRATION DELETE MODAL -->

<!-- Modal -->
@if(isset($value))
<div class="modal fade" id="staticBackdrop_{{$value->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="staticBackdropLabel">ATENÇÃO!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body text-center">
            <h6>Você deseja excluir <strong>{{$value->name}}</strong> permanentemente?</h6>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Voltar</button>
                <a class="btn btn-danger btn-sm" role="button" href="{{route($route, ['id' => $value->id])}}">
                    Confirmar
                </a>
            </div>
        </div>
    </div>
</div>
@endif


<!-- INFO USERS MODAL -->

<!-- Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title text-center fs-5" id="infoModalLabel">Atenção! Informativo:</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
            A criação de um novo usuário <strong>NÃO</strong> é referente a um integrante da equipe! e sim um Administrador ou Gerente do sistema.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
        <a href="{{route('users.create')}}" role="button" class="btn btn-primary">
            Continuar
        </a>
      </div>
    </div>
  </div>
</div>

<!-- IMAGES ZOOM MODAL -->
@if(isset($projects->image))
<!-- Modal -->
<div class="modal fade " id="zoomModal" tabindex="-1" aria-labelledby="zoomModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-dark">
            <div class="modal-body pt-2">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>    
                </div>
                <div id="modal-carousel" class="carousel slide" data-bs-ride="carousel" >
                    <div class="carousel-inner">
                        @foreach(array_slice($projects->image, 1) as $i => $image)
                            <div class="carousel-item{{ $i === 0 ? ' active' : '' }}">
                                <img src='{{ url("storage/projects/{$image}") }}' alt="{{ $image }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#modal-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#modal-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif