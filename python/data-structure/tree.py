class BinaryNode:
    def __init__(self, left, right, info):
        self.left = left
        self.right = right
        self.info = info


class Tree:
    @classmethod
    def preorder_traveral_visit(self, node):
        if node != None:
            print(node.info)
            self.preorder_traveral_visit(node.left)
            self.preorder_traveral_visit(node.right)


node11 = BinaryNode(None, None, 'Sky')
node12 = BinaryNode(None, None, 'Star')
node21 = BinaryNode(None, None, 'Bin')
node22 = BinaryNode(None, None, 'Mimi')
node3 = BinaryNode(node11, node12, 'Thang')
node4 = BinaryNode(node21, node22, 'Hang')
node5 = BinaryNode(None, None, 'Linh')
node6 = BinaryNode(None, None, 'Lien')
node7 = BinaryNode(node3, node4, 'Mr Manh')
node8 = BinaryNode(node5, node6, 'Mr Dung')
node9 = BinaryNode(node7, node8, 'Mr Hanh')

tree = Tree()
tree.preorder_traveral_visit(node9)
