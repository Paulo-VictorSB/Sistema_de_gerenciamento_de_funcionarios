<?php 
    require("src/helpers/database.php");
    require("src/models/funcionario.php");
    require("src/models/CLT.php");
    require("src/models/PJ.php");
    require("src/helpers/header.php");

    $databse = new CreateDB();
    $databse->create_archive_db();
    $mensagem = [];        

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if (preg_match('/\d/', $_POST['nome'])){
            $mensagem[] = 'O Nome não pode conter números.';
        } else {
            $nome = $_POST['nome'];
        }
        
        if (strlen($_POST['CPF']) !== 11){
            $mensagem[] = 'O CPF deve conter 11 dígitos.';
        } else {
            $cpf = $_POST['CPF'];
        }

        if (!preg_match('/^9\d{8}$/', $_POST['celular'])){
            $mensagem[] = 'O número deve conter 9 dígitos, começando com 9.';
        } else {
            $contato = $_POST['celular'];
        }
        
        if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['email'])) {
            $mensagem[] = 'Email inválido.';
        } else {
            $email = $_POST['email'];
        }

        if(!empty($_POST['beneficio'])){
            $beneficio = $_POST['beneficio'];
        } else {
            $beneficio = "";
        }

        if(!empty($_POST['vt'])){
            $vt = $_POST['vt'];
        } else {
            $vt = "";
        }

        if(!empty($_POST['plano_saude'])){
            $plano_saude = $_POST['plano_saude'];
        } else {
            $plano_saude = "";
        }

        if($_POST['salario'] <= 0){
            $mensagem[] = 'Salário não pode ser menor ou igual a 0.';
        } else {
            $salario = $_POST['salario'];
        }

        switch ($_POST['tipoContratacao']) {
            case 'CLT':
                if(empty($mensagem)){
                    $funcionario = new CLT($nome, $cpf, $contato, $email, $_POST['cargo'], $_POST['senioridade'], $salario, $beneficio, $vt, $plano_saude);
                    $funcionario->calcularDescontos();
                    $funcionario->adicionarFuncionario();
                    header("location: ./index.php");
                    exit();
                }
                break;
            case 'PJ':
                if(empty($mensagem)){
                    $funcionario = new PJ($nome, $cpf, $contato, $email, $_POST['cargo'], $_POST['senioridade'], $salario, $beneficio, $vt, $plano_saude);
                    $funcionario->calcularDescontos();
                    $funcionario->adicionarFuncionario();
                    header("location: ./index.php");
                    exit();
                }
                break;
            default:
                throw new Exception("Tipo de contratação inválido.");
        }
    }
?>

<section class="cardCadastrar principal">
    <div class="card">
        <h2>Cadastrar Funcionário</h2>
        <form method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Lorem ipsum" value="Paulo Victor"required>

            <label for="CPF">CPF:</label>
            <input type="number" name="CPF" id="CPF" placeholder="12345678901" value="70938713485"required>

            <label for="celular">Contato:</label>
            <input type="number" name="celular" id="celular" placeholder="9 ****-****" value="999906183"required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="exemple@gmail.com" value="paulovdbarbosa@gmail.com"required>

            <label for="tipoContratacao">Contratação:</label>
            <select name="tipoContratacao" id="tipoContratacao" required>
                <option value="CLT">CLT</option>
                <option value="PJ">PJ</option>
                <option value="Freelancer">Freelancer</option>
            </select>

            <label for="cargo">Cargo:</label>
            <select name="cargo" id="cargo" required>
            <option value="Desenvolvedor Front-End">Desenvolvedor Front-End</option>
                <option value="Desenvolvedor Back-End">Desenvolvedor Back-End</option>
                <option value="Desenvolvedor Full Stack">Desenvolvedor Full Stack</option>
                <option value="Engenheiro de Software">Engenheiro de Software</option>
                <option value="Analista de Dados">Analista de Dados</option>
                <option value="Cientista de Dados">Cientista de Dados</option>
                <option value="Engenheiro de Dados">Engenheiro de Dados</option>
                <option value="Engenheiro DevOps">Engenheiro DevOps</option>
                <option value="Administrador de Sistemas">Administrador de Sistemas</option>
                <option value="Administrador de Banco de Dados">Administrador de Banco de Dados</option>
                <option value="Analista de Segurança da Informação">Analista de Segurança da Informação</option>
                <option value="Engenheiro de Redes">Engenheiro de Redes</option>
                <option value="Arquiteto de Soluções">Arquiteto de Soluções</option>
                <option value="Especialista em Cloud">Especialista em Cloud</option>
                <option value="Analista de Testes/QA">Analista de Testes/QA</option>
                <option value="Gerente de TI">Gerente de TI</option>
                <option value="Scrum Master">Scrum Master</option>
                <option value="Product Owner">Product Owner</option>
                <option value="UX/UI Designer">UX/UI Designer</option>
            </select>

            <label for="senioridade">Senioridade:</label>
            <select name="senioridade" id="senioridade" required>
                <option value="Júnior" selected>Júnior</option>
                <option value="Pleno">Pleno</option>
                <option value="Sênior">Sênior</option>
            </select>

            <label for="salario">Sálario:</label>
            <input type="number" name="salario" id="salario" value="5000"required>

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
