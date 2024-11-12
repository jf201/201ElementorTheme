# icchs_(web/icchs)_

1. REPLACE "elementor_starter_201" with "desired_name"
2. REPLACE "ElementorStarterTNO" with "DesiredName"


Wordpress Theme for icchs

## Technologies Used
- [WordPress](https://wordpress.org/)
- [Vite](https://vitejs.dev/)
- [TypeScript](https://www.typescriptlang.org/)
- [Sass](https://sass-lang.com/)
- [Docker](https://www.docker.com/)

## How to Use

To clone the project, run the following command:

```bash
git clone https://github.com/jf201/elementorStarter.git
```

### Build the Docker Image

When developing locally the first time you have to build the Docker Image

```bash
docker compose build
```

### Spin up the Docker Container

Start the development server on http://localhost:8080:

```bash
docker compose up -d
```

### Enter the Docker wordpress service with bash

```bash
docker compose exec wordpress bash
```

### Switch into the theme directory

```bash
cd ./wp-content/themes/201starter
```

### Install dependencies

Make sure to install the dependencies:

```bash
npm install
```

```bash
composer install
```

### Get Plugins from production

Connect with SFTP to the production server and download the plugins und uploads folder into the root of this repo.

### Shut down the Docker Container

Shut them down again when you're finished working

```bash
docker compose down
```
