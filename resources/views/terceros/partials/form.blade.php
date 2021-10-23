
   
   

        <div class="card">
            <div class="card-header">
                <h3>{{ __($cardTitle) }}</h3>
                @if (session('info'))
                <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                    {{session('info')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-2 mb-3 ">
                        <label for="colFormLabelSm"
                            class="validationDefaultUsername col-form-label-sm">Identificación</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="identificacion"
                            value="{{ isset($terceros->identificacion)?$terceros->identificacion:''}}">
                    </div>


                    <div class="col-sm-2 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Tipo
                            Documento</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="tipo_doc" value="{{ isset($terceros->tipo_doc)?$terceros->tipo_doc:''}}">
                    </div>


                    <div class="col-md-2 mb-2 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">DV</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="dv" value="{{ isset($terceros->dv)?$terceros->dv:''}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-2 mb-3">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">1#
                            Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="nombre" value="{{ isset($terceros->nombre)?$terceros->nombre:''}}">
                    </div>


                    <div class="col-sm-2 mb-3">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">2#
                            Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="nombre2" value="{{ isset($terceros->nombre2)?$terceros->nombre2:''}}">
                    </div>


                    <div class="col-sm-2 mb-3">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">1#
                            Apellido</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="apellido" value="{{ isset($terceros->apellido)?$terceros->apellido:''}}">
                    </div>


                    <div class="col-sm-2">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">2#
                            Apellido</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="apellido2" value="{{ isset($terceros->apellido2)?$terceros->apellido2:''}}">
                    </div>
                </div>
                <div class="form-row ">
                    <div class="col-md-4  ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Razón
                            social</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="razon_social" value="{{ isset($terceros->razon_social)?$terceros->razon_social:''}}">
                    </div>


                    <div class="col-md-4  ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Nombre
                            comercial</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="nombre_comercial"
                            value="{{ isset($terceros->nombre_comercial)?$terceros->nombre_comercial:''}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Ciudad</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="ciudad" value="{{ isset($terceros->ciudad)?$terceros->ciudad:''}}">
                    </div>


                    <div class="col-md-3 mb-3 ">
                        <label for="colFormLabelSm"
                            class="validationDefaultUsername col-form-label-sm">Dirección</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="direccion" value="{{ isset($terceros->direccion)?$terceros->direccion:''}}">
                    </div>


                    <div class="col-sm-2 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Telefono</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="telefono" value="{{ isset($terceros->telefono)?$terceros->telefono:''}}">
                    </div>


                    <div class="col-sm-2 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Móvil</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="movil" value="{{ isset($terceros->movil)?$terceros->movil:''}}">
                    </div>

                    <div class="col-md-3 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Email</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="email" value="{{ isset($terceros->email)?$terceros->email:''}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Grupo
                            Social</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="grupo" value="{{ isset($terceros->grupo)?$terceros->grupo:''}}">
                    </div>


                    <div class="col-md-4 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Zona</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="zona" value="{{ isset($terceros->zona)?$terceros->zona:''}}">
                    </div>


                    <div class="col-md-4 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Genero</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="genero" value="{{ isset($terceros->genero)?$terceros->genero:''}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Fecha de
                            nacimiento</label>
                        <input type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="fecha_nacimiento"
                            value="{{ isset($terceros->fecha_nacimiento)?$terceros->fecha_nacimiento:''}}">
                    </div>



                    <div class="col-md-4 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Nombre
                            corto</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="nombre_corto" value="{{ isset($terceros->nombre_corto)?$terceros->nombre_corto:''}}">
                    </div>


                    <div class="col-md-4 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Vendedor</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="vendedor" value="{{ isset($terceros->vendedor)?$terceros->vendedor:''}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Tipo
                            Nomina</label>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="tipo_nomina" value="{{ isset($terceros->tipo_nomina)?$terceros->tipo_nomina:''}}">
                    </div>


                    <div class="col-md-6 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">RUT</label>

                        <input type="text" value="{{ isset($terceros->rut)?$terceros->rut:''}}" disabled>
                        <input accept="application/pdf" type="file" class="form-control-file" id="colFormLabelSm"
                            placeholder="" name="rut" value="{{ isset($terceros->rut)?$terceros->rut:''}}">
                    </div>
                    <div class="col-md-2 mb-3 ">
                        <label for="colFormLabelSm" class="validationDefaultUsername col-form-label-sm">Activo</label>
                        {{-- <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="activo" value="{{ isset($terceros->activo)?$terceros->activo:''}}"> --}}

                       

                        <div class="form-check">
                            
                            
                            @isset($terceros->activo)
                                <input name="activo" class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="SI" 
                                @if ($terceros->activo === "SI" ) checked @endif >
                            @else
                            <input name="activo" class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="SI" 
                                 checked  >
                            @endisset
                            

                            {{-- @isset($terceros->activo) 
                            @if ($terceros->activo = "SI")  @endif 
                            @if ($terceros->activo = null)  @endif 
                            
                             
                            @endisset  --}}
                            
                            
                        </div> 
                    </div>
                </div>
                <button class="btn btn-primary btn-lg " type="submit">{{ __($buttonTitle) }}</button>
            </div>

            {{-- <div class="form card-body">
                <div class="row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Identificación</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                            name="identificacion"
                            value="{{ isset($terceros->identificacion)?$terceros->identificacion:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tipo
            Documento</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="tipo_doc"
                value="{{ isset($terceros->tipo_doc)?$terceros->tipo_doc:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">DV</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="dv"
                value="{{ isset($terceros->dv)?$terceros->dv:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">1# Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="nombre"
                value="{{ isset($terceros->nombre)?$terceros->nombre:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">2# Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="nombre2"
                value="{{ isset($terceros->nombre2)?$terceros->nombre2:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">1#
            Apellido</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="apellido"
                value="{{ isset($terceros->apellido)?$terceros->apellido:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">2#
            Apellido</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="apellido2"
                value="{{ isset($terceros->apellido2)?$terceros->apellido2:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Razón
            social</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                name="razon_social" value="{{ isset($terceros->razon_social)?$terceros->razon_social:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre
            comercial</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                name="nombre_comercial" value="{{ isset($terceros->nombre_comercial)?$terceros->nombre_comercial:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Ciudad</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="ciudad"
                value="{{ isset($terceros->ciudad)?$terceros->ciudad:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Dirección</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="direccion"
                value="{{ isset($terceros->direccion)?$terceros->direccion:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Telefono</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="telefono"
                value="{{ isset($terceros->telefono)?$terceros->telefono:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Móvil</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="movil"
                value="{{ isset($terceros->movil)?$terceros->movil:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="email"
                value="{{ isset($terceros->email)?$terceros->email:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Grupo
            Social</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="grupo"
                value="{{ isset($terceros->grupo)?$terceros->grupo:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Zona</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="zona"
                value="{{ isset($terceros->zona)?$terceros->zona:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Genero</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="genero"
                value="{{ isset($terceros->genero)?$terceros->genero:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Fecha de
            nacimiento</label>
        <div class="col-sm-10">
            <input type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                name="fecha_nacimiento" value="{{ isset($terceros->fecha_nacimiento)?$terceros->fecha_nacimiento:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Razón
            social</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                name="razon_social" value="{{ isset($terceros->razon_social)?$terceros->razon_social:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre
            corto</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                name="nombre_corto" value="{{ isset($terceros->nombre_corto)?$terceros->nombre_corto:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Vendedor</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="vendedor"
                value="{{ isset($terceros->vendedor)?$terceros->vendedor:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tipo
            Nomina</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""
                name="tipo_nomina" value="{{ isset($terceros->tipo_nomina)?$terceros->tipo_nomina:''}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">RUT</label>

        <div class="col-sm-10">
            <input type="text" value="{{ isset($terceros->rut)?$terceros->rut:''}}" disabled>
            <input accept="application/pdf" type="file" class="form-control-file" id="colFormLabelSm" placeholder=""
                name="rut" value="{{ isset($terceros->rut)?$terceros->rut:''}}">
        </div>
    </div>


    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Activo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" name="activo"
                value="{{ isset($terceros->activo)?$terceros->activo:''}}">
        </div>
    </div>
    <button class="btn btn-primary btn-lg " type="submit">{{ __($buttonTitle) }}</button>
</div> --}}

</div>
</div>
</form>
</div>
</div>
