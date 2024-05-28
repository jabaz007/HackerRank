
function Node(value) {
	this.value = value;
	// this.left = null;
	// this.right = null;
}

function insertNode(tree, value) {
	var node = tree, key;

	while (node.value !== value) {
		key = value < node.value ? 'left' : 'right';
		if (!node[key]) {
			node[key] = new Node(value);
			break;
		}
		node = node[key];
	}
	return tree;
}

function maxDepth(node) {
	if (node == null)
		return 0;
	else {
		/* compute the depth of each subtree */
		let lDepth = maxDepth(node.left);
		let rDepth = maxDepth(node.right);

		/* use the larger one */
		if (lDepth > rDepth)
			return (lDepth + 1);
		else
			return (rDepth + 1);
	}
}

var array = [8, 20, 9, null, null, 5, 8, 3, 6],
	tree = array.reduce((t, v) => t ? insertNode(t, v) : new Node(v), null);

console.log(maxDepth(tree), Object.keys(tree).length);


