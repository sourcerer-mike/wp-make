# Creating options pages

Creating custom options panels in WordPress is relatively easy.
Anyway this tool makes it even simpler
and generates the code for you.

Usage:

    wp-make options-page [plugin|theme] [group-id]

There are a few options to enhance generation even more:

- `--label` to set a more readable heading (optional).
  By default like the ID but with spaces.
  (Warning: Not yet implemented!)
- `--namespace` prefix will be put in front of every
  class name.
  By default it will turn the plugin or theme slug
  into a upper-snake-case
  (`some-plugin` becomes `Some_Plugin`).
  (Warning: Not yet implemented!)

The **group id** can be set to anything you like.

A **namespace** prefix can be provided
(e.g. `--namespace="Acme_Foo"`).
By default it will turn the plugin or theme slug
into a upper-snake-case
(`some-plugin` becomes `Some_Plugin`).


It will create those files within the plugin:

- admin/options-pages/
  - {group-id}.php
- includes/
  - {namespace}/admin/options-pages/class-{group-id}.php
  - options-{group-id}.php

If those files already exists within the repository
then they are updated.

## Generating option pages

The following sections
and examples will explain what happens
when this command is run:

    wp-make options-page my-plugin my-config



### Backend view

The command above will create the
"admin/options-pages/my-config.php" file
which is responsible for displaying the options form.
You find it by clicking on
"Settings" > "My config"
(the *label* can be configured).

Note: This menu entry can be removed
by deleting the generated lines in the "includes/options-pages.php"
(see "Registering the options page").

By now the options page has a heading
and will print a form for all sections in the created options group.


### Functionality via options class

Besides the view a kind of controller will be generated in 
"includes/admin/options-pages/class-my-config.php".
It is accessible via `$this` within the view (see above)
or you load the class
`\My_Plugin\Admin\Options_Pages\My_Config` in some other way.

### Registering the options page



[1]: https://codex.wordpress.org/Creating_Options_Pages
