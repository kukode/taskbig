<?php
switch ($_GET['page']){
	//users//
	case 'users':
		if ($_GET['page']){
			include 'inc/users.php';
			$content = $users;
		}
        break;
        
    case 'menu':
		if ($_GET['page']){
			include 'inc/menu/menu.php';
			$content = $menu;
		}
        break;
    case 'delete':
		if ($_GET['page']){
			include 'inc/menu/delete.php';
			$content = $delete;
		}
        break;
        
    case 'edit':
		if ($_GET['page']){
			include 'inc/menu/edit.php';
			$content = $edit;
		}
		break;
	
	default:
		include 'inc/home.php';
		$content = $home;
		break;
}
?>
