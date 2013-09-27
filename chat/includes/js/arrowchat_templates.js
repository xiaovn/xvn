var ArrowChat = {};
ArrowChat.Templates = {
	bar_hide_tab				: function () { return '<div id="arrowchat_hide_bar_button" class="arrowchat_bar_right arrowchat_bar_button"><?php echo $file_bar_hide_tab; ?></div>'; },
	bar_show_tab				: function () { return '<div id="arrowchat_show_bar_button" class="arrowchat_bar_right arrowchat_bar_button"><?php echo $file_bar_show_tab; ?></div>'; },
	applications_bookmarks_tab		: function (k,apps,b) { return '<?php echo $file_applications_bookmarks_tab; ?>'; },
	applications_bookmarks_window		: function (k,apps,b) { return '<?php echo $file_applications_bookmarks_window; ?>'; },
	applications_bookmarks_list		: function (k,apps,b) { return '<?php echo $file_applications_bookmarks_list; ?>'; },
	applications_tab			: function () { return '<?php echo $file_applications_tab; ?>'; },
	applications_window			: function () { return '<?php echo $file_applications_window; ?>'; },
	notifications_tab			: function () { return '<?php echo $file_notifications_tab; ?>'; },
	notifications_window			: function () { return '<?php echo $file_notifications_window; ?>'; },
	chat_tab				: function (shortname) { return '<div class="arrowchat_bar_right arrowchat_bar_button arrowchat_user_tab"><?php echo $file_chat_tab; ?></div>'; },
	chat_window				: function (c, longname, i, l, b) { return '<div class="arrowchat_tabpopup"><?php echo $file_chat_window; ?></div>'; },
	buddylist_tab				: function () { return '<?php echo $file_buddylist_tab; ?>'; },
	buddylist_window			: function (d, _ts, acp) { return '<?php echo str_replace("<!--", "", $file_buddylist_window); ?>'; },
	maintenance_tab				: function () { return '<div id="arrowchat_maintenance" class="arrowchat_bar_right arrowchat_bar_button"><?php echo $file_maintenance_tab; ?></div>'; },
	announcements_display			: function (h) { return '<?php echo $file_announcements_display; ?>'; },
	chatrooms_tab				: function () { return '<div id="arrowchat_chatrooms_button" class="arrowchat_bar_right arrowchat_bar_button"><?php echo $file_chatrooms_tab; ?></div>'; },
	chatrooms_window			: function () { return '<div id="arrowchat_chatrooms_popup" class="arrowchat_tabpopup"><?php echo $file_chatrooms_window; ?></div>'; },
	chatrooms_room				: function () { return '<?php echo $file_chatrooms_room; ?>'; }
};
ArrowChat.IdleTime = <?php echo $idle_time; ?>;

