<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://dugudlabs.com
 * @since      1.0.0
 *
 * @package    Virtual_Jewellery_Try_On
 * @subpackage Virtual_Jewellery_Try_On/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<html>
  <style>

    .jewelfit_footer{ 
      margin-top: 100px;
    }
    .jewelfit_promo{
      color: white;
      /* overflow: hidden; */
      background-color: #f89a2a;
      position: fixed;
      width: 100%;
    }
    .jewelfit_plans{
      margin-top: 150px;
    }
  </style>
<body>
<div class="jewelfit_promo">
  <h2 class="pagetitle" style="padding-left:20px;"> Want to get discount on our virtual jewellery try on plugin <a style="color:white;" href="https://www.dugudlabs.com/jewelfit" target="_blank">Jewelfit </a>, then send this code <strong><?php echo "JEWELFIT".rand(1,10000) ?></strong> to <a style="color:white;" href="mailto:support@dugudlabs.com">support@dugudlabs.com</a>.</h2>
  </div> 
<div class="jewelfit_plans">
  <a href="https://www.dugudlabs.com/jewelfit" target="_blank">
    <img class="size-full" src="<?php echo plugin_dir_url( __FILE__ ); ?>images/jewelfit_plans.png" alt="jewelfit : Virtual Try On WordPress Plugin" width="100%" height="100%">
  </a>
</div>
    
<div class="container">

  <h2 class="pagetitle"><strong>How it works?</strong></h2>

</div>

<iframe width="100%" height="500" src="https://www.youtube.com/embed/13VE6PRm5WE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php $site_name = get_site_url(); 
  $arrName = explode('.',$site_name);

?>
   
  
  <div class="jewelfit_footer">
  
        <h2 class="pagetitle"><strong>Excited to know more?</strong></h2>
        <h3>Email us: support@dugudlabs.com</h3>
        <h3>Visit: <a target="_blank" href="https://www.dugudlabs.com">www.dugudlabs.com</a></h3>

  </div>
 </body>
</html>

