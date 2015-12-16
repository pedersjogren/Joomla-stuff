
<?php
defined( '_JEXEC' ) or die;

$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'media/com_playlist/css/playlist.css');
?>



<div class="modul">
<h2 id="header"><?php echo $this->playlist ?></h2>

<ul class="no_bullet">

<?php     
$i=0;    
foreach ($this->items as $item): 
$i++; ?>


<li class="section <?php echo (($c = !$c)?'section--alpha':'');?>">
          
    <span id="pic"></span> <?php echo $i. " <strong>"."| ". $this->escape($item->titel)." |"."</strong>" ?>
    
    <br/>
    
        <?php echo $this->escape($item->artist) ?>
          
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



    