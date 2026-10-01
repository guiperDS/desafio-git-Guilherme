<?php
//POO PetShop

class Cliente{
    public $nome;
    private $cpf;
    public $email;
    public $animais_cadastrados;
    public $atendimentos_solicitados;
    public $idade;

    public function solicitar_servicos(){}
    public function efetuar_pagamentos(){}
    public function levar_buscar(){}
    public function cancelar(){}
    public function cadastrar(){}
}

class Animal{
    public $nome;
    public $raça;
    private $id_tutor;
    public $cuidados_extras;
    public $peso;
    public $idade;

    public function tosar(){}
    public function lavagem(){}
    public function secagem(){}
    public function cortar_unhas(){}
}

class Atendimentos{
    public $agenda;
    public $cronometro;
    public $lavagem;
    public $tosagem;
    public $tratar_unhas;
    public $enfeitar;

    public function historico_atendimentos(){}
    public function status_atendimento(){}
}
?>