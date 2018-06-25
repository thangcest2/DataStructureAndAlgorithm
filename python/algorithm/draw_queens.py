import matplotlib.pyplot as plt
import numpy as np

def print_queens(positions):
    board = np.zeros((8,8,3))
    board += 0.5 # "Black" color. Can also be a sequence of r,g,b with values 0-1.
    board[::2, ::2] = 1 # "White" color
    board[1::2, 1::2] = 1 # "White" color
    fig, ax = plt.subplots()
    ax.imshow(board, interpolation='nearest')

    for y, x in enumerate(positions):
        # Use "family='font name'" to change the font
        ax.text(x, y, u'\u2655', size=30, ha='center', va='center')

    ax.set(xticks=[], yticks=[])
    ax.axis('image')

    plt.show()

# print_queens(positions = [1, 5, 7, 2, 0, 3, 6, 4])