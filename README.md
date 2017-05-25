# Container for KUserFeedback's service

KUserFeedback is a KDE project located at https://phabricator.kde.org/source/kuserfeedback/.

## KUserFeedback
The kuserfeedback container is published on Docker Hub as [kdab/kuserfeedback](https://hub.docker.com/r/kdab/kuserfeedback). It provides

- Apache with PHP 7 and mod_rewrite
- KUserFeedback sources

Port 80 runs KUserFeedback under the server's top level with HTTP. If you need HTTPS, put this container behind a proxy.

## MySQL
The `docker-compose.yml` file provides an easy way to start KUserFeedback with a MySQL database:
1. Copy `env.example` to `.env`
2. Edit `.env` (you can freely choose the passwords)
3. run `docker-compose up -d`

This should expose KUserFeedback on `HOST_HTTP_PORT` on your machine.
