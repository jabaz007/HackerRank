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

	public function levelOrder($root){
      //Write your code here
      $lists=[];
      self::levelOrderTraverse($root,0,$lists);
      self::getValues($lists);
    }
    
    public function levelOrderTraverse($root,$depth,&$lists) {
        if($root==null){
            return ;
        }
        if(count($lists)<=$depth){
            array_push($lists, []);
            array_push($lists[$depth], $root->data);
        }else{
            array_push($lists[$depth], $root->data);
        }

        self::levelOrderTraverse($root->left,$depth+1,$lists);
        self::levelOrderTraverse($root->right,$depth+1,$lists);
    }

    public function getValues($array){
        foreach($array as $key => $value){
            if(is_array($value)){
                self::getValues($value);
            } else {
                echo $value . ' ';
            }
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
$myTree->levelOrder($root);
?>
    