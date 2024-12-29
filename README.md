

## About Human resource  

HRM project if for Human resource  


## Tech Stack

This project is using following tech stack
- [Laravel-11](https://laravel.com/)
- [livewire v-3](https://laravel-livewire.com/)
- [Alpine js v-3](https://alpinejs.dev/)
- [ bootstrap](https://getbootstrap.com/docs/5.2)
- [Pusher](https://pusher.com/)
- [Jetstream](https://jetstream.laravel.com/)

## To Setup Project

Install docker on your system  first 

- clone git repo https://github.com/aftabkhaliq86/hrm.git
- git pull origin master
- git checkout -b "your branch"
- composer install
- npm install
- npm run dev


### packages

- Livewire
- jetstream
- Laravel Websockets
- Fortify
- Alpine js
- laravel pint

## Git Rules
- Always  create new branch from development for task with proper naming like  CS-name of the task/feature
- After doing  your task   always  run git merge development and resolve  conflicts any
- Create pull request of your branch so  reviewer can view and comment on the code
- remember pull requests  shouldn't  be too length or long  push small requests so reviewers can review and merge quickly
- use Laravel pint for coding standards and before commit or pull request always format your code with laravel pint and do not blindly run pint first review the pint changes  if all are ok then use pint to change the files 
- run ./vendor/bin/pint --test -v to see the changes pint going to make in your project after carefull review the changed files if all ok than run the below command 
- run ./vendor/bin/pint -v
