#neighborhoods

Crowd sourcing neighborhood boundaries, stories, and descriptions. Making pretty maps.

This project is designed to collect boundaries and descriptions of neighborhoods and the like, and immediatley make them available for cartographic presentation and exploration.

[Live Site](http://pnwmaps.com/neighborhoods)

###Steps to Configure 

1. Create a [CartoDB](http://cartodb.com/) account. 
 	-add a table, easiest way would be to dowload the shapefile from the [Live Site](http://pnwmaps.com/neighborhoods), add it to your cartoDB account, and empty it. That way you would get the field names and data types rolled right over.   

2. Change the configuration settings in the top bit of [hoodscript.js](https://github.com/enam/neighborhoods/blob/master/js/hoodscript.js).

3. Update the API key and such in [cartodbProxy.php](https://github.com/enam/neighborhoods/blob/master/php/cartodbProxy.php). AND move this file somewhere above your web root.

4. Update the include path in [callProxy.php](https://github.com/enam/neighborhoods/blob/master/php/callProxy.php) for wherever you put cartodbProxy.php on your server.

5. Grab a beer. Don't know if you have a brewery nearby? Check [here](http://nickmartinelli.com) :)  

###author
* [Nick Martinelli](https://twitter.com/nichom)
Please contact me if you do make use, or improve the codez! I'd love to see what people do.