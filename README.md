# wordpress-tag-cloud-fix

The standard WordPress tag cloud widget is shocking. 
 
It adds inline CSS font sizing and offers no way to alter or add to the class attribute of the tag link. This is an attempt to fix that.
 
* Adds a callback to replace the link title attribute for better CSS access
* Removes the inline style attribute

Only thing left to do is adding custom styles in CSS by targetting the title attribute.