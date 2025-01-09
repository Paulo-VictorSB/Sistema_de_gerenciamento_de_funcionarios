<?php 
    require("src/helpers/database.php");
    require("src/models/funcionario.php");
    require("src/models/CLT.php");
    require("src/models/Freelancer.php");
    require("src/models/PJ.php");
    require("src/models/SalarioCalculavel.php");
    require("src/helpers/header.php");

    $databse = new CreateDB();
    $databse->create_archive_db();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $mensagem = [];        

        if (preg_match('/\d/', $_POST['nome'])){
            $mensagem[] = 'O Nome não pode conter números.';
        } else {
            $nome = $_POST['nome'];
        }
        
        if (strlen($_POST['cpf']) !== 11){
            $mensagem[] = 'O CPF deve conter 11 dígitos.';
        } else {
            $cpf = $_POST['cpf'];
        }

        if (!preg_match('/^9\d{8}$/', $_POST['celular'])){
            $mensagem[] = 'O número deve conter 9 dígitos, começando com 9.';
        } else {
            $celular = $_POST['celular'];
        }
        
        if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['email'])) {
            $mensagem[] = 'Email inválido.';
        } else {
            $email = $_POST['email'];
        }

        switch ($_POST['tipoContratacao']) {
            case 'CLT':
                if($_POST['salario'] <= 0){
                    $mensagem[] = 'Salário não pode ser menor ou igual a 0.';
                } else {
                    $salario = $_POST['salario'];
                }
                $funcionario = new CLT($nome, $cpf, $contato, $email, $contratacao, $cargo, $senioridade, $salario, $_POST['beneficio'], $_POST['vt'], $_POST['plano_saude']);
                $funcionario->adicionarFuncionario();
                break;
            // case 'Freelancer':
            //     $funcionario = new Freelancer();
            //     break;
            // case 'PJ':
            //     $funcionario = new PJ();
            //     break;
            default:
                throw new Exception("Tipo de contratação inválido.");
        }

        // $_POST['tipoContratacao']
        // $_POST['cargo']
        // $_POST['senioridade']
        // $_POST['salario']
        // $_POST['beneficio']
        // $_POST['vt']
        // $_POST['plano_saude']
    }
?>

<section class="cardCadastrar principal">
    <div class="card">
        <h2>Cadastrar Funcionário</h2>
        <form method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Paulo Victor" required>

            <label for="CPF">CPF:</label>
            <input type="number" name="CPF" id="CPF" placeholder="12345678901" required>

            <label for="celular">Contato:</label>
            <input type="number" name="celular" id="celular" placeholder="9 ****-****" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="exemple@gmail.com" required>

            <label for="tipoContratacao">Contratação:</label>
            <select name="tipoContratacao" id="tipoContratacao" required>
                <option value="CLT">CLT</option>
                <option value="PJ">PJ</option>
                <option value="Freelancer">Freelancer</option>
            </select>

            <label for="cargo">Cargo:</label>
            <select name="cargo" id="cargo" required>
                <option value="desenvolvedor_frontend">Desenvolvedor Front-End</option>
                <option value="desenvolvedor_backend">Desenvolvedor Back-End</option>
                <option value="desenvolvedor_fullstack">Desenvolvedor Full Stack</option>
                <option value="engenheiro_software">Engenheiro de Software</option>
                <option value="analista_dados">Analista de Dados</option>
                <option value="cientista_dados">Cientista de Dados</option>
                <option value="engenheiro_dados">Engenheiro de Dados</option>
                <option value="devops">Engenheiro DevOps</option>
                <option value="administrador_sistemas">Administrador de Sistemas</option>
                <option value="administrador_banco_dados">Administrador de Banco de Dados</option>
                <option value="analista_seguranca">Analista de Segurança da Informação</option>
                <option value="engenheiro_redes">Engenheiro de Redes</option>
                <option value="arquiteto_solucoes">Arquiteto de Soluções</option>
                <option value="especialista_cloud">Especialista em Cloud</option>
                <option value="testador_qa">Analista de Testes/QA</option>
                <option value="gerente_ti">Gerente de TI</option>
                <option value="scrum_master">Scrum Master</option>
                <option value="product_owner">Product Owner</option>
                <option value="ux_ui_designer">UX/UI Designer</option>
            </select>

            <label for="senioridade">Senioridade:</label>
            <select name="senioridade" id="senioridade" required>
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>

            <label for="salario">Sálario:</label>
            <input type="number" name="salario" id="salario" required>

            <div id="beneficios">
                <p>Benefícios</p>
                <label for="va">Vale Alimentação</label>
                <input type="radio" name="beneficio" id="va" value="va">
                
                <label for="vr">Vale Refeição</label>
                <input type="radio" name="beneficio" id="vr" value="vr">

                <label for="vt">Vale Transporte</label>
                <input type="checkbox" name="vt" id="vt" value="vtYes">

                <label for="plano_saude">Plano de Saúde</label>
                <input type="checkbox" name="plano_saude" id="plano_saude" value="plano_saudeYes">
            </div>

            <?php if (count($mensagem) > 0): ?>
                <ul>
            <?php foreach ($mensagem as $msg): ?>
                <li><?= $msg ?></li>
            <?php endforeach; ?>
                </ul>
            <?php endif; ?>


            <input type="submit" value="Cadastrar">
        </form>
    </div>
</section>

<?php require("src/helpers/footer.php"); ?>
