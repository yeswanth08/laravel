composer => it is the php package management tool which used to install the external packages and libraries using this

vendor => this folder is like node_modules folder which stores all the libraries which in composer.json file  or installed via composer 

app (M,C) => controller , model , service providers are stored and this is the core folder which stores all this

web.php => which stores all the routes 

console.php => used for terminal routes

resources/views(v) => this stores the view of the mvc which is the ui of the application

public => this is the first folder which mounts when the app spins in the browser includes index.php (main php file which spins first when there is a mount) all requests entre through this file 

storage => stores all the logs(error logs / mount logs) and cache 

test => for unit testing (which is done by the developer basically a high level testing)

composer.json => stores all the dependencies of the application

composer.lock.json => stores all the nested dependecies as one dependency is depend on the other dependancy 

vite.json => creates a local deployment server 

.env => stores all the secret files 

kernal => handles global middlewares and network calls 
