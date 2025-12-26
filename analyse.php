<?php
$good = file('good');
$bad = file('bad');

$goodData = [];
$badData = [];

function p($data) {
    $ret = [];
    $sums = [];
    foreach($data as $line) {
        $content = str_getcsv($line, ';');
        if (count($content) !== 4) {
            continue;
        }
        $ret[$content[1]] ??= [];
        $ret[$content[1]][$content[2]] = (float)$content[3];
    }
    foreach($ret as $line => $rules) {
        $sums[$line] = array_sum($rules);
    }
    return [$ret, $sums];
}

[$goodData, $goodDataSums] = p($good);
[$badData, $badDataSums] = p($bad);

//$deltas = [];
//foreach($goodData as $line => $row) {
//    foreach($row as $rule => $value) {
//        // get max delta
//        // for very small values (less than 0.001) put 0
//        if ($value < 0.001) {
//            $deltas[$rule] = max($deltas[$rule] ?? 0, 0);
//            continue;
//        }
//        $badValue = $badData[$line][$rule] ?? 0.0;
//        $currentDelta = $value - $badValue;
//
//        $deltas[$rule] = max($deltas[$rule] ?? 0, $currentDelta);
//    }
//}


// Compare total time per line first
foreach ($badDataSums as $lineId => $badTime) {
    $goodTime = $goodDataSums[$lineId] ?? 0;
    $diff = $badTime - $goodTime;

    if (abs($diff) > 0.01) { // Only care about changes > 100ms
        echo "Line $lineId is significantly slower: Good: {$goodTime}s, Bad: {$badTime}s (Diff: {$diff}s)\n";

        // Now find which rule in THIS line caused it
        foreach ($badData[$lineId] as $rule => $time) {
            $oldTime = $goodData[$lineId][$rule] ?? 0;
            $ruleDiff = $time - $oldTime;
            if (abs($ruleDiff) > 0.05) {
                $significantChanges[] = [
                    'line' => $lineId,
                    'rule' => $rule,
                    'diff' => $ruleDiff,
                    'bad_val' => $time,
                    'good_val' => $oldTime
                ];
            }
        }
    }
}
