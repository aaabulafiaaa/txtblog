for a very stupid reason im yet to discover i totally forgot i needed title,  id and authors fields. add them
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

<form action="action.php" method="post">
<textarea id="edit" name="edit" rows="4" cols="50"></textarea>
   <input type="submit" value="Submit">
</form>

<script>
var simplemde = new SimpleMDE({ element: document.getElementById("edit") });
simplemde.value("This text will appear in the editor");
</script>