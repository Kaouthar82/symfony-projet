# sqli2024_IMS



## Getting started

## Interview Management System Project 

### Clone the project from gitlab 
```
git clone https://gitlab.com/sqli24/sqli2024_ims.git 
```

### Install The project
- [ ] Launch docker
- [ ] Open The project in Your Favorite IDE
- [ ] Open The Terminal of Your IDE and Type ``` docker-compose up -d ```
- [ ] When all containers are up, Now It's time to install the project dependencies, 
so we enter inside The App Container using the following command ``` docker container exec -it 0fae2521a69a bash```
and then ``` composer install ``` and finally ``` npm install ```

### When the Dependencies are installed successfully, we can check our app : 
  - [ ] [Project WebPage](http://localhost:8080/)
  - [ ] [phpMyAdmin](http://localhost:8081/)
  - [ ] [MailCatcher WebPage](http://localhost:1080/)
