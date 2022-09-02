<style>
 .call-form-item {
    padding-bottom: 12px;
    margin-bottom: 24px;
    margin-left: 50px;
    margin-right: 50px;
}

input {
      margin: 0;
      box-sizing: border-box;
      outline: none;
      border: none;
      background-color: #EEF0F7;
      margin-right: 10px;
}

.input-wrapper {
      display: flex;
      align-items: flex-start;
}

label {
      color: #808694;
      font-family: Montserrat;
      font-size: 10px;
      font-weight: bold;
      letter-spacing: 0;
      line-height: 16px;
      text-transform: uppercase;
      margin-right: 10px;
}

input[type=checkbox]:focus {
      outline: rgba(0, 0, 0, 0.2);
    }

    input[type=checkbox] {
      background-color: #EEF0F7;
      border-radius: 2px;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      width: 17px;
      height: 17px;
      cursor: pointer;
      position: relative;
    }

    input[type=checkbox]:checked {
      background-color: #808694;
      background: #808694 url("data:image/gif;base64,R0lGODlhCwAKAIABAP////3cnSH5BAEKAAEALAAAAAALAAoAAAIUjH+AC73WHIsw0UCjglraO20PNhYAOw==") 3px 3px no-repeat;
    }
</style>

https://www.sliderrevolution.com/resources/styling-radio-buttons/
<br>
<input type="radio" id="html" name="language" value="HTML">
<label for="html">HTML</label><br>

<input type="radio" id="css" name="language" value="CSS">
<label for="css">CSS</label><br>

<input type="radio" id="javascript" name="language" value="JavaScript">
<label for="javascript">JavaScript</label>
<br>


<?php	
$count_chkbox =1;
while($count_chkbox <= 5) { 
 ?>

 <script type="text/javascript">
   function checkedOnClick<?php echo $count_chkbox; ?>(el){

      // Select all checkboxes by class
      var checkboxesList = document.getElementsByClassName("checkoption<?php echo $count_chkbox; ?>");
      for (var i = 0; i < checkboxesList.length; i++) {
         checkboxesList.item(i).checked = false; // Uncheck all checkboxes
      }

      el.checked = true; // Checked clicked checkbox
   }
   </script>
<?php echo $count_chkbox; ?>) 			
 <input type="checkbox" onclick="checkedOnClick<?php echo $count_chkbox; ?>(this);" id="hobby<?php echo $count_chkbox; ?>" class="checkoption<?php echo $count_chkbox; ?>" name="hobby[]"   >คิดภาระงาน</td>
 <input type="checkbox" onclick="checkedOnClick<?php echo $count_chkbox; ?>(this);" id="soyny<?php echo $count_chkbox; ?>"  class="checkoption<?php echo $count_chkbox; ?>" name="soyny[]"   > ไม่คิดภาระงาน </td> 
 <input type="checkbox" onclick="checkedOnClick<?php echo $count_chkbox; ?>(this);" id="harmony<?php echo $count_chkbox; ?>"  class="checkoption<?php echo $count_chkbox; ?>" name="harmony[]"   > ยังไม่แน่ใจ </td>   
 <br>
<?php $count_chkbox++; } ?>