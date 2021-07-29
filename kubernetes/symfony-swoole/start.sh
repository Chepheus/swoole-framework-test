#!/bin/bash

kubectl apply -f deployment.yml
kubectl apply -f service.yml

minikube service symfony-fpm-service --url