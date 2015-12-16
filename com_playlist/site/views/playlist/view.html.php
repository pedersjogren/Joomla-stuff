<?php



defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');




class PlaylistViewPlaylist extends JViewLegacy
{

		protected $items;
        protected $playlist;

	public function display($tpl = null)
	{
		
        $this->playlist= "Mest populära videolektionerna";
        $this->items = $this->get('Items'); 
        
        if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
        
		parent::display($tpl); 
    }
     

}















