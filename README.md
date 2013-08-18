This is bare-bones WordPress on Vagranet setup. It's a short little Chef script. No additional recipes, not highly 
configurable. Just sets up a LAMP setup on Ubuntu 12.04 with Wordpress as the default site.

Keep in mind that some of the directory and database permissions are wide open - definitely not production quality. 
Just enough to do WordPress dev on your local machine. 

When it spins up, go to http://10.10.10.25, and follow the wizard. Specify ```root``` as the db username, 
and ```vagrant``` as 
the password.

All the files are in ./site. Of course, you generally wouldn't edit the core Wordpress files, but you may be adding if 
you're doing theme or plugin dev. Also, you may end up deploying files like wp-config.php.

