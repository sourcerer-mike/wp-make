# Creating options pages

Creating custom options panels in WordPress is relatively easy.
Anyway this tool makes it even simpler
and generates the code for you.

## Generating option pages

It will create those files within the plugin:

- admin/options-pages/
  - {id}.php
- includes/
  - {namespace}/admin/options-pages/class-{id}.php
  - options-{id}.php

The **id** can be set to anything you like.
If those files already exists within the repository
then they are updated.

### Backend view via "admin/options-page.php"

### Functionality via options class

### Registering the options page


[1]: https://codex.wordpress.org/Creating_Options_Pages
