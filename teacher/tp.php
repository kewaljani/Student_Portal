
<form method="post">
    <div class="form-group">
<select class="form-control" name="branch">
  <option value="me">M.E</option>
  <option value="ce">C.E</option>
  <option value="it">I.T</option>
  <option value="civil">Civil</option>
  <option value="electrical">Electrical</option>
</select>
</div>
<label for="exampleSelect1">Semester</label>
<select class="form-control" name="semester">
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
</select>
<input type="submit"/>
</form>
<?php
$x=$_POST["branch"];
$y=$_POST["semester"];
echo $x." ".$y;


 ?>
