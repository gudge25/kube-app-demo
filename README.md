## kube-app-demo
kubernetes-demo-application

## Install K3s Master node (NAT)
```
/usr/local/bin/k3s-uninstall.sh (Optional)
curl -sfL https://get.k3s.io | K3S_TOKEN=12345678 INSTALL_K3S_VERSION=v1.28.9+k3s1 sh -s - server --cluster-init --node-external-ip=1.1.1.1
kubectl create namespace cattle-system

kubectl apply -f https://github.com/cert-manager/cert-manager/releases/download/v1.14.4/cert-manager.crds.yaml
helm install   cert-manager jetstack/cert-manager   --namespace cert-manager   --create-namespace   --version v1.14.4
helm install rancher rancher-latest/rancher   --namespace cattle-system   --set hostname=rancher.IP.sslip.io   --set replicas=1   --set bootstrapPassword=PASS
```

# Add worker node
```
/usr/local/bin/k3s-agent-uninstall.sh  (Optional)
curl -sfL https://get.k3s.io | INSTALL_K3S_VERSION=v1.28.9+k3s1 K3S_URL=https://IP.oraclevcn.com:6443 K3S_TOKEN=12345678 sh -
```
