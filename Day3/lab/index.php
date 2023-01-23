<?php @(include"validation.php") or die("File is Not Found")?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  /* background-color: #2196F3; */
  /* float: right; */
  margin-left: auto; 
margin-right: 0;
  padding: 10px;
  width:100%
}
.grid-item {
  /* background-color: rgba(255, 255, 255, 0.8); */
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 20px;
  display: flex;
  align-items:left;
  justify-content: left;
  flex-direction: column;
}
</style>
</head>
<body>
<div class="grid-container">
  <div class="grid-item"><form action="<?php $_PHP_SELF ?>" method="post">
        <strong style="color: red;">*Required field</strong>
        <br><br><br>
        Name: <input type="text" name="name"><strong style="color: red;">* <?php echo $nameErr ?></strong><br><br>
        E-mail: <input type="text" name="email"><strong style="color: red;">* <?php echo $emailErr ?></strong><br><br>
        Group # <input type="text" name="group"><br><br>
        Class details: <input type="text" name="class_details"><br><br>
        Gender: <input type="radio" name="gender" value="male">
                <label for="male">male</label>
                <input type="radio" name="gender" value="female">
                <label for="male">female</label>
                <strong style="color: red;">* <?php echo $genderErr ?></strong><br><br>
        <br><br>
        Select Courses: <select name="courses" id="">
            <option value=""></option>
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="MySQL">MySQL</option>
            <option value="HTML">HTML</option>
        </select>
        <br><br>
        Agree <input type="checkbox" name="terms"> <strong style="color: red;">*  <?php echo $termsErr ?></strong><br><br>
        
        <input type="submit" name="submit">
    </form>
</body>
</html></div>
    <div class="grid-item">
        <?php      
            showData()
        ?>
    </div>  
</div>
    