class Secretive:
    def __inaccessible(self):
        print("Bet you can't see me ...")
    def accessible(self):
        print("The secret message is:")
        self.__inaccessible()

s = Secretive()
s.accessible()

exit(0)

def binary_search(sequence, number, start, endings):
	if start == endings:
		return endings
	else:
		middle = (start + endings) // 2
		print("Deviding", middle)
		if number > sequence[middle]:
			print("Searching upper", middle, endings)
			return binary_search(sequence, number, middle + 1, endings)
		else:
			print("Searching lower", start, middle)
			return binary_search(sequence, number, start, middle)


s = range(0,10)

i = binary_search(s, 4, 0, 9)

print(i)
