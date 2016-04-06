
<div class="container container-fluid content first">
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <h2>Email preferences</h2>
      <p>
        <?php if($success) { ?>
          <div class="alert alert-success alert-dismissible" role="alert" >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <span>Your preferences have been updated.</span></div>
      </p>
    </div>
  </div>
        <?php } else { ?>
          <p>
            From this page, you can update your email preferences.
          </p>
      </div>
    </div>

    <script type="text/javascript">
    $( document ).ready(function() {
      $.each($( "form input:checkbox" ), function(key, value){

        $(value).on("click", function(){

          toggleValue($(value));
        });
      });
    });

    function toggleValue(element){

      hiddenElement = $("#"+element.prop("id").replace("-chkbox", ""));

      if(hiddenElement.prop("value") == "0"){
        hiddenElement.prop("value", "1");
      }else{
        hiddenElement.prop("value", "0");
      }
    }
    </script>

    <div class="row">
        <div class="col-md-offset-3 col-md-6">

          <?php echo form_open('Unsubscribe/update', array('name'=>'preferences', 'class'=>'form-horizontal'));?>

          <h3>Notification of your measures</h3>
          <p>We highly recommend not unsubscribing from those.</p>

          <input
            <?php if($dayAccuracy == 1){echo "checked ";}?>
            type="checkbox"
            id="dayAccuracy-chkbox">
            <input id="dayAccuracy" type="hidden" name="dayAccuracy" value="<?php echo $dayAccuracy;?>">
            Remind me to take my second measure 24 hours the first one.<br>
          <input
            <?php if($weekAccuracy == 1){echo "checked ";}?>
            type="checkbox"
            id="weekAccuracy-chkbox">
            <input id="weekAccuracy" type="hidden" name="weekAccuracy" value="<?php echo $weekAccuracy;?>">
            Remind me to take my second measure 1 week the first one.<br>
          <input
            <?php if($result == 1){echo "checked ";}?>
            type="checkbox"
            id="result-chkbox">
            <input id="result" type="hidden" name="result" value="<?php echo $result;?>">
            Send me my watch accuracy by email.<br>
          <input
            <?php if($newMeasure == 1){echo "checked ";}?>
            type="checkbox"
            id="newMeasure-chkbox">
            <input id="newMeasure" type="hidden" name="newMeasure" value="<?php echo $newMeasure;?>">
            Remind me to check my watch accuracy once a month.<br>

          <h3>Tips to make better use of Toolwatch</h3>

          <input
            <?php if($firstWatch == 1){echo "checked ";}?>
            type="checkbox"
            id="firstWatch-chkbox">
            <input id="firstWatch" type="hidden" name="firstWatch" value="<?php echo $firstWatch;?>">
            Remind me to add a first watch.<br>
          <input
            <?php if($secondWatch == 1){echo "checked ";}?>
            type="checkbox"
            id="secondWatch-chkbox">
            <input id="secondWatch" type="hidden" name="secondWatch" value="<?php echo $secondWatch;?>">
            Remind me to add a second watch.<br>
          <input
              <?php if($firstWatch == 1){echo "checked ";}?>
              type="checkbox"
              id="firstMeasure-chkbox">
              <input id="firstMeasure" type="hidden" name="firstMeasure" value="<?php echo $firstMeasure;?>">
              Remind me to add at least a measure per watch.<br>
          <input
            <?php if($comeback == 1){echo "checked ";}?>
            type="checkbox"
            id="comeback-chkbox">
            <input id="comeback" type="hidden" name="comeback" value="<?php echo $comeback;?>">
            Say hi if I haven't come for 100 days.<br>


          <input type="hidden" name="userId" value="<?php echo $userId;?>">

          <br>
          <br>
          <input type="submit" class="btn btn-primary btn-lg col-md-5 col-md-offset-5" value="Save">

          </form>

        </div>
    </div>
    <?php } ?>
</div>
