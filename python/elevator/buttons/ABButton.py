from abc import ABC, abstractmethod


class ABButton(ABC):
    @abstractmethod
    def click(self):
        pass

