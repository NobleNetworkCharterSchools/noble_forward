Noble Forward .Org
==================

The WordPress site for NobleForward.org is hosted on an AWS Lightsail instance. The subdomain students.nobleforward.org is hosted on a separate Lightsail instance for ease of customization, etc.

SSL Cert
--------
The certificate is managed using EFF's LetsEncrypt's Certbot.

It should automatically be renewed by a cronjob on the server (run as root, as is required). The job runs on the 1st and 15th of every month. If run too far out from to the expiration date (30 days or more?), nothing will happen, but the first time it runs within 30(?) days of expiration date, it should renew for another 90 days. It's likely that an expiration notice email will be sent by expiry@letsencrypt.org between a job that fails and the next scheduled run, which should succeed.

If needed to run manually, however, you can run: ``$ sudo /opt/bitnami/letsencrypt/certbot-auto renew && sudo /opt/bitnami/ctlscript.sh restart apache``
