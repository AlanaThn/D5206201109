<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>JavaScript Form Validation</title>

    <style>

input[type=text], select, textarea{
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;

}

input[type=email], select, textarea{
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

input[type=button], input[type=submit], input[type=reset] {
    width: 100%;
  background-color: #f3d422;
  border: none;
  color: white;
  padding: 10px;
  text-decoration: none;
  cursor: pointer;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

    </style>

</head>

<body>

    <div class="mx-auto" style="width:450px">
    <div class="container">
        <div class="card" style="margin-top: 5px;margin-bottom: 5px;">

            <div class="card-header" style="background-color: rgb(255, 255, 233);">
                <h3 style="text-align: center;">JavaScript Form Validation</h3>
            </div>

            <div class="card-body">

                <form name="validform" action="https://www.youtube.com/watch?v=6vywJLBfToM" method="post">
                    <fieldset>
                        <label for="fname">Full Name:</label>
                        <br>
                        <input type="text" id="fname" name="fname"  pattern="[A-Za-z\s]{1,}" required>
                        <br>
                        <br>

                        <label for="user">Username (6-8 Characters):</label>
                        <br>
                        <input type="text" id="user" name="user" minlength="6" maxlength="8"
                        title="Minimum 6 character, with a maximum of 8 character" required>
                        <br> <br>

                        <label for="email">Email:</label>
                        <br>
                        <input type="email" id="email" name="email" required>
                        <br>
                        <br>

                        <label for="state">State:</label>
                        <br>
                        <select id="state" required>
                            <option>Please Choose</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Singapore">Singapore</option>
                        </select>
                        <br> <br>

                        <label for="adress">Adress:</label>
                        <br>
                        <input type="text" id="adress" name="adress" required>
                        <br><br>

                        <label for="zcode">Zip Code:</label>
                        <br>
                        <input type="text" id="zcode" name="zcode" maxlength="6" size="6" pattern="[0-9]{6}" title="Number only" required>
                        <br>
                        <br>

                        <input type="submit" value="Check Form">

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>
