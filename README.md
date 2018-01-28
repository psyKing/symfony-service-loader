# symfony-service-loader
Provides a Method that retrieves the Symfony service which you can specify with its service id as an argument. So you can load your Symfony controller as a service and let Symfony handle the request. Further, the Symfony core only will be loaded if you fetch a Symfony service via that method.

Therefore I forked the following project:
https://github.com/ekino/ekino-wordpress-symfony

I removed the hook-function, put the loading of the symfony core into a class and made it work with Symfony 3.4.
Thanks to ekino.


The plugin is ready to use:

- Download it
- Activate it
- Create a directory called "symfony" in the root directory of your
  wordpress application
- Install Symfony 3 into that directory
- Create an instance of the "SymfonyLoader"-Class
- Call the "getService"-Method with the serviceId as argument 
  according to the service object you want to get
  
  If you want to install symfony to another directory, you are free 
  to change the path to that directory in the "config.php"-File.
