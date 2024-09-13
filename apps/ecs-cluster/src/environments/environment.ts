import { Peer, Port } from 'aws-cdk-lib/aws-ec2';
import { ContainerImage, NetworkMode, PlacementConstraint } from 'aws-cdk-lib/aws-ecs';
import { ServicePrincipal } from 'aws-cdk-lib/aws-iam';
import { IECSStackEnvironmentConfig } from '@flowaccount/aws-cdk-stack';
import { DnsRecordType, RoutingPolicy } from 'aws-cdk-lib/aws-servicediscovery';
import { ApplicationProtocol, IpAddressType, TargetType } from 'aws-cdk-lib/aws-elasticloadbalancingv2';

let _serviceName: string = process.env.serviceName;
let _stage: string = process.env.stage;
_stage = _stage === `undefined` ? undefined : _stage;
let _targetGroupArn: string = process.env.targetGroupArn?.toString();
_targetGroupArn = _targetGroupArn === `undefined` ? undefined : _targetGroupArn;
const _asgName: string = process.env.asgName;
const _imageName: string = process.env.imageName;
let _keyPairName: string = process.env.keyPairName;
_keyPairName = _keyPairName === `undefined` ? 'flowsingapre' : _keyPairName;
const existingCluster: boolean = process.env.existingCluster === `true` ? true : false;

const _siteArg: string = process.env.site;

const cloudmapServiceName: string = process.env.cloudmapServiceName ? process.env.cloudmapServiceName : 'undefined';
const cloudmapServiceArnArg: string = process.env.cloudmapServiceArn ? process.env.cloudmapServiceArn : 'undefined';
const cloudmapServiceIdArg: string = process.env.cloudmapServiceId ? process.env.cloudmapServiceId : 'undefined';
const cpuArg: string | 512 = process.env.cpu ? process.env.cpu : 512;
const memoryArg: string | 960 = process.env.memory ? process.env.memory : 960;
const useServiceDiscovery: string = process.env.useServiceDiscovery ? process.env.useServiceDiscovery : 'false';

const _site = `${_siteArg}`;
const _cpu: number = +cpuArg;
const _memory: number = +memoryArg;
const _region = `ap-southeast-1`;
const _apiprefix = `node`;
const _apisuffix = `api`;
const domainName = `flowaccount.com`;

const clusterDNS: string = _site == 'production' ? 'public-sandbox-system' : `public-sandbox-system-${_stage}`;

const service_environment: string = _stage !== `production` ? `${_stage}` : `Production`;
const _ecr = `765141697745.dkr.ecr.ap-southeast-1.amazonaws.com/flowaccount`;

// setup config
let accountNumber = '765141697745';
let certificateArn = `arn:aws:acm:ap-southeast-1:${accountNumber}:certificate/cc33dec0-9096-42f9-8e6b-47742389c7b8`;
if (service_environment.toLowerCase() == 'sandbox') {
  accountNumber = '697698820969';
  // _dotnetGeneralConfig = `arn:aws:secretsmanager:ap-southeast-1:${accountNumber}:secret:sandbox/dotnetcore/secret-AOBsEL`;
  certificateArn = `arn:aws:acm:ap-southeast-1:${accountNumber}:certificate/80e66d5c-bff1-4e69-9d79-af5a96238f9f`;
}

const api_environment_variables = {
  COMPlus_ThreadPool_ForceMinWorkerThreads: '100',
  ASPNETCORE_URLS: `http://+:5000`,
  ASPNETCORE_ENVIRONMENT: service_environment,
  S3_CONFIG_BUCKET_NAME: 'app-public-sandbox-config',
  S3_CONFIG_PATH: `${clusterDNS}.json`,
};

const api_secrets = [
  {
    // GENERAL_CONFIG: _dotnetGeneralConfig,
  },
];

let imageName = `${_ecr}/${_serviceName}:latest-${_stage}`;

if (_site !== `undefined`) {
  _serviceName = `${_serviceName}-${_site}`;
}

if (_imageName !== `undefined`) {
  imageName = `${_ecr}/${_imageName}:latest-${_serviceName}-${_stage}`;
}

if (useServiceDiscovery === 'true') {
  imageName = `${imageName}-ns`;
}

export const environment: IECSStackEnvironmentConfig = {
  apiprefix: _apiprefix,
  stage: _stage,
  route53Domain: domainName,
  app: _apiprefix,
  s3MountConfig: {
    bucketName: `app-staging-revise-config/centralize-monitoring/${_stage}-es-cloud-configuration`,
    localPath: `/var/`,
  },
  awsCredentials: {
    account: accountNumber,
    region: _region,
  },
  vpc: {
    vpcAttributes: {
      vpcId: `vpc-0c1cde6ada35b3d70`,
      availabilityZones: [`${_region}a`, `${_region}b`],
      privateSubnetIds: [`subnet-0d0242b967352e6a4`, `subnet-0dd7d193b2d2df967`],
    },
    subnets: [
      { subnetId: 'subnet-0d0242b967352e6a4', availabilityZone: '${_region}a' },
      { subnetId: 'subnet-0dd7d193b2d2df967', availabilityZone: '${_region}b' },
    ],
  },
  applicationLoadBalancer: {
    applicationLoadbalancerProperties: {
      loadBalancerName: `${_apiprefix}-${_stage}-public-alb`,
      ipAddressType: IpAddressType.IPV4,
      internetFacing: true,
      publicSubnet1: 'subnet-047907b78c8e2f529',
      publicSubnet2: 'subnet-0faf1b6a',
    },
    certificateArns: [certificateArn],
    redirectConfigs: [
      {
        sourcePort: 80,
        sourceProtocol: ApplicationProtocol.HTTP,
        targetPort: 443,
        targetProtocol: ApplicationProtocol.HTTPS,
      },
    ],
  },
  ecs: {
    //existingCluster: existingCluster,
    defaultServiceDiscoveryNamespace: {
      namespaceName: clusterDNS,
      namespaceArn: 'xxxxx',
      namespaceId: 'xxxxx',
    },
    instancePolicy: {
      statements: [
        {
          actions: [
            `ec2:*`,
            `ecs:CreateCluster`,
            `ecs:DeregisterContainerInstance`,
            `ecs:DiscoverPollEndpoint`,
            `ecs:Poll`,
            `ecs:RegisterContainerInstance`,
            `ecs:StartTelemetrySession`,
            `ecs:UpdateContainerInstancesState`,
            `ecs:Submit*`,
            `ecs:ListTagsForResource`,
            `ecr:GetAuthorizationToken`,
            `ecr:BatchCheckLayerAvailability`,
            `ecr:GetDownloadUrlForLayer`,
            `ecr:BatchGetImage`,
            `logs:CreateLogGroup`,
            `logs:CreateLogStream`,
            `logs:PutLogEvents`,
            `logs:DescribeLogStreams`,
          ],
          resources: [`*`],
        },
      ],
      name: `${_apiprefix}-${_stage}-cluster-policy`,
    },
    instanceRole: {
      name: `${_apiprefix}-${_stage}-cluster-role`,
      assumedBy: [new ServicePrincipal(`ec2.amazonaws.com`)],
    },
    taskExecutionRolePolicy: {
      statements: [
        {
          actions: [
            'ecr:GetAuthorizationToken',
            'ecr:BatchCheckLayerAvailability',
            'ecr:GetDownloadUrlForLayer',
            'ecr:BatchGetImage',
            'logs:CreateLogStream',
            'logs:PutLogEvents',
          ],
          resources: [`*`],
        },
      ],
      name: `${_apiprefix}-${_stage}-task-execution-policy`,
    },
    taskRolePolicy: {
      statements: [
        {
          actions: [
            'ecr:GetAuthorizationToken',
            'ecr:BatchCheckLayerAvailability',
            'ecr:GetDownloadUrlForLayer',
            'ecr:BatchGetImage',
            'logs:CreateLogStream',
            'logs:PutLogEvents',
          ],
          resources: [`*`],
        },
      ],
      name: `${_apiprefix}-${_stage}-task-policy`,
    },
    taskExecutionRole: {
      name: `${_apiprefix}-${_stage}-cluster-task-execution-role`,
      assumedBy: [new ServicePrincipal(`ecs-tasks.amazonaws.com`), new ServicePrincipal(`ec2.amazonaws.com`)],
    },
    taskRole: {
      name: `${_apiprefix}-${_stage}-cluster-task-role`,
      assumedBy: [new ServicePrincipal(`ecs-tasks.amazonaws.com`), new ServicePrincipal(`ec2.amazonaws.com`)],
    },
    providerList: [
      `${_apiprefix}-${_stage}-cluster-default`,
      `lighthouse-${_stage}-asg`,
    ],
    asgList: [
      // ${_stage}-cluster-default`
      {
        launchTemplate: {
          name: `${_apiprefix}-${_stage}-cluster-lt`,
          imageId: `ami-02475bfb1c6cecc65`,
          instanceType: 't4g.micro',
          keyName: _keyPairName,
          version: 1,
          volumeSize: 30,
          volumeType: 'gp3',
        },
        asg: {
          name: `${_apiprefix}-${_stage}-cluster-default`,
          min: '1',
          max: '2',
          desired: '1',
          overrides: [
            {
              InstanceType: 't4g.micro',
            },
          ],
          onDemandBaseCapacity: 0,
          onDemandPercentage: 100,
          protectionFromScaleIn: false,
          instanceProfileName: `${_apiprefix}-${_stage}-cluster-instance-profile`,
          instanceSecurityGroup: {
            name: `${_apiprefix}-${_stage}-cluster-instance-sg`,
            inboudRule: [
              { peer: Peer.anyIpv4(), connection: Port.allTcp() },
              { peer: Peer.anyIpv4(), connection: Port.udp(8125) },
            ],
          },
        },
      }
    ],
    clusterName: `${_apiprefix}-${_stage}-cluster`,
    defaultCloudMapNamespace: {
      name: `${_apiprefix}-${_stage}-${_apisuffix}`,
    },
  },
  service: [
    // template
    {
      capacityProviderName: `${_asgName}`,
      applicationtargetGroup: {
        apiDomain: `${_serviceName}-${_stage}.${domainName}`,
        targetGroupName: `${_serviceName}-${_stage}-tg`,
        targetType: TargetType.INSTANCE,
        port: 80,
        healthCheck: {
          path: '/healthcheck',
        },
      },
      networkMode: NetworkMode.BRIDGE,
      taskDefinition: {
        name: `${_serviceName}-${_stage}-taskdef`,
        isLogs: true,
        logsRetention: 1,
        logGroupName: `${_serviceName}-${_stage}-console`,
        containerDefinitionOptions: {
          image: ContainerImage.fromRegistry(imageName),
          memoryReservationMiB: _memory,
          cpu: _cpu,
          hostname: `${_serviceName}-${_stage}`,
          environment: { ...api_environment_variables },
          // portMappings: api_portmappings,
          portMappings: [{ hostPort: 0, containerPort: 5000 }],
        },
        secrets: api_secrets,
        volume: [
          {
            name: `instance-metadata-${_stage}`,
            host: {
              sourcePath: `/var/lib/ecs/data/metadata/${_stage}-cluster`,
            },
          },
        ],
        mountPoints: [
          {
            mounts: [
              {
                sourceVolume: `instance-metadata-${_stage}`,
                containerPath: `/var/lib/ecs/data/metadata/`,
                readOnly: true,
              },
            ],
          },
        ],
      },
      name: `${_serviceName}-${_stage}-service`,
      desired: 1,
      minHealthyPercent: 50,
      scaleProps: {
        minCapacity: 1,
        maxCapacity: 5,
      },
      cpuScalingProps: {
        targetUtilizationPercent: 75,
      },
      placementConstraint: [PlacementConstraint.memberOf(`attribute:ecs.os-type == linux`)],
      targetGroupArn: _targetGroupArn,
    },
    {
      capacityProviderName: `${_asgName}`,
      applicationtargetGroup: {
        apiDomain: `${_serviceName}-${_stage}.${domainName}`,
        targetGroupName: `${_serviceName}-${_stage}-tg`,
        targetType: TargetType.INSTANCE,
        port: 80,
        healthCheck: {
          path: '/healthcheck',
        },
      },
      networkMode: NetworkMode.BRIDGE,
      taskDefinition: {
        name: `${_serviceName}-${_stage}-taskdef`,
        isLogs: true,
        logsRetention: 1,
        logGroupName: `${_serviceName}-${_stage}-console`,
        containerDefinitionOptions: {
          image: ContainerImage.fromRegistry(imageName),
          memoryReservationMiB: _memory,
          cpu: _cpu,
          hostname: `${_serviceName}-${_stage}`,
          environment: {
            ...api_environment_variables,
            AKKA__CLUSTER__DNS: clusterDNS,
            AKKA_SERVICE_NAME: cloudmapServiceName,
          },
          portMappings: [
            { hostPort: 0, containerPort: 5000 },
            { hostPort: 0, containerPort: 5110 },
            { hostPort: 0, containerPort: 9110 },
          ],
        },
        secrets: api_secrets,
        volume: [
          {
            name: `instance-metadata-${_stage}`,
            host: {
              sourcePath: `/var/lib/ecs/data/metadata/${_stage}-cluster`,
            },
          },
        ],
        mountPoints: [
          {
            mounts: [
              {
                sourceVolume: `instance-metadata-${_stage}`,
                containerPath: `/var/lib/ecs/data/metadata/`,
                readOnly: true,
              },
            ],
          },
        ],
      },
      name: `${_serviceName}-${_stage}-ns-service`,
      desired: 1,
      minHealthyPercent: 50,
      scaleProps: {
        minCapacity: 1,
        maxCapacity: 5,
      },
      cpuScalingProps: {
        targetUtilizationPercent: 75,
      },
      placementConstraint: [PlacementConstraint.memberOf(`attribute:ecs.os-type == linux`)],
      targetGroupArn: _targetGroupArn,
      serviceDiscoveryNamespace: {
        serviceName: cloudmapServiceName,
        serviceArn: cloudmapServiceArnArg,
        serviceId: cloudmapServiceIdArg,
        dnsRecordType: DnsRecordType.SRV,
        routingPolicy: RoutingPolicy.MULTIVALUE,
      },
    },
  ],
  tag: [{ key: 'AppStack', value: `${_apiprefix}-${_stage}-stack` }],
};
