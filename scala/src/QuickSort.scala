/**
  * Created by thangcest2 on 5/15/16.
  */

object QuickSort {
  def main(args: Array[String]): Unit = {
    val ar = Array(4,3,2,1)
    program(ar)

    for (elem <- ar) {
      println(elem)
    }
  }

  def program(ar: Array[Int]): Unit = {
    def swap(i: Int, j: Int): Unit = {
      val t = ar(i); ar(i) = ar(j); ar(j) = t
    }

    def quickSort(left: Int, right: Int): Unit = {
      val pivot = ar((left + right)/2)
      var i = left; var j = right
      while (i <= j) {
        while (ar(i) < pivot) i += 1
        while (ar(j) > pivot) j -= 1

        if (i < j) {
          swap(i, j)
          i += 1
          j -= 1
        }

        quickSort(left, j)
        quickSort(i, right)
      }

    }

    quickSort(0, ar.length -1)
  }


}
