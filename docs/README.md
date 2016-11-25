# Generating code with wp-make

## Standalone

This command can be used by typing `wp-make`
(if installed globally)
or the path to it with some arguments.
The general concept is:

    wp-make <command> [plugin-slug|theme-slug] [...]

The **command** is a must have.
Without it won't make any sense.
Read more about the commands in the ["Scaffolding"](./scaffolding)
section.

You can even skip the **plugin slug** when you are working
from within the plugin path or deeper.
This will be noticed by `wp-make`
and all commands will be applied to that plugin.
If you mean another plugin then provide the plugin slug.


The basic arguments are:

- `--lang` to switch translations.
  (Warning: Not yet implemented!)
- `--path` to WordPress.

The **path to wp** can be skipped
if you are using this command from within the WordPress directories
or when the wp-load.php is just one level deeper.
This would mean when you work in "/srv/www" but WordPress is in "/srv/www/wp/wp-load.php"
then it still works.
(Warning: Not yet implemented!)
