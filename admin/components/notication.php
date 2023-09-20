<?php
function noti($session, $nameFunction){
      $mess =  $session;
      ?>
      <script>
        $mess = "<?= $mess?>";
        window.addEventListener("load", function(){
          round_<?=$nameFunction?>_noti($mess);
        })
      </script>
      <?php
   }