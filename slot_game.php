<?php
$slots = ['A', 'B', 'C'];
$winnings = 0;
$payoff = 0;
$spin_total = 1;
$display = '';
while ($winnings < 500 && $spin_total <= 10) {
    
    for ($i = 1; $i <= 3; $i++) {
        $result = array_rand($slots);
        $display .= $slots[$result];
    }
    echo("spin " . $spin_total . "). " .$display);
    match ($display) {
        'AAA', 'BBB', 'CCC' => $payoff = 100,
        'ABB', 'ABA', 'BAA', 'ABB', 'BBA', 'BAB', 'BCC', 'CBC', 'CCB', 'ACC', 'CAC', 'CCA' => $payoff = 50,
        default => $payoff = 0,
    };
    echo("\npayout: " . $payoff . "!");
    $winnings += $payoff;
    $display = "";
    echo("\nwinnings : " . $winnings . "!\n");
    $spin_total++;
}
