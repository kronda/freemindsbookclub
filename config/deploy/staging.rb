# Set the deployment directory on the target hosts.
set :deploy_to, "/home/freemind/sites/#{application}-#{stage}"

# Use the correct branch on github. Uncomment this if you have set up seperate branches for each staging area
set :branch, "staging"

# The hostnames to deploy to.
role :web, "108.174.148.30"

# Specify one of the web servers to use for database backups or updates.
# This server should also be running Wordpress.
role :db, "108.174.148.30", :primary => true

# The path to wp-cli
set :wp, "cd #{current_path}/#{app_root} ; wp"

# The username on the target system, if different from your local username
ssh_options[:user] = 'freemind'

set :staging_domain, "#{application}.org"