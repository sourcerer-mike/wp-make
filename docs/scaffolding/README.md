# Scaffolding

With `wp-make` it is possible to scaffold some entities
and pages like ...

- [Options groups](./options-page.md)

Please keep in mind that this is just some
rapid prototyping
and should help you develop things faster.
It might need some time to get better at generating code for you.
So please contribute :)

Everything that is created using `wp-make`
aims to follow the WordPress Coding Standards.
You might complain about some decisions in wording,
naming,
or structure.
Feel free to leave an issue so that we can discuss this.
But also be aware that everything planned here
is somewhere documented in the Codex
or other standards like VIP coding standards
or best practices.

In other words: Lean back, relax,
and enjoy that this tool generates it
just like WordPress wants it.
So lets go!

## Structure

The major directories looks like this (within the plugin folder):

- admin/
- includes/
- public/

The **admin** folder is given for templates that will be shown in the backend.
Those are usually used by classes within the `\Plugin_Slug\Admin` scope.
For example an options page
(like `\Plugin_Slug\Admin\Options_Pages\Foo`)
will use the "admin/options-pages/foo.php" template.

The **includes** folder contains all classes
and most of the functionality.
It can be considered as the section for controller
and models, if you like.

All **public** data are in one folder.
Others will be protected by an `.htaccess`
and sometimes `index.php` file.
Remember that this only provides some protection on apache servers.
