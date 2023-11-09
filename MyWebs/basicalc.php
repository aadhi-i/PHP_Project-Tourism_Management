<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Arithmetic Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background: black;
        }
    </style>
    <script type="text/javascript">
            $('#add').on('click', function (e) {

                var a=Number(document.getElementById("N1").value);
                var b=Number(document.getElementById("N2").value);
                var s;
                s=a+b;
                alert("Sum is" +s);
            })
    </script>
</head>
<body>
<header>
    <h2 class="logo text-white mt-3 ps-3 mb-4">Arithmetic Calculator</h2>

</header>
<section>
    <form style="width: 300px;margin: auto;">
    <div class="form-floating mt-5 mb-3 text-primary">
    <input type="text" class="form-control" id="floatingInput" name="num1" id="N1" placeholder="Operand" required autofocus>
    <label for="floatingInput">Operand</label>
    </div>
    <div class="form-floating mt-5 mb-5 text-primary">
    <input type="text" class="form-control" id="floatingInput" name="num2" id="N2" placeholder="Operand">
    <label for="floatingInput">Operand</label>
    </div>
    </form>
    </section>
    <section>
    <div class="container">
        <div class="row text-center">
        <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
         <button type="button" id="add" class="btn btn-outline-primary">ADD</button>
         <button type="button" class="btn btn-outline-primary">SUBTRACT</button>
         <button type="button" class="btn btn-outline-primary">MULTIPLY</button>
    </div>
    <div class="btn-group btn-group-lg mt-5" role="group" aria-label="Large button group">
         <button type="button" class="btn btn-outline-primary">DIVIDE</button>
         <button type="button" class="btn btn-outline-primary">REMAINDER</button>
         <button type="button" class="btn btn-outline-primary">POWER</button>
    </div>
    </div>
    </div>
 </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>