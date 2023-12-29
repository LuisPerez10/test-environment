<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        <? $pArray = array(1, 2, 3, 4, 5);?>
        <? $pObject = array('name' => 'John', 'age' => 30);?>
        let myObject = JSON.parse("<?php echo json_encode($pObject); ?>");
    
        // console.log(myArray); // Outputs: [1, 2, 3, 4, 5]
        console.log(myObject); // Outputs: {name: "John", age: 30}
    </script>
    

</head>
<body>
    <h1>PHP52</h1>
</body>
</html>