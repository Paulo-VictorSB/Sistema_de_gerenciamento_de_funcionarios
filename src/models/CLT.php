<?php

class CLT extends funcionario{
    public function __construct($nome, $cpf, $contato, $email, $cargo, $senioridade, $salario, $beneficio, $vt, $plano_de_saude){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->contato = $contato;
        $this->email = $email;
        $this->salario = $salario;
        $this->beneficio = $beneficio;
        $this->vt = $vt;
        $this->plano_de_saude = $plano_de_saude;
        $this->contratacao = 'CLT';
        $this->cargo = $cargo;
    }
}