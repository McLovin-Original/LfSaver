<div class="top-content6 col-xs-12 col-sm-12 col-md-7 col-lg-8" id="completar2">
  <h2 class="login">Completa tu perfil</h2>
      <div class="col-sm-5 col-sm-offset-1">
        <form role="form" action="crear" method="post" id="frm_completar2" class="r-form">
          <h3 class="text-justify info-title">Información Física</h3>
          <div class="form-group">
            <label class="sr-only">Peso</label>
            <input type="text" class="r-form-Usuario form-control peso" id="peso_comp2" name="data[]"  placeholder="Peso (Kilogramos)" required>
          </div>
          <div class="form-group">
            <label class="sr-only">Altura</label>
            <input type="text" class="r-form-Usuario form-control altura" name="data[]" id="altu_comp2" placeholder="Altura (Centimetros)" required>
          </div>
          <div class="form-group ">
            <select class="form-control" id="rh_comp2" name="data[]" required>
              <option class:"opcion" value="O-">O-</option>
              <option class:"opcion" value="O+">O+</option>
              <option class:"opcion" value="B-">B-</option>
              <option class:"opcion" value="B+">B+</option>
              <option class:"opcion" value="A-">A-</option>
              <option class:"opcion" value="A+">A+</option>
              <option class:"opcion" value="AB-">AB-</option>
              <option class:"opcion" value="AB+">AB+</option>
            </select>
          </div>
          <div class="form-group ">
            <select class="form-control" id="salu_comp2" name="data[]" required>
              <option class:"opcion" value="Enfermo">ENFERMO</option>
              <option class:"opcion" value="Aceptable">ACEPTABLE</option>
              <option class:"opcion" value="Regular">REGULAR</option>
            </select>
          </div>
          <button type="submit" name="button" id="btnCompletar" class="btn btn-primary">SIGUIENTE <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </form>
      </div>
</div>
