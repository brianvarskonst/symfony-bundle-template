# Bvsk Bundle Template

Provides a starting point for creating Symfony Bundles, compatible with Symfony 5 and 6.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Quality Assurance](#quality-assurance)

## Requirements
- PHP 8.1
- Composer 2
- Symfony 5 || 6

## Installation

### Git

Install with [Git](https://git-scm.com/):

```sh
$ git clone brianvarskonst/symfony-bundle-template your-bundle-name
```

### Github Template

You can fork this repository and create new bundles from this template via [Github Repository Templates](https://docs.github.com/en/repositories/creating-and-managing-repositories/creating-a-template-repository) and creating new repositories.

## Usage

You need to change the Namespace from `Bvsk\\Bundle` to your favored Namespace, for each component.

## Quality Assurance

This Package provides a baseline of common used QA Code tools which you can run simply by custom composer script commands.

### PHP CodeSniffer

To ensure the quality of the code this package uses the Inpsyde Coding Standards,
which are especially created for WordPress Projects. You can also use it for every other projects.
Provides a good set of coding rules via PHP CodeSniffer CLI Tool.

```shell
$ composer cs
```

### Psalm

```shell
$ composer psalm
```

### Tests

#### Run all tests

```sh
$ composer tests
```

#### Run unit tests

```sh
$ composer tests:unit
```

#### Run integration tests

Integration tests needs to run from the project repository as they need a fully configured Symfony kernel.

```sh
$ composer tests:integration
```

## License

Copyright (c) 2022, Brianvarskonst under [MIT](LICENSE) License

## Contributing

All feedback / bug reports / pull requests are welcome.
