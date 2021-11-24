# Name of the Drupal website  
[random_drupal_site](https://bitbucket.org/tizdev/template_readme_git/src/master/)

---

- Drupal [version]
- Status `DEV` / `TEST` / `PROD` 

---

## Table of contents

* [About the project](#markdown-header-about-the-project)
    * [Contributors](#markdown-header-contributors)
    * [Description](#markdown-header-description)
    * [Plugins](#markdown-header-plugins)
    * [Environments](#markdown-header-environments)
* [Getting started](#markdown-header-getting-started)
    * [Prerequisites](#markdown-header-prerequisites)
    * [Installation](#markdown-header-installation)
    * [Credentials](#markdown-header-credentials)
* [Production](#markdown-header-test-and-deploy)
    * [Create the environments](#markdown-header-create-the-environments) 
* [Test and deploy](#markdown-header-test-and-deploy)
    * [Deploy method](#markdown-header-deploy-method)   
* [Frequently asked questions](#markdown-header-frequently-asked-questions)


---


## About the project

### Contributors

 * Developers : xxxx XXXX, xxxx XXXX
 * Designer : xxxx XXXX
 * Project manager : xxxx XXXX
 * Marketing : xxxx XXXX
 * Commercial : xxxx XXXX
 

### Description

![Alt text](https://i.ibb.co/YDKNjBm/screenshot.png)

Template for the README of Git projects. This need to be use in new project created. This section need to describe briefly the project, and how it works.

### Plugins
 * List of plugins used
 
 
### Environments

 * Preprod :  https://example.com/
 * Prod : https://example.com/

Back-Office : https://example.com/

---

## Getting started

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.

* npm
```sh
$ npm install npm@latest -g
```

### Installation

1. Install dependencies
```sh
$ npm install 
```

...

### Credentials
Available in Lastpass, and in the Google Drive

---

## Production
### Create the environments

1. Create the VHOST and the folders structure on servers with the following model :
    - `prod/<domain>/<subdomain>/public/web` (exemple for `www.tiz.fr` : `prod/tiz.fr/www/public/web`)
    - `preprod/<domain>/<subdomain>/public/web` (exemple for `stsa.tiz.fr` : `preprod/tiz.fr/stsa/public/web`)
2. Add a `A` entry to [Gandhi](https://id.gandi.net/fr/) for exemple `<exemple>.tiz.fr`
3. On the server create an SSH local key (if it does not already exists) (```ssh-keygen -t rsa```)
4. Ask Tiz to add the previous SSH key (`id_rsa.pub`) to bitbucket (send an email with the content of id_rsa.pub and followinf infos)
    - Server IP / 
    - Server type : Mutu / VPS / Dédié
    - name of server : exple vps-e75655b1
    - url of prod website : exple www.efluid.com
    - username that generared the ssh key : exple root
5. Clone the git repository into the folders (stage + prod)
    - on **prod** checkout on branch **master**
    - on **preprod** checkout on branch **staging/stage**

---

## Test and deploy

### Deploy method

`Envoiz`, `dploy`, `Pipeline`, etc.

...

---

## Frequently asked questions

##### Question 1
 * Answer 1

##### Question 2
 * Answer 2