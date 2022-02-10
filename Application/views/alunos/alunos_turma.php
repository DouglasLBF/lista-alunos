<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['dados'] as $turma) { ?>
            <tr>
              <td><?= $turma['ed57_i_codigo'] ?></td>
              <td><?= $turma['ed57_c_descr'] ?></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>