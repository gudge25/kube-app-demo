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


# Usefull helm

### Goldilocks - viewing resource recommendations in your Kubernetes cluster

depends on ```https://github.com/kubernetes/autoscaler/tree/master/vertical-pod-autoscaler/charts/vertical-pod-autoscaler```
<img width="1521" height="671" alt="image" src="https://github.com/user-attachments/assets/aaef6043-1164-4b19-87e3-7088a803f69d" />


### Kyverno - Unified Policy as Code

### Cast AI  - Application performance

### Trivy - The All-in-One Security Scanner

### Falco - Runtime security.

### Velero - Cluster backups

### LitmusChaos - Simulate failures

### Kube-hunter - security assessment and penetration testing tool for Kubernetes clusters

