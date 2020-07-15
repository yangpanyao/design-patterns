<?php
$arr = array (
    0=> 'a' ,
    1 => array('a','b', 'c') ,
    2 => 'b',
    3 => array('a', 'b', 'c') ,
    4 => 'c'
);
$it = new \RecursiveArrayIterator ($arr) ;

while ($it->valid()) {
    //检查是否含有子节点
    if($it->hasChildren()){
        //输出所有子节点
        foreach ($it->getChildren() as $key => $value) {
            echo $key.'---'.$value."<br>";
        }
    }else{
        echo"No children.<br>";
    }
    $it->next();
}
/**
运行结果
No children.
0---a
1---b
2---c
No children.
0---a
1---b
2---c
 */