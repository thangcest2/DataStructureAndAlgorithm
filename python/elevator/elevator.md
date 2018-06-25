### Design
Elevator
    - Attrs: buttons, default_floor
    - Methods: move_up, move_down,
    
ElevatorButtons: FloorButton, AlarmButton, CallButton, CloseButton, OpenButton
ElevatorDoor

FloorButton
FloorDoor: Up, Down


Abstracts
    - Door
    - Button
    
ElevatorController
    - Attrs: move_status(idle, moving, stopped, door_open, door_close)

RequestQueue
