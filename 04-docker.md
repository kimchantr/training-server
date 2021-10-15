# 04 - Docker

1. Build `demo-php` image from `php.dockerfile`

```bash
sudo docker build -f php.dockerfile -t demo-php .
```

2. Build `demo-nginx` image from `Dockerfile`

```bash
sudo docker build -t demo-nginx .
```

3. Run `demo-php` container

```bash
sudo docker run --name container-demo-php demo-php
```

4. Run `demo-nginx` container with `demo-php` container

```bash
sudo docker run -dp 3001:80 --link container-demo-php:php demo-nginx
```

> Go to http://localhost:3001

![1](img/1.png)
