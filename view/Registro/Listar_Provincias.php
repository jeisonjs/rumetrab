<h2 class="page-header text-center">Lista de las Provincias y Departamentos</h2>

  <div class="table-responsive">   
  <table class="table table-striped">
    <thead>
        <tr>
            <th  style="width:40px;" >Nro.</th>
            <th style="width:120px;">Provincia</th>
            <th style="width:120px;">Departamento </th>
         </tr>
    </thead>
    <tbody bgcolor="#d2e2f2">
    <?php foreach($this->model->Listar2() as $r): ?>
        <tr>
            <td><?php echo $r->Seq_Provincia; ?></td>
            <td ><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Departamento; ?></td>
        </tr>
      <?php endforeach; ?>
     </tbody>
   </table> 
  </form>
</div>

