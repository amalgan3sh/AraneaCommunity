<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
        function validateForm() {
            const textArea = document.getElementById("text1").value.trim();
            if (textArea === "") {
                alert("The textarea cannot be empty!");
                return false; // Prevent form submission
            }else{
                alert("ayn ???");
            }
            return false; // Allow form submission
        }
    </script>
</head>
<body>
    <div class="row">
        <div class="col-sm-4">
            <div>
            <form onsubmit="return validateForm()">
                <h4>Sugalleee ??</h4>
                <!-- <label for="text1">Enter your text:</label> -->
                <textarea name="text1" id="text1" rows="4" cols="50"></textarea>
                <br>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>