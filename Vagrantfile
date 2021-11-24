# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
    config.vm.box = "agencetiz/vmstartiz--lamp"
    config.vm.box_version = "1.0"
    config.vm.network "forwarded_port", guest: 80, host: 1212
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=777"]

    # SSh Keys
    config.vm.provision "shell" do |s|
        ssh_prv_key = ""
        ssh_pub_key = ""
        if File.file?("#{Dir.home}/.ssh/id_rsa")
            ssh_config = File.read("#{Dir.home}/.ssh/config")
            ssh_prv_key = File.read("#{Dir.home}/.ssh/id_rsa")
            ssh_pub_key = File.readlines("#{Dir.home}/.ssh/id_rsa.pub").first.strip
        else
            puts "No SSH key found. You will need to remedy this before pushing to the repository."
        end
        s.inline = <<-SHELL
            if grep -sq "#{ssh_pub_key}" /home/vagrant/.ssh/authorized_keys; then
                echo "SSH keys already provisioned."
                exit 0;
            fi
            echo "SSH key provisioning."
            echo #{ssh_pub_key} >> /home/vagrant/.ssh/authorized_keys
            echo #{ssh_pub_key} > /home/vagrant/.ssh/id_rsa.pub
            chmod 644 /home/vagrant/.ssh/id_rsa.pub
            echo "#{ssh_prv_key}" > /home/vagrant/.ssh/id_rsa
            chmod 600 /home/vagrant/.ssh/id_rsa
            echo "#{ssh_config}" > /home/vagrant/.ssh/config
            chown -R vagrant:vagrant /home/vagrant
            exit 0
        SHELL
    end
end