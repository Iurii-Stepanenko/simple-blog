## Local development - domains ##

Add the following domains to the `/etc/hosts` file:

```shell
127.0.0.1 simple-blog.local www.simple-blog.local mh-prod-simple-blog.local
```

Urls list:
- [https://simple-blog.local](https://simple-blog.local) 
- [https://www.simple-blog.local](https://www.simple-blog.local) 
- [http://mh-prod-simple-blog.local](http://mh-prod-simple-blog.local)


## Local development - self-signed certificates ##

Generate self-signed certificates before running this composition in the `$SSL_CERTIFICATES_DIR`:

```shell
mkcert -cert-file=simple-blog.local-prod.pem -key-file=simple-blog.local-prod-key.pem simple-blog.local www.simple-blog.local
```

Add these keys to the Traefik configuration file if needed.