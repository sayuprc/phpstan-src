<?php

$foo = 1;

function () use ($foo, $bar) {

};

function () use (&$errorHandler) {

};

if (foo()) {
	$onlyInIf = 1;
}

for ($forI = 0; $anotherVariableFromForCond = 1, $forI < 10; $forI++, $forJ = $forI) {

}

$wrongErrorHandler = function () use (
	$wrongErrorHandler,
	$onlyInIf,
	$forI,
	$forJ,
	$anotherVariableFromForCond
) {

};
