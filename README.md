# Hämta alla parent-child-sidor för hela webbplatsen

## Hur man använder Region Hallands plugin "region-halland-nav-site"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-nav-site".


## Användningsområde

Denna plugin skapar en array() med alla parent-child-sidor neråt för hela webbplatsen


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-nav-site.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-nav-site.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-nav-site": "1.0.0"
},
```


## Versionhistorik

### 1.0.0
- Första version


