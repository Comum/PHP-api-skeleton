# Api Skeleton

This is proof of concept of a some api endpoints examples using `PHP` (just why not).

The main objective of this repo is to prove the simplicity of creating an API using `PHP`.

## Struture

- `/public` - root endpoint
- `/app` - where the magic happens

## Working routes

- `public/hello/:name`
    - expects a string in `:name`
    - if `:name` not populated an error json is shown
- `public/:anythingBesidesHello`
    - throws an error json if `:anythingBesidesHello` is anything but `hello`

## Run this repo

To run this project I recommend using [XAMPP](https://www.apachefriends.org/index.html) also because of its simplicity and cloning this repo into the `htdocs` directory and starting the apache server.
