<!DOCTYPE html>
<html>
 
<head>
    <script src=
"https://code.jquery.com/jquery-3.6.0.min.js">
    </script>
    <style>
        div {
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        h2 {
            color: black;
        }
        #grandparent {
            background-color: green;
            width: 300px;
            height: 300px;
        }
        #parent {
            background-color: blue;
<<<<<<< HEAD
            width: 250px;
=======
            width: 200px;
>>>>>>> 434d9b9c207b7efdf04ff3fcb967e72ac3b3d02a
            height: 200px;
        }
        #child {
            background-color: red;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
 
<body>
    <div>
<<<<<<< HEAD
        <h2>Welcome To GFG</h2>
		<h1>Let's Test</h1>
		<h1>Let's Test 2</h1>
=======
        <h2>Welcome To GFG 1234 jhjhjhj jjhjh yfyyutyty</h2>
		<h1>Pawandeep cahnges</h1>
>>>>>>> 434d9b9c207b7efdf04ff3fcb967e72ac3b3d02a
        <div id="grandparent">GrandParent
            <div id="parent">Parent
                <div id="child">Child</div>
            </div>
        </div>
    </div>
 
    <script>
        const grandParent = document.getElementById("grandparent");
        const parent = document.getElementById("parent");
        const child = document.getElementById("child");
 
        grandParent.addEventListener("click", (e) => {
            console.log("GrandParent");
        }, { capture: false });
        parent.addEventListener("click", (e) => {
            console.log("Parent");
        }, { capture: false });
        child.addEventListener("click", (e) => {
            console.log("Child");
        }, { capture: false });
    </script>
</body>
</html>