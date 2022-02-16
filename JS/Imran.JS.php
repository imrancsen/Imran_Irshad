<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>This is in body of html and outside JS,  Helloo!</h2>
    <script>
    // alert boxes
    // window.alert("alert boxes are quite annoying, dnt use many if not necessary");
    document.write ("this is in JS script, Hello")
        </script>
    <script src="ImranJS.js"></script>
    <button type="button" onclick="Imranjsfunction()">Click button</button>
    
    <noscript>
        install or update or enable or check
</noscript>

    <p id="Element1" style="color:maroon; border: solid; width: fit-content;border-color: brown;"></p>
    <p id="Element2" style="color:green; border: dotted; width: fit-content;border-color: purple;"></p>
    <p id="Element3" style="color:brown; border: inset; width: fit-content;border-color: grey;"></p>
<script>
    document.getElementById("Element1").innerHTML = "E1: This content goes to paragraph 1 with id Element1";
    document.getElementById("Element2").innerHTML = "E2: This content goes to paragraph 2 with id Element2";
    document.getElementById("Element3").innerHTML = "E3: This content goes to paragraph 3 with id Element3";
    // document.getElementById("Element2").innerHTML = 5+6;
    </script>
<h2>The following is example of Console.log()</h2>
<script>
    console.log("this is printed in script using JS console.log");
    </script>
</body>
</html>