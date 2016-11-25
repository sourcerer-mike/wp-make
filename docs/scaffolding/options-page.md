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

The following sections
and examples will explain what happens
when this command is run:

    wp-make options-page my-plugin my-config

There are additional options if you like:

- `--label` to set a label.
  Optional and by default like the ID but with spaces.
  (Warning: Not yet implemented!)

### Backend view via "admin/options-page.php"

When clicking on "Settings" > "My config" (label: can be chosen by you via command)
you'll see the settings page for the added options group.

Note: This menu entry can be removed
by deleting the generated lines in the "includes/options-pages.php"
(see "Registering the options page").

By now the options page has a heading
and will print a form for all sections in the created options group.


### Functionality via options class

### Registering the options page


[1]: https://codex.wordpress.org/Creating_Options_Pages
