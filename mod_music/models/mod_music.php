
<?php

class ModMusicModel
{

    
public function getMusic(){    
$db = JFactory::getDBO();
//returns a new datab query
$query = $db->getQuery(true);

$query->select('*')
		->from('#__pa_videolesson')
            ->order('antal_visningar DESC');


$db->setQuery($query);


$rows = $db->loadObjectList();

    return $rows;
}
    
}