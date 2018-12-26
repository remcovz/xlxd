#!/bin/sh

xlxd/xlxd XLX087 44.137.36.209 127.0.0.1
echo `pidof xlxd` > /var/log/xlxd3.pid
