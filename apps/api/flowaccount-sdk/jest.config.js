module.exports = {
    displayName: '-weebhook-service',
    preset: "ts-jest",
    testEnvironment: "node",
    globals: {
        'ts-jest': {
            tsconfig: '<rootDir>/tsconfig.spec.json',
        },
    },
    transform: {
        '^.+\\.[tj]s$': 'ts-jest',
    },
    moduleFileExtensions: ['ts', 'js', 'html'],
    coverageDirectory: '../../../coverage/apps/api/create-cashinvoices',
}