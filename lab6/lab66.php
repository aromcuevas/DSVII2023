<?php

final class ClaseBase {
public function test() {
echo "ClaseBase::test() llamada\n";
}
// Aquí da igual si se declara el método como
// final o no
final public function moreTesting() {
echo "ClaseBase::moreTesting() llamada\n";
}
}

class ClaseHijo extends ClaseBase {
}

//
// La clase "ClaseHijo" no puede heredar de la clase final "ClaseBase"
//
?>