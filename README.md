## what im doin in vps

1. upadte sudo yum update
2. install docker
3. ill allow to be vps http
sudo firewall-cmd --permanent --add-service=http
sudo firewall-cmd --reload
sudo firewall-cmd --permanent --remove-service=http
