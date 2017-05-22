<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
  <link rel="stylesheet" href="<?=base_url();?>assetes/css/Admin/update_study_contains.css">

<body>
<?php  include 'header.php';?>
<div class="container">
  <div class="update_study">
  <div class="Ins_Udi_det">
      <h3><b>For Admin Insert and update and Delete</b></h3>
      <p><b> Note :- </b>This is the verey sencitive case please be caree full fro this operation</p>
  </div>
  
    
<!-- Insert -->
        <div id="insert" class="tab-pane fade in active">
           <h4>INSERT CANTAIN</h4>
           <hr>
          <form action="<?= base_url();?>index.php/Insert_controller/insert_study_contain" id="theForm" method="post">
          <label>Heading :-</label><input type="text" name="heading" class="form-control" value=" " placeholder="Insert the heading">
          <label>Explain :-</label><textarea rows="5" name="explain" class="form-control"> </textarea>
          <label>Summry :-</label><textarea rows="5" name="summry"  class="form-control"> </textarea>
          <label>Question and Ansers :-</label><textarea rows="5" name="qaa" class="form-control"> </textarea>
          <label>Upload Image :-</label><input type="hidden"  name="image" class="form-control" value=" " placeholder="Insert the heading">
           <label>Upload Video :-</label><input type="hidden" name="video" class="form-control" value=" " placeholder="Insert the heading"><br/>
           <button  class="btn btn-success">INSERT DATA</button>
          </form>      
        </div> 
<!-- Update-->
         <div id="edit" >
           <h4>UPDATE CANTAIN</h4>
           <?php foreach ($update_study as $key){} ?>
       
           <hr>
            <div>
              <form action="<?= base_url();?>index.php/Insert_controller/update_study_contain" id="theForm" method="post">      
                   <label>Heading :-</label><input type="text" name="heading" class="form-control" value="<?php if(empty( $key->headings)){ echo " ";}else{ echo  $key->headings ;} ?>"
                   <label>Explain :-</label><textarea rows="5" name="explain"  class="form-control" ><?php if(empty( $key->explaination)){ echo " ";}else{ echo  $key->explaination ;} ;?> </textarea>
                   <label>Summry :-</label><textarea rows="5" name="summry" class="form-control"><?php if(empty( $key->summry)){ echo " ";}else{ echo  $key->summry ;} ;?> </textarea>
                   <label>Question and Ansers :-</label><textarea rows="5"  name="qaa" class="form-control"><?php if(empty( $key->Qusetion_and_ans)){ echo " ";}else{ echo  $key->Qusetion_and_ans ;} ;?></textarea>
                   <label>Upload Image :-</label><input type="hidden" name="image" class="form-control" placeholder="Insert the heading">
                   <label>Upload Video :-</label><input type="hidden" name="video" class="form-control"  placeholder="Insert the heading"><br/>
                   <button  class="btn btn-success">Update data</button>
             </form>
            </div>
          </div>
          <!-- Delete0-->
            <div id="delete" >
         <h4>DELETE CANTAIN</h4>
         <?php foreach ($update_study as $key){} ?>
         <hr>
         <form action="<?= base_url();?>index.php/Insert_controller/detete_study_contain" id="theForm" method="post">      
           <h4><?php if(empty( $key->headings)){ echo "Please insert ....";}else{ echo  $key->headings ;} ?>"</h4>
            <hr>
          <h5><?php if(empty( $key->explaination)){ echo "Please insert ....";}else{ echo  $key->explaination ;} ;?> </h5>
          <hr>
            <h6><?php if(empty( $key->summry)){ echo "Please insert ....";}else{ echo  $key->summry ;} ;?> </h6>
            <hr>
            <?php if(empty( $key->Qusetion_and_ans)){ echo "Please insert ....";}else{ echo  $key->Qusetion_and_ans ;} ;?>
             <hr>
            <label>Upload Image :-</label><input type="hidden" class="form-control" placeholder="Insert the heading">
             <label>Upload Video :-</label><input type="hidden" class="form-control"  placeholder="Insert the heading"><br/>
            <button  class="btn btn-success">Delete</button>
          </form>
         </div>

  </div>
</div>
       
    
 
<?php include 'footer.php' ?>
</body>
</html>