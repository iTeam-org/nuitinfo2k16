#!/bin/bash

WEBDIR=/var/www/

# Remove old save...
if [[ -e $WEBDIR/ndi_old ]]; then
    rm ${WEBDIR}/ndi_old
fi

# ...and a create a new one
cp -r ${WEBDIR}/ndi ${WEBDIR}/ndi_old

# Update new version (could be nice to use git tags and version branches of type appname-1.x)
cd ./ndi/
rm -r nuitinfo2k16
git clone git@github.com:iTeam-org/nuitinfo2k16.git
cd nuitinfo2k16/app/

# Install dependencies
composer install

# To be used in config/app.php to disable debug mode
export CAKE_PHPDEBUG 0