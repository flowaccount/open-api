// import 'reflect-metadata'
import { environment } from './environments/environment';
import { createStack } from '@flowaccount/aws-cdk-stack';

const awsEcsCluster = createStack(environment);

