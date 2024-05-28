<?php
class Node{
    public $left,$right;
    public $data;
    function __construct($data)
    {
        $this->left=$this->right=null;
        $this->data = $data;
    }
}
class Solution{
    public function insert($root,$data){
        if($root==null){
            return new Node($data);
        }
        else{
            if($data<=$root->data){
                $cur=$this->insert($root->left,$data);
                $root->left=$cur;
            }
            else{
                $cur=$this->insert($root->right,$data);
                $root->right=$cur;
            }
            return $root;
        }
    }

	public function getHeight($root){
      //Write your code here`
      echo max($this->maxDepth($root->left), $this->maxDepth($root->right));
      
    }
    
    public function maxDepth($node) {
        if (!$node) {
            return 0;
        } else {
            $ld = $this->maxDepth($node->left);
            $rd = $this->maxDepth($node->right);
            
            return ($ld > $rd ? $ld + 1 : $rd + 1);
        }
    }

}//End of Solution
$myTree=new Solution();
$root=null;
$T=intval(fgets(STDIN));
while($T-->0){
    $data=intval(fgets(STDIN));
    $root=$myTree->insert($root,$data);
}
$height=$myTree->getHeight($root);
echo $height;
?>
    