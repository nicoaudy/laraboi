# Laraboi - Laravel boilerplate 🔥🤙

For personal use 🚀, version 7*

## Installation

```bash
$ cd bin/
$ chmod +x setup.sh

$ ./setup.sh
```

## Batteries Include

- laravelmanthra
- cors
- passport (for api authentication)
- role permission by default
- datatables
- dropbox (filesystem)

## Filesystem

First you have to get the [DropboxToken](https://www.dropbox.com/developers) and put to .env

```
DROPBOX_ACCESS_TOKEN=yourtokenhere!
```

Than make it dropbox as your default disk  `config/filesystem` like this

```php
'default' => env('FILESYSTEM_DRIVER', 'dropbox'),
```