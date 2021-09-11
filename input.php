<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form</title>
</head>
<body>
<div style="margin: 0 auto;width: 400px;border: 1px solid black;padding: 30px">
        <form method="POST" action="summary.php">
          <p>
          Name<br>
          <input type="input" id="name" name="name" placeholder="Name">
          </p>
          <p>
          Major<br>
          <input type="input" id="major" name="major" placeholder="Major">
          </p>
          <p>
          Favorite Web Language<br>
          <input type="radio" id="html" name="fav_language" value="HTML">
          <label for="html">HTML</label><br>
          <input type="radio" id="css" name="fav_language" value="CSS">
          <label for="css">CSS</label><br>
          <input type="radio" id="javascript" name="fav_language" value="JavaScript">
          <label for="javascript">JavaScript</label><br>
          <input type="radio" id="PHP" name="fav_language" value="PHP">
          <label for="PHP">PHP</label>
          </p>
          <p>
          Development Environment<br>
          <input type="checkbox" id="ide1" name="environment[]" value="vscode">
          <label for="vehicle1"> Visual Studio Code</label><br>
          <input type="checkbox" id="ide2" name="environment[]" value="brackets">
          <label for="vehicle2"> Brackets</label><br>
          <input type="checkbox" id="ide3" name="environment[]" value="other">
          <label for="vehicle3"> Other</label> 
          <input type="text" id="othername" name="othername">
          </p>
          <p>
                <input type="submit" value="Submit" name="submit" />
          </p>
        </form> 
</div>
</body>
</html>
