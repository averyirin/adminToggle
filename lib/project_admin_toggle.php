<?php

function get_admin_toggle($userGuid){

  $return = array();

  $isAdmin = (get_entity($userGuid)->project_admin == '1');
  
  $vars = array('userGuid'=>$userGuid);
  if($isAdmin){
    $title = "You are a Project Admin";
    $content .= elgg_view_form('project_admin_toggle/removeProjectAdmin', array(), $vars);
  }else{
    $title = "You are NOT a Project Admin";
    $content .= elgg_view_form('project_admin_toggle/addProjectAdmin', array(), $vars);
  }
  elgg_push_breadcrumb($title);

  $return['content'] = $content;
  $return['title'] = $title;
  return  $return;
}

?>
