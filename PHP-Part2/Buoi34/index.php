<?php 
/*
Dãy số Fibonacci:
Tính số finbonacci thứ n.

-$n = 5 -> return fibonacci(4) + fibonacci(3) =
= fibo(3) + fibo(2) + fibo(2) + fibo(1)
fibo(2) + fibonacci(1) + 1 +0 + 1+0 +1
= 1+0+1+1+0+1+0+1 = 5
*/

function finbonacci($n){
    if($n ==0 || $n==1){
        return $n;
    }
    return finbonacci($n-1) + finbonacci($n-2);
}

$result = finbonacci(7);

echo $result;