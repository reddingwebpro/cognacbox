# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "reddingwebpro/cognacbox"
    config.vm.hostname = "cognacbox"
	config.vm.box_version = "3.1"
	config.vm.boot_timeout = 600
    config.vm.network "forwarded_port", guest: 80, host: 8080
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=777"]
    config.vm.provider :virtualbox do |v|
        v.customize ["modifyvm", :id, "--uart1", "0x3F8", "4"]
        v.customize ["modifyvm", :id, "--uartmode1", "file", File::NULL]
        v.memory = 2048
        v.cpus = 2
    end
end
