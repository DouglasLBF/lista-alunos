<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">           
        <div>
          <h3>Filtro para alunos </h3>
          <form action="" method="post">          
            <select name="escolas" id="escolas" onchange="buscarTurma(this.value)" > 
              <option value="">Escolas</option>
              <?php foreach($data['dados'][1] as $escolas){ ?>                
                <option value="<?= $escolas['ed18_i_codigo'] ?>"><?= $escolas['ed18_c_nome'] ?></option>            
                <?php }?>             
            </select>
            </br>
            </br>
            <input type="text" class="yearpicker" value="">
            </br>
            </br>
            <select name="turmas" id="turmas"> 
              <option value="">Turma</option>
              <?php foreach($data['dados'][2] as $turmas){ ?>                
                <option value="<?= $turmas['ed57_i_codigo'] ?>"><?= $turmas['ed57_c_descr'] ?></option>            
                <?php }?>             
            </select>            
          </form>
        </div>
        </br>
        <table class="table" id="tabela">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['dados'][0] as $aluno) { ?>
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

