Transliterate with phpbb 3.2
============================

Files
---------

- Add the transliterator folder in base of forum.
- Add the transliterator.js file in your template theme directory.

Templates
---------

- You need to duplicate your theme and rename it as you want.
- Activate the theme in the admin panel.

In viewforum_body.html

```html
> replace
> <!-- IF topicrow.U_VIEW_TOPIC --><a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a><!-- ELSE -->{topicrow.TOPIC_TITLE}<!-- ENDIF -->
> by
> <!-- IF topicrow.U_VIEW_TOPIC --><a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE} <small class="row-item-transliteration" data-id="{topicrow.TOPIC_ID}" data-name="{topicrow.TOPIC_TITLE}"></small></a><!-- ELSE -->{topicrow.TOPIC_TITLE}<!-- ENDIF -->
```

In overall_footer.html

```html
> after
><!-- INCLUDEJS ajax.js -->
> add
> <!-- INCLUDEJS transliteration.js -->
```

- In the administration panel include the new theme in all forums that need it.
- Resynchronise forum.
