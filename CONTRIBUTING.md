# Contributing

## Setup

### Option 1 - Manual

1. Fork and clone the repo
1. Run `npm install` to install dependencies
1. Create a branch for your PR with `git checkout -b your-branch-name`

> To keep `master` branch pointing to remote repository and make pull requests from branches on your fork. To do this, run:
>
> ```sh
> git remote add upstream https://github.com/khanakat/ToDo-php.git
> git fetch upstream
> git branch --set-upstream-to=upstream/master master
> ```

## Pull Request Guidelines

Don't worry if you get any of the below wrong, or if you don't know how. We'll gladly help out.

### Title

Make sure the title starts with a semantic prefix:

- **feat**: A new feature
- **fix**: A bug fix
- **improvement**: An improvement to a current feature
- **docs**: Documentation only changes
- **style**: Changes that do not affect the meaning of the code (white-space, formatting, missing semi-colons, etc)
- **refactor**: A code change that neither fixes a bug nor adds a feature
- **perf**: A code change that improves performance
- **test**: Adding missing tests or correcting existing tests
- **build**: Changes that affect the build system or external dependencies (example scopes: gulp, broccoli, npm)
- **ci**: Changes to our CI configuration files and scripts (example scopes: Travis, Circle, BrowserStack, SauceLabs)
- **chore**: Other changes that don't modify src or test files
- **revert**: Reverts a previous commit
