#!/bin/sh

MANIFEST=$(aws ecr batch-get-image --repository-name mo/ci --image-ids imageTag=latest --query images[].imageManifest --output text)
aws ecr put-image --repository-name mo/ci --image-tag lat2_ --image-manifest "$MANIFEST"
