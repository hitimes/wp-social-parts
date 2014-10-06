wp-social-parts
===============

Social Sharing template part and associated files for WordPress.

```custom-functions.php``` is a function you can put in your ```functions.php``` file. We just break ours out into a few different partials. The function itself adds meta tags to the header, and pulls in the title, description and image dynamically based on the post.

In addition the SASS utilizes icon fonts complied by [grunt-webfont](https://github.com/sapegin/grunt-webfont) which outputs the :before syntax for ```.icon--facebook``` ```.icon-googleplus``` etc.

Future Items
------------
- Use flat SVG's in place of icon fonts.