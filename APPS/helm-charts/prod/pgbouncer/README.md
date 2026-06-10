## PgBouncer with SealedSecret

### Add

```yaml
config:
  databases:
    "*":
      host: $HOSTNAME #CHANGEME
      port: 21274
```

### Create users

```yaml
apiVersion: v1
kind: Secret
metadata:
  name: pgbouncer-userlist-secret
  namespace: pgbouncer
type: Opaque
stringData:
  userlist.txt: |
    "admin" "PASSWORD_HERE"
    "user" "PASSWORD_HERE"
```

### Create admin user

```yaml
apiVersion: v1
kind: Secret
metadata:
  name: pgbouncer-admin-secret
  namespace: pgbouncer
type: Opaque
stringData:
  adminUser: admin
  adminPassword: SECURE_PASSWORD_HERE
```

###
