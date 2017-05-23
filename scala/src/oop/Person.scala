package oop

/**
  * Created by thangcest2 on 5/15/16.
  */
class Person {
  var name: String = _
  var dob: String = _
}

class Girl extends Person {
  var beautiful: Boolean = _
  var boyHistory: List[Boy] = _
}

case class Boy(manly: Boolean, girlHistory: List[Girl]) extends Person {

}