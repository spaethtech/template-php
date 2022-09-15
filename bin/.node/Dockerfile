ARG VERSION
FROM node:${VERSION}

# Set the work directory
WORKDIR /usr/src/app

# ----------------------------------------------------------------------------------------------------------------------
# USERS & PERMISSIONS
# ----------------------------------------------------------------------------------------------------------------------

# Create a dedicated user
#RUN useradd -ms /bin/bash -g root php

# Change the permissions so tools like composer and robo can self-update
#RUN chmod g+w /usr/local/bin

# ----------------------------------------------------------------------------------------------------------------------
# COMPOSER
# ----------------------------------------------------------------------------------------------------------------------

ENV INSTALL_TMP=/tmp/composer

#RUN DEBIAN_FRONTEND=noninteractive apt-get -y install git unzip \
# && mkdir -p "$INSTALL_TMP" \
# && php -r "copy('https://getcomposer.org/installer', '$INSTALL_TMP/composer-setup.php');" \
# && php "$INSTALL_TMP"/composer-setup.php --install-dir=/usr/local/bin --filename=composer \
# && rm "$INSTALL_TMP"/composer-setup.php \
# && unset INSTALL_TMP

RUN npm install -g yo

# ----------------------------------------------------------------------------------------------------------------------
# ROBO
# ----------------------------------------------------------------------------------------------------------------------

ENV INSTALL_DIR=/usr/local/bin/robo

#RUN DEBIAN_FRONTEND=noninteractive apt-get -y update \
# && DEBIAN_FRONTEND=noninteractive apt-get -y install wget \
# && wget https://robo.li/robo.phar -O "$INSTALL_DIR" \
# && chmod +x "$INSTALL_DIR" \
# && chmod g+w "$INSTALL_DIR" \
# && unset INSTALL_DIR

# ----------------------------------------------------------------------------------------------------------------------
# CLEANUP
# ----------------------------------------------------------------------------------------------------------------------

RUN rm -rf /var/lib/apt/lists/*

# ----------------------------------------------------------------------------------------------------------------------
# ENVIRONMENT
# ----------------------------------------------------------------------------------------------------------------------

# Set environment variables
#ENV PATH "/home/php/bin:$PATH"
ENV PROJECT_DIR=/usr/src/app

# ----------------------------------------------------------------------------------------------------------------------
# FINALIZATION
# ----------------------------------------------------------------------------------------------------------------------

# Set the user
USER node

# ----------------------------------------------------------------------------------------------------------------------
# ENTRYPOINT & COMMAND
# ----------------------------------------------------------------------------------------------------------------------

#ENTRYPOINT [ "node" ]
#CMD [ "-v" ]
