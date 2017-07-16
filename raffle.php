<?php declare(strict_types=1);

$donors = [
  'Ben Ramsey' => 25,
  'Cal Evans' => 25,
  'Colin O\'Dell' => 25,
  'Elizabeth Barron' => 25,
  'Joshua Copeland' => 25,
  'Maggie Staples' => 50,
  'Edward Barnard' => 25,
  'Justin Carmony' => 25,
  'Larry Garfield' => 100,
  'Timothy Younger' => 100,
];

$entries = [];

foreach ($donors as $name => $amount) {
  for ($i = 0; $i < $amount; $i += 25) {
    $entries[] = $name;
  }
}


$winner = random_int(0, count($entries) - 1);

echo "Entries: "; print_r($entries);
echo "The winner is: {$entries[$winner]}\n";
