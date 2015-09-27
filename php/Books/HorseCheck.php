<?php
/**
 * Date: 6/21/15
 * Time: 1:23 AM
 * @refer: https://vi.wikipedia.org/wiki/B%C3%A0i_to%C3%A1n_m%C3%A3_%C4%91i_tu%E1%BA%A7n
 *
 * @note: run on terminal
 * @description: Bài toán mã đi tuần - chu trình mở ( nước cuối của hành trình ko cần có thể đi về đc nước đầu )
 * Thuật toán đệ qui quay lui (vét cạn)
 * Chương trình sẽ chạy khá lâu, muốn nhanh hơn bạn có thể hard code x = y = 2 (64 hành trình thoả mãn)
 * Vì thuật toán vét cạn chạy lâu, nên nếu SIZE > 5 sẽ chạy lâu khủng khiếp. Xin lỗi vì điều này. Có time mình sẽ viết bằng chu trình Hamilton
 *
 * @algorithm
 * Mảng $way[] chứa offset toạ độ nước đi thoả mãn, 0 -> hàng, 1 -> cột
 * Mảng $mark ban đâù đánh dấu tất cả các ô trong bàn cờ đều đi được
 * Mảng $result chứa nghiệm từ 1 -> SIZE*SIZE
 * Khởi tạo nước đi thứ 1(n=1), bắt đầu gọi đệ qui với n=2 và bước đi vừa khởi
 *
 * Đệ qui:
 *  - Xét toạ độ bàn cờ x,y tại bước thứ n
 *  - lặp tất cả các offset toạ độ, từ 0 -> 8, kiểm tra từ toạ độ hiện tại có đi được tiếp hay ko
 *  - nếu được, thử đi, kiểm tra n với SIZE*SIZE, nếu bằng in kết quả, nếu chưa gọi đệ qui với n=n+1 và bước đi vừa thử
 *
 */

const SIZE = 5;

class HorseCheck {

  static $way = [
    0 => [2, 2, 1,-1,-2,-2,-1,1],
    1 => [1,-1,-2,-2,-1, 1, 2,2],
  ];

  static $mark = [];
  static $res = [];
  static $count = 0;

  public static function init() {
    for ($x=0;$x<SIZE;$x++) {
      for ($y=0;$y<SIZE;$y++) {
        echo "Finding result when start at ". $x . "," . $y . " :" . PHP_EOL;
        //all positions are possible to go
        for ($i=0;$i<SIZE;$i++) {
          for ($j=0;$j<SIZE;$j++) {
            self::$mark[$i][$j] = true;
          }
        }

        self::$count = 0;
        self::$res[1] = [$x, $y];
        self::$mark[$x][$y] = false;
        self::recursive(2, $x, $y);
        if (HorseCheck::$count == 0) {
          echo PHP_EOL . 'no way !';
        } else {
          echo PHP_EOL . "Possible results for coordinate start at " . $x . "," . $y . ": " . HorseCheck::$count;
        }
      }
    }
/*    $x = $y = 2;
    echo "Finding result when start at ". $x . "," . $y . " :" . PHP_EOL;
    //all positions are possible to go
    for ($i=0;$i<SIZE;$i++) {
      for ($j=0;$j<SIZE;$j++) {
        self::$mark[$i][$j] = true;
      }
    }

    self::$res[1] = [$x, $y];
    self::$mark[$x][$y] = false;
    self::recursive(2, $x, $y);
    if (HorseCheck::$count == 0) {
      echo 'no way !';
    } else {
      echo PHP_EOL . "Possible results for coordinate start at " . $x . "," . $y . ": " . HorseCheck::$count;
    }*/

  }

  public static function out() {
    echo PHP_EOL;
    echo "****************";
    echo PHP_EOL;
    for ($i=1;$i<=SIZE*SIZE;$i++) {
      echo '{';
      echo self::$res[$i][0] . ',' . self::$res[$i][1];
      echo '},';
    }
  }

  public static function check($targetX, $targetY) {
    if ($targetX >= 0 && $targetX < SIZE && $targetY >= 0 && $targetY < SIZE && self::$mark[$targetX][$targetY] == true) return true;
    return false;
  }

  public static function recursive($n, $x, $y) {
    for ($i=0;$i<8;$i++) {
      $targetX = $x + self::$way[0][$i];
      $targetY = $y + self::$way[1][$i];
      if (self::check($targetX, $targetY)) {
        self::$res[$n] = [$targetX, $targetY];
        if ($n == SIZE * SIZE) {
          self::$count++;
          self::out();
        } else {
          self::$mark[$targetX][$targetY] = false;
          self::recursive($n+1, $targetX, $targetY);
          self::$mark[$targetX][$targetY] = true;
        }
      }
    }
  }

}

HorseCheck::init();




