# kube-app-demo
kubernetes-demo-application

# Install K3s Master node (NAT)
curl -sfL https://get.k3s.io | K3S_TOKEN=12345678 INSTALL_K3S_VERSION=v1.26.8+k3s1 sh -s - server --cluster-init --node-external-ip=x.x.x.x

# Add worker node
curl -sfL https://get.k3s.io | INSTALL_K3S_VERSION=v1.26.8+k3s1 K3S_URL=https://MASTERIP:6443 K3S_TOKEN=12345678 sh -