<!DOCTYPE html>
<html>

<head>
<title>Convert Java to Javascript</title>
</head>

<body>

<h2>Java to Javascript</h2>
<h3>Bubble Sort</h3>
<p>Converting Bubble Sort Java to Javascript</p>
<p>Original Array : <br><br>  23,43,13,65,11,62,76,83,9,71,84,34,96,80</p>
<p>Sorted Array : </p>
<p id="sorted"></p>

<script>
function bblSort(arr){
     for(var i = 0; i < arr.length; i++){
       for(var j = 0; j < ( arr.length - i -1 ); j++){
         if(arr[j] > arr[j+1]){
           var temp = arr[j]
           arr[j] = arr[j + 1]
           arr[j+1] = temp
         }
       }
     }
     console.log(arr);
    }
    var arr = [23,43,13,65,11,62,76,83,9,71,84,34,96,80];
    bblSort(arr);
    document.getElementById("sorted").innerHTML = arr;
</script>


</body>
</html>
