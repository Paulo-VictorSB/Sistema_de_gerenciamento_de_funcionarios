<?php

class CLT extends funcionario{
    public function __construct($nome, $cpf, $contato, $email, $contratacao, $cargo, $senioridade, $salario, $beneficio, $vt, $plano_de_saude){
        $this->salario = $salario;
        $this->beneficio = $beneficio;
        $this->vt = $vt;
        $this->plano_de_saude = $plano_de_saude;
    }

    public function verificar_beneficio(){
        if($this->beneficio === 'va' || $this->beneficio === 'vr'){
            $this->salario -= 120;
        } else {
            return;
        }
    }
    
    public function verificar_vt(){
        if($this->vt == "vtYes"){
            $this->salario -= 0.06*$this->salario;
        } else {
            return;
        }
    }
    
    public function verificar_plano_saude(){
        if($this->plano_de_saude == "plano_saudeYes"){
            $this->salario -= 0.2*$this->salario;
        } else {
            return;
        }
    }
    
}