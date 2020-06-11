# PHP_HTML

Few random different ways to structure your HTML in PHP.

## 1. `includes`

Older style of using PHP itself as the templating language.
Mixes application logic and presentation logic.
Variable scope can be a challenge.

## 2. `echos`

Actually just by using strings to `echo` out HTML.
Add render functions that just return HTML to be `echo`'d out.

Using heredoc just for formatting reasons. Could also do individual `echo` lines.

## 3. `templates`

Have certain PHP files set aside for "templates".
Adds a new `render_template` function that takes a template name and a list of variables to pass to the template.
Allows you to better separate application logic from rendering logic.

## 4. `mvc`

More modern approach to HTML with PHP via an MVC-ish structure.
Also added a bit more abstraction by explicitly separating controllers/views.

## 5. `Twig`

Using Twig as an HTML templating engine.

Not using PHP for actually manipulating HTML. Leaving that to Twig.
PHP's job is just to do the application logic and then pass that on to the templates.

Twig uses composer for dependency management + autoloading.
So you'll need to have composer on your machine. Then just `cd` to this directory and run `composer install`.
