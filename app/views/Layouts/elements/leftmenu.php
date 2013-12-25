<div class="middle_left_menu_top"></div>
<div class="middle_left_menu_middle">
	<ul class="middle_left_menu">
		<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=Admin" class="<?php echo $_GET['controller'] == 'Admin' ? 'focus' : 'blur'; ?>"><?php echo $YPL_LANG['menu_home']; ?></a></li>
		<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=Admin&amp;action=logout"><?php echo $YPL_LANG['menu_logout']; ?></a></li>
	</ul>
</div>
<div class="middle_left_menu_bottom"></div>

<div class="middle_left_menu_top"></div>
<div class="middle_left_menu_middle">
	<ul class="middle_left_menu">
		<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=AdminListings" class="<?php echo $_GET['controller'] == 'AdminListings' && in_array($_GET['action'], array('index', 'update')) ? 'focus' : 'blur'; ?>"><?php echo $YPL_LANG['menu_browse']; ?></a></li>
		<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=AdminListings&amp;action=create" class="<?php echo $_GET['controller'] == 'AdminListings' && $_GET['action'] == 'create' ? 'focus' : 'blur'; ?>"><?php echo $YPL_LANG['menu_add']; ?></a></li>
		<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=AdminListings&amp;action=search" class="<?php echo $_GET['controller'] == 'AdminListings' && $_GET['action'] == 'search' ? 'focus' : 'blur'; ?>"><?php echo $YPL_LANG['menu_find']; ?></a></li>
	</ul>
</div>
<div class="middle_left_menu_bottom"></div>

<?php
if ($controller->isAdmin())
{
	?>
	<div class="middle_left_menu_top"></div>
	<div class="middle_left_menu_middle">
		<ul class="middle_left_menu">
			<li><a href="preview.php" target="_blank"><?php echo $YPL_LANG['menu_preview']; ?></a></li>
			<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=AdminOptions&amp;action=install" class="<?php echo $_GET['controller'] == 'AdminOptions' && $_GET['action'] == 'install' ? 'focus' : 'blur'; ?>"><?php echo $YPL_LANG['menu_install']; ?></a></li>
		</ul>
	</div>
	<div class="middle_left_menu_bottom"></div>
	
	<div class="middle_left_menu_top"></div>
	<div class="middle_left_menu_middle">
		<ul class="middle_left_menu">
			<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=AdminOptions" class="<?php echo $_GET['controller'] == 'AdminOptions' && $_GET['action'] == 'index' ? 'focus' : 'blur'; ?>"><?php echo $YPL_LANG['menu_options']; ?></a></li>
			<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=AdminUsers" class="<?php echo $_GET['controller'] == 'AdminUsers' ? 'focus' : 'blur'; ?>"><?php echo $YPL_LANG['menu_users']; ?></a></li>
			<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=AdminCountries" class="<?php echo $_GET['controller'] == 'AdminCountries' ? 'focus' : 'blur'; ?>"><?php echo $YPL_LANG['menu_countries']; ?></a></li>
			<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=AdminCategories" class="<?php echo $_GET['controller'] == 'AdminCategories' ? 'focus' : 'blur'; ?>"><?php echo $YPL_LANG['menu_categories']; ?></a></li>
		</ul>
	</div>
	<div class="middle_left_menu_bottom"></div>
	<?php
}
?>
