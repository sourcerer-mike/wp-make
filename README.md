# WordPress Developer Helper

> I just hope you like the code.

-- Mike Pretzlaw, Developer

If not then please let me know in an issue
or by contacting me: hi@mike-pretzlaw.de

First of all I might need to tell you why having a code generator is a good idea.
I've tried a lot and at first sight it seems brilliant to have an additional plugin
that serves some basic functions
and besides the customer plugin.
Well, nope.
Rebuilding all the stuff from scratch with this little helper is brilliant,
because you are independent from additional sources.
Imagine the other plugin is deactivated somehow
or updated and then all those version collisions,
Yuck!
How about KISS?
Yee?!
Then try this code generator.

## How to use


### Standalone / Symfony

My favourite offering you those commands:

- Create option pages via `wp-make options-page foo`

Yes, it is `wp-make` instead of `wp-dev`
because in that way the commands are nicer to read
and remember.


### wp-cli support

Quickly generate within one command ...

- Option pages via `wp scaffold options-page {foo}`
- Sections pages via `wp scaffold settings-section {options-page} {section-id}`
