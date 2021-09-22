# Golb


A simple blog using Laravel 8.


## Environment
- Laravel `8.4`
- composer `2.1`
- PHP `7.4`
- MySQL `8.0`

## Features
- Guest can:
    - login
    - List posts
    - Read posts
    - Register
- User can:
    - Logout
    - List users
    - Delete users
    - Create users
    - Edit users
    - Create posts
    - Edit posts
    - Delete posts

# How to run 

The application `.env.sample` file is containing all the environment variables which could be required to run the application. In the sample `env` file the values for database and redis host was 127.0.0.1, they have been changed with the specific service names within [docker-compose.yml](./docker-compose.yml) file.  

The version of the services given in the [docker-compose.yml](./docker-compose.yml) file chosen according to given [environment requirements](#environment) above.

Running the application is pretty straigtforward ; 

```bash 
$ git clone git@github.com:merkez/golb.git
$ cd golb
$ cp .env.example .env 
$ docker-compose up -d 
```

The application will serve at 8181 within docker container itself, however it has been forwarded to 80 on host side, as it can be seen from the [docker-compose.yml](./docker-compose.yml#L14) file

After running `docker-compose up -d` command, application will be available to browse in [http://localhost](http://localhost)

The other service ports have not been mapped to any host ports, the main reason is that there is no need to do that unless it is required. Since all services are using common network, they will be able to communicate between each other. 


# How to deploy

There are many ways to deploy this application and it may depend on the situation. For instance, it can be deployed to AWS as Fargate service or pure EC2 deployment. Similarly, all different cloud providers have their own different services to have docker deployments, and this application can be deployed by some configuration file like a YAML which contains all required fields by cloud provider. Afterwards, it is just a matter of changing `.env` file to specify database in another host, or it can be same if it will be deployed to same host on cloud. 

Another deployment could be to Kubernetes, which is similar to deployments to cloud providers. Deployment yaml file can be prepared and pushed to Kubernetes cluster. 

In all steps, CI/CD pipelines should be used to provide consistency and accuracy. For dedicated servers, deployment can be done by simple bash script or (-to provide more organized option for deploying it to set of machines-) Ansible could be used. 

In ideal case, deployment should be done after, test, pre-release and release steps. In CI, all functinoalities of the application should be tested in all commits at least for master branch, however there might be some exceptions like readme update. Actually it should also have some skeleton to follow and it should be checked through CI however it is not very common in the repositories. 

In order to have an deployment, it would be nice to have tagged commits which will trigger releases. Tags should be in semantic format, one of the reason for having tagged commits and releases is having easy rollback and fixing bugs. 

When tagged commit submitted to origin, CI pipeline should test (-it does not matter whether commit is tagged or not for running tests-) and release based on semantic tags provided by user. 

After release, another pipeline which is known as CD should take place and update the version of the docker image on remote host and restart. 

Here I did not integrated deployment pipeline (-no server/service provided to be deployed-) however, in case it is easy to do. 

I have added release and test CI files for Github Actions. They can be checked from [workflows](.github/workflows/) folder.

For any further questions or tasks, I am happy to answer and complete them. If something is missing or misleading, it would be nice to notify me, as soon as possible. 

Note: This is a challenge assigned by Metzler-Vater (https://www.metzler-vater.com/en/) Company for Workstudent Devops Position. The challenge was to create Dockerfile and dokcer-compose files by explaning about them and provide some information about how to deploy it. Completed  [13.09.2021]



