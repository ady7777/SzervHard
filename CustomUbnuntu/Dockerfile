FROM ubuntu:latest
RUN apt update && apt install -y \
    openssh-server \
    sudo \
    iputils-ping \
    net-tools \
    apt-utils \
    curl \
    vim \
    nano \
    traceroute \
    lsof \
    git \
    wget \
    gnupg2 \
    unzip \
    bash-completion \
    iproute2 \
    && rm -rf /var/lib/apt/lists/*

RUN useradd -rm -d /home/ansible -s /bin/bash -g root -G sudo -u 1000 ansible

RUN echo "ansible:ansible" | chpasswd

RUN service ssh start

EXPOSE 22

RUN mkdir /home/ansible/.ssh/

RUN echo "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCpSAZ0eyJVAAlohctYCOnOoBjhWjSYaXWw95jcfqEqzBf3tBtvW3QriyIEXqdfMd+N71C1/d1T/JbX08cOaipf05utpWCZvVJl58yom59gLQpJ40DhlJ4tN8r+OVDSiBqnWl9GgGKZ4xZRbWwr1+Xj9O2hdtMVfGtYzmXSakxARzAchm6WhZGXSK6Okg7kn2ICYxWRYHwRoPYovg5lbGdnL8mdY6Xu8Fo0m6yvQIVwGPhZJd6TRrWItOmllYpkqAgLbtQZvrPdtbghvWbNc4qB2zPfvbLJzWlqK1Fl9VZwqD/jayDssv/brLmiOuIExDRQKyq2TLBwYnYaHplR4+J1 asd@asd-VMware-Virtual-Platform" >> /home/ansible/.ssh/id_rsa.pub

RUN cat /home/ansible/.ssh/id_rsa.pub >> /home/ansible/.ssh/authorized_keys

RUN chmod 600 /home/ansible/.ssh/id_rsa.pub

RUN chmod 600 /home/ansible/.ssh/authorized_keys

RUN chmod 700 /home/ansible/.ssh/

RUN chown ansible /home/ansible/

RUN chown ansible /home/ansible/.ssh

RUN chown ansible /home/ansible/.ssh/id_rsa.pub

RUN chown ansible /home/ansible/.ssh/authorized_keys

CMD ["/usr/sbin/sshd","-D"]


