def PROJECT='app1'
def GIT_URL='git@github.com:flegrand/'+PROJECT+'.git'
def REGISTRY_URL='registry.demo.cloudcontrolled.net/demo/'+PROJECT

node {
        git branch: env.BRANCH_NAME, credentialsId: 'jenkins', url: GIT_URL

        stage "Build and Push Docker image"
        withDockerRegistry(registry: [credentialsId: 'jenkins']) {
                withDockerServer(server: [uri: 'unix:///var/run/docker.sock']) {
                        dockerImg = docker.build(REGISTRY_URL+':'+env.BRANCH_NAME+'-build'+env.BUILD_NUMBER,'.')
                        dockerImg.push()
                        dockerImg.push(env.BRANCH_NAME)
                }
        }

        stage "Deploy"
        sh('bash deploy.sh --project '+PROJECT+' --tag '+env.BRANCH_NAME+'-build'+env.BUILD_NUMBER)
}