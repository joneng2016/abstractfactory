<?php

use App;

class FabricaFiat implements FabricaDeCarro
{
    public function criarCarroSedan()
    {
        return new Siena();
    }
    public function criarCarroPopular()
    {
        return new Palio();
    }
}
