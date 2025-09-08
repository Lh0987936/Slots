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
    echo("\nSpin " . $spin_total . ". " .$display);
    match ($display) {
        'AAA', 'BBB', 'CCC' => $payoff = 100,
        'AAB', 'ABA', 'BAA', 'ABB', 'BBA', 'BAB', 'BCC', 'CBC', 'CCB', 'ACC', 'CAC', 'CCA', 'CAA', 'AAC', 'ACA', 'CBB', 'BCB', 'BBC' => $payoff = 50,
        default => $payoff = 0,
    };
    echo("\npayout: " . $payoff . "!\n");
    $winnings += $payoff;
    $display = "";
    $spin_total++;
}
echo("That's the Last Spin!\n");
echo("\nTotal winnings: " . $winnings . "!\n");
echo("Thanks for playing! Please, join us again soon!\n");