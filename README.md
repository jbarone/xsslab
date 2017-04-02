# XSSLAB

This is a lab environment that was created for use in my BsidesNola talk. Use
it as you will.

## Dependencies

This lab is designed to use docker, so you must have docker installed.

- [ Docker for Mac ](https://docs.docker.com/docker-for-mac/)
- [ Docker for Windows ](https://docs.docker.com/docker-for-windows/)
- [ Docker Toolbox ](https://www.docker.com/products/docker-toolbox)

You will also need some virtual environment such as VirtualBox or VMWare

This setup also needs a `.env` file to specify the setup for MYSQL. An
example configuration is provided and will work as is, just copy it to
`.env` and change the passwords to something you might prefer.

## Running

With all dependencies met, we are now ready to get it up and running.

```
 $ git clone https://github.com/jbarone/xsslab.git
 $ cd xsslab
 $ cp env-example .env
 $ docker-compose up -d --build
```

## Playing

That's it. You are now ready to play. Just surf to [localhost](http://127.0.0.1)

If you are using docker-machine then you need to navigate to the ip of the vm.

```
 $ open http://$(docker-machine ip default)
```
