<?php require("src/helpers/header.php"); ?>

<section class="cardCadastrar principal">
    <div class="card">
        <h2>Cadastrar Funcionário</h2>
        <form action="post">
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
            <input type="number" name="salario" id="salario">

            <div id="beneficios">
                <p>Benefícios</p>
                <label for="va">Vale Alimentação</label>
                <input type="radio" name="beneficio" id="va" value="va">
                
                <label for="vr">Vale Refeição (VR)</label>
                <input type="radio" name="beneficio" id="vr" value="vr">

                <label for="vt">Vale Transporte (VT)</label>
                <input type="checkbox" name="vt" id="vt">

                <label for="plano_saude">Plano de Saúde</label>
                <input type="checkbox" name="plano_saude" id="plano_saude">
            </div>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</section>

<?php require("src/helpers/footer.php"); ?>
