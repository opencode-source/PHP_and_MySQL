<!DOCTYPE html>
<html lang="en">
<head>
    <title>More PHP Tutorials</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css">

    <script>
        function showSuggestion(str){
            if(str.length == 0){
                document.getElementById('output').innerHTML = '';
            } else {
                // AJAX REQ
                let xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }

                xhr.open("GET", "suggest.php?q="+str, true);

                xhr.send();
            }
        }
    </script>

</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
            Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)"> 
        </form>
        <p>Suggestion: <span id="output" style="font-weight:bold"></span></p>
    </div>
</body>
</html>