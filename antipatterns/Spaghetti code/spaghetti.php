<?php
function checkItem($result, $sql, $itemId, $userId){
    if($result){
        $item=$result->fetch(PDO::FETCH_ASSOC);
        if($item){
            $subtotal=$item['price']*$item['itemAmount']+$item['price'];
            return updateBase($sql, $itemId, $userId, $subtotal);
        } else {
            
            $startResult = $sql->prepare("SELECT * FROM items WHERE id = ? ");
            $startResult->execute(array($itemId));
            if($startResult) {
                $startItem = $startResult->fetch(PDO::FETCH_ASSOC);
                if($startItem){
                    return addToBase($sql, $itemId, $userId, $startItem['price']);
                } else return false;
            }
        }
    } else {
        return false;
    }
}
