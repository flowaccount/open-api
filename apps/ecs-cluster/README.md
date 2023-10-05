# ECS Cluster

An ECS (Elastic Container Service) is a type of docker container orchestration provided by AWS
[ECS](https://aws.amazon.com/ecs/)

At FlowAccount we utilizes it for our docker orchestration same as EKS, Google Kubernetes, Azure Kubernetes and Redhat Openshift etc.

Here is our story...

## Infrastructure Diagram





### Auto scaling specifications

CPUUtilization: 75%
![CPU-UTILIZATION](./src/assets/images/cpu-utilization-scaling.png)

for more types [read here...](https://mafiaguy.medium.com/a-complete-guide-on-how-to-autoscale-your-ecs-based-application-using-cdk-36d5e0ec46da#:~:text=If%20the%20CPU%20utilization%20exceeds,based%20on%20a%20specific%20metric)

### EC2 Specifications
type: t4g.small
X Services
1 instance > 2 tasks
min: 1 instance
max: 2 instance

## Operations




### Deploying Infrastructure

```bash
yarn nx run flowaccount-ecs-stack:deploy-ecs-service --profile=dev_console --configuration=cluster-sandbox --stackName=servcice-a-production-service --stage=sandbox --serviceName=service-sandbox-a --asgName=sandbox-cluster-default --cpu=512 --memory=400 --imageName=service-sandbox-a --targetGroupArn=arn:aws:elasticloadbalancing:ap-southeast-1:697698820969:targetgroup/openapi-a-tg/47cbbb25a29e50ea
```

### Deploying Application

Using a CI like Github Actions, Jenkins, or other tools you can simply push the image to AWS and update the service to force rolling deployment!

**Command to push image to aws ECR**



**Command to update service for redeployment**




