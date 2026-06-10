## Backup Sealed Secrets

kubectl get secret -n sealed-secrets -l sealedsecrets.bitnami.com/sealed-secrets-key -o yaml > main.key

## Restore

kubectl apply -f main.key
kubectl delete pod -n sealed-secrets -l app.kubernetes.io/name=sealed-secrets
