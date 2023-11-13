
<?php
// variables of variables

$a = 'foo';
$$a = 'bar'; // creating and setting $foo variable

echo $foo; // foo will exists as a variable and will be 'bar';

echo '<br>';

unset($a, $foo);

$a = 'foo';
$$a['bar'] = 'Luan Ramos';
assert($foo['bar'] === $$a['bar']);

var_dump($foo);