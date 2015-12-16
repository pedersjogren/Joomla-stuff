<?php


defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');



class PlaylistModelPlaylist extends JModelList
{

    
    	public function getListQuery()
	{
		$query = parent::getListQuery();

		//$db = $this->getDbo();
		//$query = $db->getQuery(true);

		$query->select('titel, artist');
        $query ->from('#__pa_videolesson')
           ->order('antal_visningar DESC');
           
        return $query; 
            
     
	}
    
    
    
   
}