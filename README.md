# FairSource.co.uk

Website for FairSource

## Table of contents

- [Setup](#setup)
- [Gulp commands](#gulp-commands)

## Setup

1. Download and install (where applicable) the following software:
   - [Git](https://git-scm.com/downloads)
   - [MySQL](https://dev.mysql.com/downloads/mysql/)
     - If MySQL is provided by your stack, don't forget to stop your webserver. Also check the port that MySQL uses and apply it in the config files accordingly, if necessary.
   - [Node.js with npm](https://nodejs.org/en/download/current/)
   - [WordPress](https://wordpress.org/download/)

1. Clone the project:
    - HTTPS: `git clone https://github.com/Competa-IT/FairSource.co.uk.git`
    - SSH: `git clone git@github.com:Competa-IT/FairSource.co.uk.git`

      This will create a new project directory called `FairSource.co.uk`.

1. Open the WordPress archive and extract all the files *inside* the `wordpress` directory into the root of the new project directory.

1. **Copy** `wp-config-sample.php` and then rename it to `wp-config.php`.
   > Do not rename the file directly, it must remain untouched in the repo.

1. Add database connection details for WordPress if necessary by editing `wp-config.php`.

1. Install the JSHint and Gulp CLI packages globally:

   ```shell
   npm i jshint gulp-cli -g
   ```

1. Install the dependencies for this project:
   1. Navigate to `FairSource.co.uk/wp-content/themes/fairsource`.
   1. Install the project dependencies:

      ```shell
      npm i
      ```

1. Make sure you can access PHP from your CLI so that the Gulp server works.
   - You can test this with `php -v`.
   - If you're not sure how to do this, check out [this question on StackOverflow](http://stackoverflow.com/questions/2736528/how-to-set-the-env-variable-for-php) for Windows.

1. Add database connection details for Gulp:
    1. Go to `FairSource.co.uk/wp-content/themes/fairsource/config/`.
    1. **Copy** `development.sample.js` and then rename it to `development.js`.
       > Do not rename the file directly, it must remain untouched in the repo.

    1. Add your database details to `development.js`.

1. Create the database: `gulp database:create`
   - If you already have a database with the same name, firstly drop it with `gulp database:drop`.

1. Run Gulp to start watch and server: `gulp`

1. Go through the setup.

1. Add custom fields for the Links and Resources section:

   1. Go to **Plugins** and install + activate the [**Advanced Custom Fields**](https://wordpress.org/plugins/advanced-custom-fields/) plugin through the plugin manager.

   1. Go to **Custom Fields** and add the following new fields:

      Field Label | Field Name | Field Type
      ------------|------------|-----------
      Image | image | Image
      PDF | pdf | File

   1. Add them with a new field group called `Resources`.

That's it.

[▲](#fairsourcecouk)

## Gulp commands

A list of Gulp commands available in this project:

- Start watch and the server:

  ```shell
  gulp
  ```

- Create the database:

  ```shell
  gulp database:create
  ```

- Drop the database:

  ```shell
  gulp database:drop
  ```

- Import the data from `data.sql`:

  ```shell
  gulp database:import
  ```

- Export the data to `data.sql`:

  ```shell
  gulp database:export
  ```

- Build all the styles without starting watch:

  ```shell
  gulp build
  ```

- Run all Lint checks

  ```shell
  gulp lint
  ```

[▲](#fairsourcecouk)
