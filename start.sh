#!/bin/sh

xlxd/xlxd XLX088 194.109.192.235 127.0.0.1
echo `pidof xlxd` > /var/log/xlxd2.pid
