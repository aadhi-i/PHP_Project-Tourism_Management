<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type=text/javascript>
        function validate(){
            var emails=document.myform.email.value;
            var toatpos=emails.indexOf("@");
            var todotpos=emails.indexOf(".");
            if(toatpos<1||(todotpos-toatpos<2)){
                alert("Enter a valid Email");
                dcocument.write,myforms.email.focus();
                return false;
            }
            alert("Email is Valid");
            return true;
        }
    </script>
</head>
<body>
    <form name="myform"  method="post">
        <input type="email" name="email">
        <br><br>
        <input type="submit" name="submit1" onclick="validate()">
    </form>
</body>
</html>