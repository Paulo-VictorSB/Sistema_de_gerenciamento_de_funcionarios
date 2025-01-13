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
        <th>Salário Líquido</th>
    </tr>
</thead>
<tbody>
<?php
$file = 'src/helpers/DB.csv'; // Caminho para o arquivo CSV
$handle = fopen($file, 'r');
if ($handle) {
    while (($linha = fgetcsv($handle, 1000, ',')) !== false) {
        echo "<tr>";
        
        for ($i = 0; $i < count($linha); $i++) {
            
        }
        echo "</tr>";
    }
    fclose($handle);
}
?>
</tbody>
        </table>
        <div>
    </div>
</section>

<?php require("src/helpers/footer.php"); ?>