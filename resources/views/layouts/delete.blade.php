   <form action="{{ route('terceros.destroy', $tercero)}}" method="POST">
       @csrf
       @method('delete')
       <div class="modal custom fade" id="ModalDelete{{$tercero}}" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <div class="col-md-8">
                           <h5 class="modal-title">¿Está seguro de eliminarlo?</h5>
                       </div>
                       <div class="col-md-3">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>


                   </div>
                   <div class="modal-body">
                       <i class="bi bi-x-octagon"></i>
                       {{-- <p>¿Está seguro que quiere eliminarlo?</p> --}}
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn  back" data-dismiss="modal">Volver</button>
                       <button type="submit" class="btn  delete">Eliminar</button>
                   </div>
               </div>
           </div>
       </div>
   </form>
