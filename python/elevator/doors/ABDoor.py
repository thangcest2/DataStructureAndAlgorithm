from abc import ABC, abstractmethod


class ABDoor(ABC):
    @abstractmethod
    def open(self):
        pass

    @abstractmethod
    def close(self):
        pass

