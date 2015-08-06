#neighborhoods

Crowd sourcing neighborhood boundaries, stories, and descriptions. Making pretty maps.

This project is designed to collect boundaries and descriptions of neighborhoods and the like, and immediatley make them available for cartographic presentation and exploration.

[Live Site](http://pnwmaps.com/neighborhoods)

###Steps to Configure 

1. Create a [CartoDB](http://cartodb.com/) account. 
 	-add a table. ~~ easiest ~~ One way would be to dowload the shapefile from the [Live Site](http://pnwmaps.com/neighborhoods), add it to your cartoDB account, and empty it. That way you would get the field names and data types rolled right over. However a couple items need updateing. The "description" field gets imported as "descriptio" with no "n". Needs updating in the cartodb table. Also, the "flag" field needs data type changed back to boolean. Not really sure why it doesn't import correctly...but there it is.  

2. Change the configuration settings in the top bit of [hoodscript.js](https://github.com/enam/neighborhoods/blob/master/js/hoodscript.js).

3. Update the API key and such in [cartodbProxy.php](https://github.com/enam/neighborhoods/blob/master/php/cartodbProxy.php). AND move this file somewhere above your web root.

4. Update the include path in [add.php](https://github.com/enam/neighborhoods/blob/master/php/add.php), [flag.php](https://github.com/enam/neighborhoods/blob/master/php/flag.php), and [heart.php](https://github.com/enam/neighborhoods/blob/master/php/heart.php) for wherever you put those files on your server.

5. Change [googleanalytics.js](https://github.com/enam/neighborhoods/blob/master/js/googleanalytics.js) to use your analytics code if you want, or remove the script that includes it from line 215 of [index.html](https://github.com/enam/neighborhoods/blob/master/index.html). 

6. Grab a beer. Don't know if you have a brewery nearby? Check [here](http://nickmartinelli.com) :)  

FYI - This project cannot run on gh-pages as it requires php to run the proxy to CartoDB.   

###Thanks!
###These are the things in the toolbox. 
1. [CartoDB](http://cartodb.com/) 
2. [Leaflet](http://leafletjs.com/)
3. [Bootstrap](http://getbootstrap.com/javascript/)
4. [Leaflet Draw!](https://github.com/Leaflet/Leaflet.draw)
5. [Slim Scroll](http://rocha.la/jQuery-slimScroll/)
6. Whole project was inspired by [Bostonography](http://bostonography.com/2012/crowdsourced-neighborhood-boundaries-part-one-consensus/).

###author
* [Nick Martinelli](https://twitter.com/nichom)
Please contact me if you do make use, or improve the code, because there is a lot that could use improving, and I would love any tips! I'd also really enjoy seeing what people do.
