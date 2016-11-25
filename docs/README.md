# Generating code with wp-make

## Standalone

This command can be used by typing `wp-make`
(if installed globally)
or the path to it with some arguments.
The general concept is:

    wp-make <command> [plugin-slug] [...]

The **command** is a must have.
Without it won't make any sense.
Read more about the commands in the ["Scaffolding"](scaffolding.md)
section.

You can even skip the **plugin slug** when you are working
from within the plugin path or deeper.
This will be noticed by wp-make
and all commands will be applied to that plugin.
If you mean another plugin then provide the plugin slug.

You can run this from anywhere inside the WordPress folders
or some other level deeper than the ".wp-cli.yml".
It will automatically decide what to do:

1. **Inside a plugin dir** you can skip the plugin argument for any command.
  In that case it will apply everything within the current plugin.
2. **Inside WordPress** you can skip the


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
