<?php
class Node
{
    public $data;
    public $left;
    public $right;
    public $parent;
    
    public function __construct($data = null, $parent = null)
    {
        $this->data   = $data;
        $this->left   = null;
        $this->right  = null;
        $this->parent = $parent;
    }
    
    public function min()
    {
        $node = $this;
        
        while ($node->left) {
            $node = $node->left;
        }
        
        return $node;
    }
    
    public function max()
    {
        $node = $this;
        
        while ($node->right) {
            $node = $node->right;
        }
        
        return $node;
    }
    
    public function successor()
    {
        $node = $this;
        if ($node->right)
            return $node->right->min();
        else
            return NULL;
    }
    
    public function predecessor()
    {
        $node = $this;
        if ($node->left)
            return $node->left->max();
        else
            return NULL;
    }
    
    public function delete()
    {
        $node = $this;
        if (!$node->left && !$node->right) {
            if ($node->parent->left === $node) {
                $node->parent->left = NULL;
            } else {
                $node->parent->right = NULL;
            }
        } elseif ($node->left && $node->right) {
            $successor  = $node->successor();
            $node->data = $successor->data;
            $successor->delete();
        } elseif ($node->left) {
            if ($node->parent->left === $node) {
                $node->parent->left = $node->left;
                $node->left->parent = $node->parent->left;
            } else {
                $node->parent->right = $node->left;
                $node->left->parent  = $node->parent->right;
            }
            $node->left = NULL;
        } elseif ($node->right) {
            if ($node->parent->left === $node) {
                $node->parent->left  = $node->right;
                $node->right->parent = $node->parent->left;
            } else {
                $node->parent->right = $node->right;
                $node->right->parent = $node->parent->right;
            }
            $node->right = NULL;
        }
    }
}


class BinaryTree
{
    public $root;
    
    public function __construct()
    {
        $this->root = null;
    }
    
    public function isEmpty()
    {
        return $this->root === null;
    }
    
    public function insertNode($data)
    {
        if ($this->isEmpty()) {
            $node       = new Node($data);
            $this->root = $node;
            return;
        }
        
        $node = $this->root;
        
        while ($node) {
            if ($data > $node->data) {
                if ($node->right) {
                    $node = $node->right;
                } else {
                    $node->right = new Node($data, $node);
                    $node        = $node->right;
                    break;
                }
            } elseif ($data < $node->data) {
                if ($node->left) {
                    $node = $node->left;
                } else {
                    $node->left = new Node($data, $node);
                    $node       = $node->left;
                    break;
                }
            } else {
                break;
            }
        }
        return $node;
    }
    
    public function remove(int $data)
    {
        $node = $this->search($data);
        if ($node) {
            $node->delete();
        }
    }
    
    public function search(int $data)
    {
        if ($this->isEmpty()) {
            return FALSE;
        }
        $node = $this->root;
        while ($node) {
            if ($data > $node->data) {
                $node = $node->right;
            } elseif ($data < $node->data) {
                $node = $node->left;
            } else {
                break;
            }
        }
        return $node;
    }
}

$BT  = new BinaryTree();

$BT->insertNode(100);
$BT->insertNode(50);
$BT->insertNode(75);
$BT->insertNode(150);
var_dump($BT);

$BT->remove(50);
var_dump($BT);

var_dump($BT->search(75));