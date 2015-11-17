# Google Map for Codestar Framework
An user friendly google map field for Codestar WordPress Options Framework. No need to go any website to find out google map latitude or longitude , just type your address in input box and get those data for frontend uses!


## Screenshot
[![Google Map for Codestar Framework Screenshot](https://goo.gl/tG6Dui)]


## Installation
* Download zip file from github repository
* Extract download zip on `cs-google-map`
* Copy `google_map` folder then paste inside `cs-framework/fields` directory


## User Guide
Similar uses for `google_map` field as the other fields do of Codestar Framework. But only difference is field type name. Take a look: 
```php
array(
  'id'    => 'location',
  'type'  => 'google_map',// this type name must be same
  'title' => 'Google Map',
  'default' => array(
	'address'  => 'United States',// You can use any location
  )
),
```


## Output
Two values lat and lon will be stored as an array under your defined ID. Example to get output from this field: 
```php
$meta_data = get_post_meta( get_the_id(), '_custom_page_options', true );

echo $meta_data['location']['lat'];
echo $meta_data['location']['lon'];
```

##### That's it. Try it out and make some awesome projects with [Codestar Framework](http://codestarframework.com/)


## Credits
* [Geocomplete](http://ubilabs.github.com/geocomplete/). 

## More Info
To get knowledge how Codestar Framework works then [Click Here](http://codestarframework.com/documentation/)