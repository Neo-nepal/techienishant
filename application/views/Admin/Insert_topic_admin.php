<!DOCTYPE html>
<html>

<body>
<h4>IF YOU WANT INSERT TOPICS</h4>
<form action="<?=base_url();?>index.php/Insert_controller/insert_topic"   onsubmit="return alerwt()" method="POST">
<input type="hidden" name="varifing" value="1">
<input type="text" name="topic"class="form-control" placeholder=" Insert the question"><br/>
 <button type="submit" class="btn btn-success" onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();">Submit</button>
  
  

</form>

</body>
</html>