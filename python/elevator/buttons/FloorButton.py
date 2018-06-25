from python.elevator.buttons.ABButton import ABButton


class FloorButton(ABButton):
    def click(self):
        pass


class FloorUpButton(FloorButton):
    def click(self):
        pass


class FloorDownButton(FloorButton):
    def click(self):
        pass

