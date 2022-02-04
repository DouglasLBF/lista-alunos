<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">
        <h2>Usuários</h2>
        <div>
          <form action="" method="post">          
            <select name="escolas" id="escolas"  > 
              <option value="">Escolas</option>
              <?php foreach($data['escolas'] as $escolas){ ?>
                <option value="<?= $escola['ed18_i_codigo'] ?>"><?= $escola['ed18_c_nome'] ?>"</option>            
                <?php }?>
            </select>
          </form>
        </div>
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

