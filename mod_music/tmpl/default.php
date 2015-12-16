
<?php
defined( '_JEXEC' ) or die;

$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'media/mod_music/css/music.css');
?>

<div class="modul">
<h2 id="header"><?php echo $params->get('titel'); ?></h2>

<ul class="no_bullet">

<?php     
$i=0;    
foreach ($rows as $row): 
$i++; ?>


<li class="section <?php echo (($c = !$c)?'section--alpha':'');?>">
          
    <span id="pic"></span> <?php echo $i. " <strong>"."| ".$row->titel." |"."</strong>" ?>
    
    <br/>
    
        <?php echo $row->artist ?>
          
    <a href="#"><span id="pic_2"></span></a>
    
</li>
    
        
        <?php if($i==10)
        {
            break;
        }

    endforeach ?>

    <br><p>(Senaste 30 dagarna)</p>
    
</ul>
</div>