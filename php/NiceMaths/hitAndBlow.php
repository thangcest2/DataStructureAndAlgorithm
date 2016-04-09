<?php
/**
 * @desc: A hit and blow games
 * #pre: assert a random number in range of 1000-9999
 * #process: Loop through GUESS and ANSWER
 * #post: Terminate program when guess correctly
 */

echo "Type secret number: \n";
$mainNumber = trim(fgets(STDIN));

solution($mainNumber);

function printResult($stepNumber, $tryNumber, $isOver = false, $hitCount = 0, $blowCount = 0) {
  $suffix = 'th';
  switch ($stepNumber%10) {
    case 1:
      $suffix = 'st';
      break;
    case 2:
      $suffix = 'nd';
      break;
    case 3:
      $suffix = 'rd';
      break;
    default:
      break;
  }
  printf("%s  %s  %s", 'No', 'Guessed', 'Answer');
  echo PHP_EOL;

  printf("%s  %s  %s", $stepNumber.$suffix, $tryNumber, ($isOver ? 'Matched' : $hitCount.'H'.$blowCount.'B'));
  echo PHP_EOL;
}

function checkAndPrint($mainNumber, $assertNumber, $stepNumber) {
  $hitCount = $blowCount = 0;
  for ($i=0;$i<strlen($assertNumber);$i++) {
    if ($assertNumber[$i] == $mainNumber[$i]) {
      $hitCount++;
    } else {
      for ($j=0;$j<strlen($mainNumber);$j++){
        if ($assertNumber[$i] == $mainNumber[$j] && $i !== $j) {
          $blowCount++;
        }
      }
    }
  }

  printResult($stepNumber, $assertNumber, false, $hitCount, $blowCount);
}


function solution($mainNumber) {
  echo "Type a guess number: \n";
  $assertNumber = trim(fgets(STDIN));
  $start = 0;
  while ($assertNumber !== $mainNumber) {
    $start++;
    checkAndPrint($mainNumber, $assertNumber, $start);
    echo "Type a guess number: \n";
    $assertNumber = trim(fgets(STDIN));
  }

  printResult($start, $assertNumber, true);
}


