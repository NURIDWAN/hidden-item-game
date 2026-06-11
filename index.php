<?php

$grid = [
    "########",
    "#......#",
    "#.###..#",
    "#...#.##",
    "#X#....#",
    "########",
];

$possibleLocations = [];
$startRow = null;
$startCol = null;

// Find player starting position
foreach ($grid as $row => $line) {
    $col = strpos($line, 'X');

    if ($col !== false) {
        $startRow = $row;
        $startCol = $col;
        break;
    }
}

$maxRows = count($grid);
$maxCols = strlen($grid[0]);

// Try all possible A, B, C steps
for ($a = 1; $a < $maxRows; $a++) {
    for ($b = 1; $b < $maxCols; $b++) {
        for ($c = 1; $c < $maxRows; $c++) {

            $row = $startRow;
            $col = $startCol;
            $isValid = true;

            // Move North A steps
            for ($i = 0; $i < $a; $i++) {
                $row--;

                if (!isset($grid[$row][$col]) || $grid[$row][$col] === '#') {
                    $isValid = false;
                    break;
                }
            }

            if (!$isValid) {
                continue;
            }

            // Move East B steps
            for ($i = 0; $i < $b; $i++) {
                $col++;

                if (!isset($grid[$row][$col]) || $grid[$row][$col] === '#') {
                    $isValid = false;
                    break;
                }
            }

            if (!$isValid) {
                continue;
            }

            // Move South C steps
            for ($i = 0; $i < $c; $i++) {
                $row++;

                if (!isset($grid[$row][$col]) || $grid[$row][$col] === '#') {
                    $isValid = false;
                    break;
                }
            }

            if (!$isValid) {
                continue;
            }

            $key = $row . ',' . $col;

            $possibleLocations[$key] = [
                'row' => $row,
                'col' => $col,
            ];
        }
    }
}

echo "Possible item locations:\n";

foreach ($possibleLocations as $location) {
    echo "Row: {$location['row']}, Col: {$location['col']}\n";
}

// Mark possible locations with $
foreach ($possibleLocations as $location) {
    $row = $location['row'];
    $col = $location['col'];

    if ($grid[$row][$col] === '.') {
        $grid[$row][$col] = '$';
    }
}

echo "\nGrid with possible item locations:\n";

foreach ($grid as $line) {
    echo $line . PHP_EOL;
}