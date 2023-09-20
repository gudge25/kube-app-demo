# kube-app-demo
kubernetes-demo-application

# Install K3s Master node (NAT)
curl -sfL https://get.k3s.io | INSTALL_K3S_VERSION=v1.26.8+k3s1 sh -s - server --cluster-init --node-external-ip=xxx.xxx.xxx.xxx

# Add worker node
curl -sfL https://get.k3s.io | INSTALL_K3S_VERSION=v1.26.8+k3s1 K3S_URL=https://IP:6443 K3S_TOKEN=NEW_TOKEN sh -