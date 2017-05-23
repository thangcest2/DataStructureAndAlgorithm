/**
  * Created by thangcest2 on 5/15/16.
  */
package object oop {
  def main(args : Array[String]): Unit = {
    val mai = new Girl()
    mai.name = "Mai Phuong Nguyen"
    mai.dob = "22/10/1990"
    mai.beautiful = true

    val trang = new Girl()
    trang.name = "Nguyen Thi Huyen Trang"
    trang.dob = "24/11/1990"
    mai.beautiful = false

    val thang = new Boy(true, List(mai, trang))
    thang.name = "Tran Duc Thang"
    thang.dob = "16/07/1990"

    println("Boy name: " + thang.name)
    println("Boy dob: " + thang.dob)
    println("Boy manly ? " + thang.manly)
    println("Boy list girls:")

    var i = 0
    thang.girlHistory.foreach(girl => {
      i += 1
      println("   --> No " + i + ": ")
      println("   Girl name: " + girl.name)
      println("   Girl dob: " + girl.dob)
      println("   Girl is beautiful: " + girl.beautiful)
    })

  }

}
