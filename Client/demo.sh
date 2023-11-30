#!/bin/bash
sudo service network-manager stop
sudo service network-manager status
sudo ip a a dev enp0s25 192.168.0.2/24
