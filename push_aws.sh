#!/bin/sh

docker tag mo/ci:latest 071985535229.dkr.ecr.ap-southeast-1.amazonaws.com/mo/ci:latest
docker push 071985535229.dkr.ecr.ap-southeast-1.amazonaws.com/mo/ci:latest
