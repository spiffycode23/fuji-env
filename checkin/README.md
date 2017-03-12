# checkin

### Database

See homesys.sql

### Crontab

```
*/5 * * * * /usr/bin/curl --data 'host=dash1.example.com&method=cron&ip=192.168.0.11' http://192.168.0.11/checkin/checkin.php
```

### TODO

- The ip is non-static and all of the hosts have the ip hard coded into their crons >:(
- Cleanse the password and login info from php script
- Add some sort of key for adding info via curl
- Do something with the data you are collecting
- Tune the checkin times. This would be nice to set via puppet
