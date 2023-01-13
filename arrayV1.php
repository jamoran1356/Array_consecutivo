<?php


/*
Given a sequence of integers as an array, determine whether it is possible to obtain a strictly increasing sequence by removing no more than one element from the array.

Note: sequence a0, a1, ..., an is considered to be a strictly increasing if a0 < a1 < ... < an. Sequence containing only one element is also considered to be strictly increasing.
*/

function solution($sequence) {
    $len = count($sequence);
    $contador = 0;
    $y =0;
    if($len==1&&$len==2){
       return true;    
    } else {
            if($sequence[0]>$sequence[1]){
                unset($sequence[0]);
                $contador = $contador +1;
                foreach($sequence as $p=>$x){
                    $new[]=$x;
                }
                $lx = count($new);
                for($t=0;$t<=$lx-2;$t++){
                        if($new[$t]<$new[$t+1]){
                            }else{
                                $contador = $contador + 1;
                                if($contador>1){
                                 return false;
                                }
                        }
                }
                return true;
            } else {
                for ($i=0; $i<=$len-2;$i++){
                    if($sequence[$i]<$sequence[$i+1]){
                    } else {
                            if($sequence[$i+1]<$sequence[$i+2]){
                                unset($sequence[$i]);
                                $contador = $contador + 1;
                               if ($contador > 1) {
                                    return false;
                                } else{
                                    foreach($sequence as $p=>$x){
                                        $new[]= $x;
                                    }
                                    $ls= count($new);
                                    for($j=0;$j<=$ls-2;$j++){
                                        if($new[$j]<$new[$j+1]){
                                            
                                        } else {
                                            $contador = $contador +1;
                                            if($contador > 1){
                                                return false;
                                            }
                                        }
                                        

                                    }
                                }                                

                            } else{
                                unset($sequence[$i+1]);

                                $contador = $contador + 1;
                                if ($contador > 1) {
                                    return false;
                                } else{
                                    foreach($sequence as $p=>$x){
                                        $new[]= $x;
                                    }
                                    $ls= count($new);
                                    for($j=0;$j<=$ls-2;$j++){
                                        if($new[$j]<$new[$j+1]){
                                            
                                        } else {
                                            $contador = $contador +1;
                                            if($contador > 1){
                                                return false;
                                            }
                                        }
                                        }
                                        
                                }
                                
                            }
                            
                       
                    } 
                }
            }    
        }                       
    return true;
            
            
                   
}   

?>