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
            $this->salario,
            $this->beneficio,
            $this->vt,
            $this->plano_de_saude
        ];
    }

    public function adicionarFuncionario(){
        $this->dados_completos = $this->get_dados();

        if($this->contratacao === 'CLT'){
            if($this->beneficio === 'va' || $this->beneficio === 'vr'){
                $this->salario -= 120;
            } 
            if($this->vt == "vtYes"){
                $this->salario -= 0.06*$this->salario;
            }
            if($this->plano_de_saude == "plano_saudeYes"){
                $this->salario -= 0.2*$this->salario;
            }
        } else {
            $mensagem[] = "funcionario errado";
        }

        $dbopen = fopen($this->get_db(), 'a');
        fputcsv($dbopen, $this->dados_completos, ',', '"', '');
        fclose($dbopen);
    }
}