
<!DOCTYPE html>
<html>
<head>

  <title>Insert study contains</title>
  <style type="text/css">
<body style="background-color: white;    font-family: Lucida;"> 
  <?php  include 'header.php';?>
 <div class="study_contain">
<table>
  <tr>
    <th>Topics</th>
    <th>Edit</th>
  </tr>
  <?php $sr = 0;
    foreach ($topics  as $key)
    {
     $sr++;?>
     
  <tr>
   <td><?php echo  $_SESSION['topic_name']= $key->topic_name; ?></td>
    <td>
       <button class="btn btn-success" onclick="return delete_topics(<?php echo $key->topic_id; ?>)">Delete</button> 
       <button class="btn btn-success" onclick="return btntest_onclick(<?php echo $key->topic_id; ?>)">Update</button> 
       </td>
 </tr>
   <?php }?>
 
</table>
 </div>
 <div id="deasines">

   <h4 style="text-align: center;">INSERT TOPIC</h4>
    <div id="Insert_and_update">
    <form action="<?= base_url();?>index.php/Insert_controller/insert_topic_study" id="theForm" method="post">
     <input type="text" name="topic" class="form-control" value="<?php echo $sr+++1; ?>. " placeholder="Insert the heading">
     <button class="btn btn-success">Submit</button>
 </form>
    </div>
 
 </div>
 <hr>
 <span id="itopic" onclick="toggle_visibility('Insert_and_update')"><a href="javascript:void(0)"><img src="<?= base_url();?>assites/image/pl.jpg" hight="50px;"> Add new Topic</span></a></span>
          
 
          
</body>
</html>
        