<?php

final class ClaseBase {
public function test() {
echo "ClaseBase::test() llamada\n";
}
// Aqu� da igual si se declara el m�todo como
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