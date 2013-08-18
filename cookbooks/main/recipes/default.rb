# so simple I could have used shell script provisioning
# but it's in Chef to allow for future awesomeness


execute "apt-get-update" do
  command "apt-get update"
end

package "apache2" do
  action :install
end

package "php5" do
  action :install
end

package "mysql-server"

package "mysql-client"

execute "mysqladmin -u root -h localhost password 'vagrant'"

package "php5-mysql"

# should we place somewhere else ... or at least check to see if Wordpress already installed?
remote_file "/tmp/latest.tar.gz" do
  source "http://wordpress.org/latest.tar.gz"
  action :create_if_missing
  mode "0744"
  owner "root"
  group "root"
end

# untar it
execute "tar -C /var/site/ -xvzf latest.tar.gz" do
  creates "/var/site/wordpress/wp-login.php" # can be any file in WP
  action :run
  user "root"
  cwd "/tmp"
end

# create database
execute 'mysql -u root -pvagrant -e "create database wordpress;"'

# yes this is VERY BAD
execute 'chmod 777 /var/site/wordpress'

# fast and dirty way to change Apache default dir to wordpress - better to use a proper template
execute "sed -i 's/\\\/var\\\/www/\\\/var\\\/site\\\/wordpress/g' /etc/apache2/sites-available/default"

# service "apache2" do
#   action :reload
# end

# this is cheating - not sure why service statement wasn't reloading it the way I wanted
execute "service apache2 reload"