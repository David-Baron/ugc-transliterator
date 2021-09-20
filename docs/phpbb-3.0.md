Transliterate with phpbb 3.0
============================

Files
---------

- Download and extract the archive.
- Add the transliterator folder in base of forum.
- Add the transliterator.js file in your template theme directory.

Templates
---------

- You need to duplicate your theme and rename it as you want.
- Activate the theme in the admin panel.

In viewforum_body.html

```html
> replace
> <dt<!-- IF topicrow.TOPIC_ICON_IMG and S_TOPIC_ICONS --> style="background-image: url({T_ICONS_PATH}{topicrow.TOPIC_ICON_IMG}); background-repeat: no-repeat;"<!-- ENDIF --> title="{topicrow.TOPIC_FOLDER_IMG_ALT}"><!-- IF topicrow.S_UNREAD_TOPIC --><a href="{topicrow.U_NEWEST_POST}">{NEWEST_POST_IMG}</a> <!-- ENDIF --><a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a>
> by
> <dt<!-- IF topicrow.TOPIC_ICON_IMG and S_TOPIC_ICONS --> style="background-image: url({T_ICONS_PATH}{topicrow.TOPIC_ICON_IMG}); background-repeat: no-repeat;"<!-- ENDIF --> title="{topicrow.TOPIC_FOLDER_IMG_ALT}"><!-- IF topicrow.S_UNREAD_TOPIC --><a href="{topicrow.U_NEWEST_POST}">{NEWEST_POST_IMG}</a> <!-- ENDIF --><a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}  <small class="row-item-transliteration" data-id="{topicrow.TOPIC_ID}" data-name="{topicrow.TOPIC_TITLE}"></small></a>
```

In overall_footer.html

```html
> after
> <script src="{T_TEMPLATE_PATH}/assets/slick/slick.min.js"></script>
> add
> <script src="{T_TEMPLATE_PATH}/transliteration.js"></script>
```

- In the administration panel include the new theme in all forums that need it.
- Resynchronise forum.
