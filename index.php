<?php require("src/helpers/header.php"); ?>

<section class="principal">
    <h2>Funcionários Cadastrados</h2>
    <div class="card">
        <button id="novo_funcionario">Novo funcionário</button>
        <table class="funcionarios">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Contato</th>
                    <th>Email</th>
                    <th>Contratação</th>
                    <th>Cargo</th>
                    <th>Senioridade</th>
                    <th>Vale alimentação</th>
                    <th>Vale refeição</th>
                    <th>Vale transporte</th>
                    <th>Plano de saúde</th>
                    <th>Salário base</th>
                    <th>Salário Liquido</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Paulo Victor</td>
                    <td>123.456.789-01</td>
                    <td>98765-4321</td>
                    <td>paulo.victor@gmail.com</td>
                    <td>CLT</td>
                    <td>Desenvolvedor Front-End</td>
                    <td>Júnior</td>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>
                    <td>R$ 3.000,00</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ana Carolina</td>
                    <td>234.567.890-12</td>
                    <td>98876-5432</td>
                    <td>ana.carolina@gmail.com</td>
                    <td>PJ</td>
                    <td>Desenvolvedor Back-End</td>
                    <td>Pleno</td>
                    <td>X</td>
                    <td></td>
                    <td>X</td>
                    <td></td>
                    <td>R$ 5.000,00</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Lucas Lima</td>
                    <td>345.678.901-23</td>
                    <td>97765-4321</td>
                    <td>lucas.lima@gmail.com</td>
                    <td>Freelancer</td>
                    <td>Engenheiro de Software</td>
                    <td>Sênior</td>
                    <td></td>
                    <td>X</td>
                    <td></td>
                    <td>X</td>
                    <td>R$ 10.000,00</td>
                    <td></td>
                </tr>
                <tr>
                    <td>João Pedro</td>
                    <td>456.789.012-34</td>
                    <td>96654-3210</td>
                    <td>joao.pedro@gmail.com</td>
                    <td>CLT</td>
                    <td>Analista de Dados</td>
                    <td>Pleno</td>
                    <td></td>
                    <td>X</td>
                    <td>X</td>
                    <td></td>
                    <td>R$ 4.500,00</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Mariana Souza</td>
                    <td>567.890.123-45</td>
                    <td>95543-2109</td>
                    <td>mariana.souza@gmail.com</td>
                    <td>PJ</td>
                    <td>Cientista de Dados</td>
                    <td>Júnior</td>
                    <td>X</td>
                    <td>X</td>
                    <td></td>
                    <td>X</td>
                    <td>R$ 4.000,00</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div>
    </div>
</section>

<?php require("src/helpers/footer.php"); ?>