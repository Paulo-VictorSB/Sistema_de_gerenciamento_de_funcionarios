<?php

class funcionario extends CreateDB{
    protected $nome;
    protected $cpf;
    protected $contato;
    protected $email;
    protected $contratacao;
    protected $cargo;
    protected $senioridade;
    protected $salario;
    protected $beneficio;
    protected $vt;
    protected $plano_de_saude;
    protected $dados_completos;

    public function get_dados(){
        return [
            $this->nome,
            $this->cpf,
            $this->contato,
            $this->email,
            $this->contratacao,
            $this->cargo,
            $this->senioridade,
            $this->beneficio,
            $this->vt,
            $this->plano_de_saude,
            $this->salario
        ];
    }

    public function adicionarFuncionario(){
        $this->dados_completos = $this->get_dados();
        $dbopen = fopen($this->get_db(), 'a');
        fputcsv($dbopen, $this->dados_completos, ',', '"', '');
        fclose($dbopen);
    }
}