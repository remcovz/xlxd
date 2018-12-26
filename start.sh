#!/bin/sh

xlxd/xlxd XLX089 194.109.192.236 127.0.0.1
echo `pidof xlxd` > /var/log/xlxd.pid
