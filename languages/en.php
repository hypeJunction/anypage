<?php
/**
 * Anypage language
 */

return array(
	'admin:appearance:anypage' => 'Static Pages',
	'admin:appearance:anypage:new' => 'New Page',
	'admin:appearance:anypage:edit' => 'Edit Page',
	
	'item:object:anypage' => 'Static pages',

	'anypage:warning' => 'Warning',
	'anypage:unsupported_page_handler_character' => "This path uses a character that is unsupported "
		. "in the default version of Elgg's .htaccess rewrite rules. You can only use letters, "
		. "numbers, _, and - in paths before a /. Example: /test/page.html works but /page.html doesn't. <br /><br />"
		. "If you are using Apache and Elgg's default rewrite rules, this page will not work!."
	,

	'anypage:page_handler_conflict' => 'This path conflicts with a built-in Elgg page '
		. 'and could cause unexpected behavior. Only keep this path if you know what you are doing.',

	'anypage:anypage_conflict' => 'This path conflicts with the AnyPage page "%s". Click its title to view, edit, or delete that page.',

	'anypage:new' => 'New Page',
	'anypage:no_pages' => 'You have not created any pages yet. Click the "New Page" link above to add a page.',

	'anypage:needs_upgrade' => 'AnyPage Upgrade Required',
	'anypage:needs_upgrade_body' => 'AnyPage requires an upgrade. ',
	'anypage:upgrade_now' => 'Upgrade now.',
	'anypage:upgrade_success' => 'Successfully updated AnyPages',

	// form
	'anypage:path' => 'Page path',
	'anypage:path_full_link' => 'Full link',
	'anypage:view_info' => 'This page will use the following view:',
	'anypage:body' => 'Page body',
	'anypage:visible_through_walled_garden' => 'Visible through Walled Garden',
	'anypage:walled_garden_disabled' => 'Walled Garden is not enabled',
	'anypage:requires_login' => 'Requires login',
	'anypage:layout' => 'Layout',
	'anypage:unsafe_html' => 'Disable HTML filtering and validation',
	'anypage:unsafe_html:help' => 'Do not use this option if you are copying HTML content from an untrusted source! HTML filtering keeps your site secure by preventing cross-site scripting injections and ensures HTML validity. You may sometime need to resort to this option, if you are embedding, for example, a Google Calendar or a YouTube video.',

	'anypage:use_view' => 'Display a custom view',
	'anypage:use_editor' => 'Use an editor to write this page',
	'anypage:use_composer' => 'Use the composer to build this page',

	// actions
	'anypage:save:success' => 'Saved page',
	'anypage:delete:success' => 'Page deleted',
	'anypage:no_path' => 'You must enter a path',
	'anypage:no_view' => 'You must enter a view.',
	'anypage:no_description' => 'You must enter a page body.',
	'anypage:any_page_handler_conflict' => 'The path you entered is already registered to a page.',
	'anypage:delete:failed' => 'Could not delete page.',

	// example pages
	'anypage:example:title' => 'AnyPage Example Page',
	'anypage:example_page:description' => 'This is an example of a page rendered using AnyPage!',

	'anypage:example:view:title' => 'AnyPage Example Page (Using View)',
	'anypage:test_page_view' => 'This is an example of a page rendered by AnyPage using a view!',

	'anypage:activate:admin_notice' => 'AnyPage has added example pages. Use the <a href="%s">admin interface</a> to add more pages.',

	'anypage:menu_item' => 'Add a menu item',
	'anypage:menu_name' => 'Menu name',
	'anypage:menu_section' => 'Menu section',
	'anypage:menu_parent' => 'Parent item name',
);
