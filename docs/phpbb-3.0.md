Transliterate with phpbb 3.0
============================

Files
---------

- Add the transliterator folder in base of forum.
- Add the transliterator.js file in your template theme directory.

Templates
---------

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
