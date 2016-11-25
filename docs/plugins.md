# Plugins

## Structure

The major directories looks like this (within the plugin folder):

- admin/
- includes/

The **admin** folder is given for templates that will be shown in the backend.
Those are usually used by classes within the `\Plugin_Slug\Admin` scope.
For example an options page
(like `\Plugin_Slug\Admin\Options_Pages\Foo`)
will use the "admin/options-pages/foo.php" template.
