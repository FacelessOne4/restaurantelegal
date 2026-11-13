<?php

namespace RestauranteLegal\Models;

class prato{
    
private int $idprato;
private string $nomeprato;
private string $descricao;
private float $preco;
private string $tabela = "pratos";
public function __construct(
    int $id,
    string $nomeprato,
    string $descricao,
    float $preco
) {
    $this -> idprato = $id;
    $this -> nomeprato = $nome;
    $this -> descricao = $descricao;
    $this -> preco = $preco;

}

?>