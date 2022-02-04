<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">
        <h2>Usuários</h2>
        <table class="table" id="tabela">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['alunos'] as $aluno) { ?>
            <tr>
              <td><?= $aluno['ed47_i_codigo'] ?></td>
              <td><?= $aluno['ed47_v_nome']  ?></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>     
</main>

