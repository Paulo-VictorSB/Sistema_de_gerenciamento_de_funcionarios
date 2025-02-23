<?php

class CLT extends funcionario{
    public function __construct($nome, $cpf, $contato, $email, $cargo, $senioridade, $salario, $beneficio, $vt, $plano_de_saude){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->contato = $contato;
        $this->email = $email;
        $this->cargo = $cargo;
        $this->senioridade = $senioridade;
        $this->beneficio = $beneficio;
        $this->vt = $vt;
        $this->plano_de_saude = $plano_de_saude;
        $this->contratacao = 'CLT';
        $this->cargo = $cargo;
        $this->salario_base = $salario;
        $this->salario_liquido = $salario;
    }

    public function calcularDescontos(){
        if($this->beneficio === 'va' || $this->beneficio === 'vr'){
            $this->salario_liquido = $this->salario_liquido - 120;
        } 
        if($this->vt == "vtYes"){
            $this->salario_liquido -= 0.06*$this->salario_liquido;
        }
        if($this->plano_de_saude == "plano_saudeYes"){
            $this->salario_liquido -= 0.2*$this->salario_liquido;
        }
    }
}