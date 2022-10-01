<p align="center">
  <h1 align="center">Clinic Management API</h1>

  <p align="center">
    REST API of Clinic Application
  </p>
</p>

<div align="center">

[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
  
</div>

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation-or-configure">Installation or Configure</a></li>
        <li><a href="#deployment-guide">Deployment Guide</a></li>
        <li><a href="#api-specification">API Specification</a></li>
      </ul>
    </li>
    <li><a href="#features">Features</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

## About The Project
Since it's not defined, we're don't know why this project created.

## Getting Started

### Prerequisites

When you're going to contribute or compile, you'll need at least:
  - PHP 8.x
  - MongoDB 4.1

### Installation or Configure

```bash
# clone if you don't have the code base
$ git clone git@github.com:thisham/motostock-api.git

# install dependencies
$ composer install

# run development server
$ php artisan server
```

### Deployment Guide 

1. Clone the project and install project production dependencies

    ```bash
    # clone if you don't have the code base
    $ git clone git@github.com:thisham/motostock-api.git

    # install production dependencies
    $ composer install --production
    ```

2. Move to php server (such as nginx, apache etc.) then address it at `public/` directory.

### API Specification

Access at route `/docs` while app running.

## Feature

- Transaction Management
- Stock Viewer
- Selling Report 

## License

The unlicensed one.

## Contact

- Hamdan Yuwafi - <yuwafi.hamdan365@gmail.com>


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[issues-shield]: https://img.shields.io/github/issues/thisham/motostock-api.svg?style=for-the-badge
[issues-url]: https://github.com/thisham/motostock-api/issues
[license-shield]: https://img.shields.io/github/license/thisham/motostock-api.svg?style=for-the-badge
[license-url]: https://github.com/thisham/motostock-api/blob/master/LICENSE
