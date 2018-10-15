# Example for using CF

This example is based on [Pivotal CF](https://run.pivotal.io). Make sure you have the CF CLI installed.

The example contains a PHP droplet that provides a simple JSON API and a Static Droplet with a simple UI that consumes the JSON API.

## PHP

Deploy PHP app

```
cd php
cf push
```

By default the app will statr with 1 instance. The app can be sclaed via command line:

```
cf scale -i 4 anx-hn-php-demo
```

## STATIC

Deploy the Static app

```
cd static
cf push
```


# Blue/Green Deployment

Make sure you have the [Blue/Green Deployment](https://github.com/bluemixgaragelondon/cf-blue-green-deploy) plugin installed.

Instead of `cf push` you can now use `cf bgd anx-hn-php-demo --delete-old-apps`